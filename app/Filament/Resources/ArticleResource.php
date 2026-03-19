<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Articles';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Content')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                        if (($get('slug') ?? '') !== Str::slug($old ?? '')) {
                                            return;
                                        }
                                        $set('slug', Str::slug($state ?? ''));
                                    })
                                    ->maxLength(255),

                                TextInput::make('slug')
                                    ->required()
                                    ->unique(Article::class, 'slug', ignoreRecord: true)
                                    ->rules(['regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/'])
                                    ->maxLength(255)
                                    ->helperText('Auto-generated from title. Lowercase letters, numbers, and hyphens only.'),
                            ]),

                        Textarea::make('excerpt')
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('Short summary shown in listings.')
                            ->columnSpanFull(),

                        TiptapEditor::make('content')
                            ->profile('default')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Settings')
                    ->schema([
                        Grid::make(4)
                            ->schema([
                                Select::make('type')
                                    ->options([
                                        'article'   => 'Article',
                                        'marketing' => 'Marketing',
                                    ])
                                    ->required()
                                    ->default('article'),

                                Select::make('language')
                                    ->options([
                                        'en' => 'English',
                                        'id' => 'Indonesian',
                                    ])
                                    ->required()
                                    ->default('en'),

                                Select::make('status')
                                    ->options([
                                        'draft'     => 'Draft',
                                        'published' => 'Published',
                                    ])
                                    ->required()
                                    ->default('draft')
                                    ->live(),

                                DateTimePicker::make('published_at')
                                    ->label('Publish Date')
                                    ->visible(fn (Get $get): bool => $get('status') === 'published')
                                    ->nullable(),
                            ]),

                        FileUpload::make('featured_image')
                            ->label('Featured Image')
                            ->image()
                            ->disk('public')
                            ->directory('articles')
                            ->imageEditor()
                            ->nullable(),
                    ]),

                Section::make('SEO')
                    ->icon('heroicon-o-magnifying-glass')
                    ->collapsible()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->placeholder('Defaults to article title')
                                    ->helperText('50–60 characters recommended.')
                                    ->maxLength(70),

                                TextInput::make('meta_keywords')
                                    ->label('Meta Keywords')
                                    ->placeholder('keyword1, keyword2, keyword3')
                                    ->helperText('Comma-separated keywords.')
                                    ->maxLength(255),
                            ]),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->placeholder('Defaults to excerpt')
                            ->helperText('120–160 characters recommended.')
                            ->rows(3)
                            ->maxLength(160)
                            ->columnSpanFull(),

                        FileUpload::make('og_image')
                            ->label('Social Share Image')
                            ->helperText('1200×630 px recommended. Falls back to featured image.')
                            ->image()
                            ->disk('public')
                            ->directory('articles/og')
                            ->imageEditor()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp']),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(55)
                    ->tooltip(fn (Article $record): string => $record->title),

                TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'article'   => 'info',
                        'marketing' => 'warning',
                        default     => 'gray',
                    }),

                TextColumn::make('language')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => strtoupper($state))
                    ->color(fn (string $state): string => match ($state) {
                        'en'    => 'success',
                        'id'    => 'primary',
                        default => 'gray',
                    }),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft'     => 'gray',
                        'published' => 'success',
                        default     => 'gray',
                    }),

                TextColumn::make('robots')
                    ->label('Robots')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'index,follow'     => 'success',
                        'noindex,follow'   => 'warning',
                        'index,nofollow'   => 'warning',
                        'noindex,nofollow' => 'danger',
                        default            => 'gray',
                    })
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('views')
                    ->label('Views')
                    ->numeric()
                    ->sortable()
                    ->icon('heroicon-o-eye'),

                TextColumn::make('published_at')
                    ->label('Published')
                    ->date('M d, Y')
                    ->sortable()
                    ->placeholder('Not published'),

                TextColumn::make('created_at')
                    ->date('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'article'   => 'Article',
                        'marketing' => 'Marketing',
                    ]),

                SelectFilter::make('language')
                    ->options([
                        'en' => 'English',
                        'id' => 'Indonesian',
                    ]),

                SelectFilter::make('status')
                    ->options([
                        'draft'     => 'Draft',
                        'published' => 'Published',
                    ]),

                Filter::make('published_at')
                    ->form([
                        Forms\Components\DatePicker::make('published_from')->label('Published from'),
                        Forms\Components\DatePicker::make('published_until')->label('Published until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['published_from'],
                                fn (Builder $q, $date) => $q->whereDate('published_at', '>=', $date),
                            )
                            ->when(
                                $data['published_until'],
                                fn (Builder $q, $date) => $q->whereDate('published_at', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];
                        if ($data['published_from'] ?? null) {
                            $indicators['published_from'] = 'Published from ' . $data['published_from'];
                        }
                        if ($data['published_until'] ?? null) {
                            $indicators['published_until'] = 'Published until ' . $data['published_until'];
                        }
                        return $indicators;
                    }),

                Filter::make('missing_seo')
                    ->label('Missing SEO')
                    ->query(fn (Builder $q) => $q->where(function ($q) {
                        $q->whereNull('meta_title')
                          ->orWhereNull('meta_description');
                    }))
                    ->toggle(),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'view'   => Pages\ViewArticle::route('/{record}'),
            'edit'   => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
