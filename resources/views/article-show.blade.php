@extends('layouts.app')

@section('title', $article->getSeoTitle())
@section('meta_description', $article->getSeoDescription())
@if($article->meta_keywords)
@section('keywords', $article->meta_keywords)
@endif
@if($article->getOgImage())
@section('og_image', asset('storage/' . $article->getOgImage()))
@endif

@section('content')
<div class="pt-20">
    <div class="max-w-4xl mx-auto px-6 pt-8 pb-24">

        {{-- Header --}}
        <div class="flex flex-col  mb-12">
            <h1 class="text-2xl md:text-4xl font-light text-gray-900 leading-[1.15] mb-8 max-w-3xl">
                {{ $article->title }}
            </h1>
            <div class="flex items-center gap-4">
                <div class="text-left">
                    <p class="text-xs text-gray-500 font-light flex items-center gap-3">
                        @if($article->published_at)
                        <span>{{ $article->published_at->format('M d, Y') }}</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>

        {{-- Hero Image --}}
        @if($article->featured_image)
        <div class="w-full aspect-[21/9] rounded-2xl overflow-hidden mb-16 shadow-2xl shadow-brand/5">
            <img alt="{{ $article->title }}" class="w-full h-full object-cover"
                 src="{{ asset('storage/' . $article->featured_image) }}"/>
        </div>
        @endif

        {{-- Excerpt / Pull quote --}}
        @if($article->excerpt)
        <div class="px-0 md:px-12 mb-10">
            <p class="text-xl font-light italic text-gray-600 border-l-2 border-brand pl-6 py-2">
                {{ $article->excerpt }}
            </p>
        </div>
        @endif

        {{-- Content --}}
        <div class="prose prose-slate max-w-none px-0 md:px-12">
            {!! $article->content !!}
        </div>

        {{-- Keywords as tags --}}
        @if($article->meta_keywords)
        <div class="mt-16 pt-8 border-t border-gray-100 flex flex-wrap gap-2">
            @foreach(array_filter(array_map('trim', explode(',', $article->meta_keywords))) as $keyword)
            <span class="px-4 py-1.5 bg-gray-50 text-gray-500 text-xs font-medium rounded-full">{{ $keyword }}</span>
            @endforeach
        </div>
        @endif

        {{-- Back link --}}
        <div class="mt-12">
            <a href="{{ route('articles') }}"
               class="text-sm text-brand font-medium hover:underline flex items-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                {{ $article->language === 'id' ? 'Kembali ke artikel' : 'Back to articles' }}
            </a>
        </div>
    </div>

    {{-- Related Articles --}}
    @if($related->isNotEmpty())
    <section class="bg-gray-50/50 border-y border-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <span class="text-brand text-xs font-bold tracking-[0.2em] uppercase mb-4 block">
                        @lang('front.articles.article_show_keep_reading')
                    </span>
                    <h3 class="text-3xl font-light text-gray-900">
                        @lang('front.articles.article_show_related_title')
                    </h3>
                </div>
                <a class="text-sm font-semibold text-brand hover:underline flex items-center gap-1"
                   href="{{ route('articles') }}">
                    @lang('front.articles.article_show_view_all')
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($related as $rel)
                <a href="{{ route('articles.show', $rel->slug) }}" class="group">
                    <div class="aspect-[16/10] rounded-xl overflow-hidden mb-6 bg-gray-100">
                        @if($rel->featured_image)
                        <img alt="{{ $rel->title }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             src="{{ asset('storage/' . $rel->featured_image) }}"/>
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-brand/10 to-gray-200 flex items-center justify-center">
                            <span class="material-symbols-outlined text-4xl text-gray-300">article</span>
                        </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-light text-gray-900 group-hover:text-brand transition-colors mb-3">
                        {{ $rel->title }}
                    </h4>
                    @if($rel->excerpt)
                    <p class="text-sm text-gray-500 font-light line-clamp-2">{{ $rel->excerpt }}</p>
                    @endif
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
@endsection
