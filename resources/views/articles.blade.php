@extends('layouts.app')

@section('title', __('front.meta.articles_title'))
@section('meta_description', __('front.meta.articles_description'))

@section('content')
<div class="pt-20">
    <div class="max-w-7xl mx-auto px-6 py-12">

        @if($articles->isNotEmpty())
            @php $featured = $articles->first(); @endphp

            {{-- Hero: Featured Article --}}
            @if($articles->currentPage() === 1)
            <section class="relative rounded-2xl overflow-hidden mb-16 h-[480px] flex items-end group">
                @if($featured->featured_image)
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                         style="background-image: url('{{ asset('storage/' . $featured->featured_image) }}')"></div>
                @else
                    <div class="absolute inset-0 bg-gradient-to-br from-brand/30 to-gray-900"></div>
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/70 to-gray-900/20"></div>
                <div class="relative p-10 md:p-16 max-w-3xl">
                    <span class="inline-block px-3 py-1 bg-brand text-white text-[10px] font-bold uppercase tracking-widest rounded-full mb-6">
                        @lang('front.articles.featured_badge')
                    </span>
                    <h1 class="text-3xl md:text-5xl font-extralight text-white leading-tight mb-6">
                        {{ $featured->title }}
                    </h1>
                    <div class="flex items-center gap-6">
                        <a href="{{ route('articles.show', $featured->slug) }}"
                           class="bg-brand text-white px-8 py-3 rounded-full font-medium hover:bg-brand-dark transition-colors">
                            @lang('front.articles.featured_read_btn')
                        </a>
                       
                    </div>
                </div>
            </section>
            @endif

            {{-- Article Grid --}}
            @php
                $gridArticles = $articles->currentPage() === 1
                    ? $articles->getCollection()->skip(1)
                    : $articles->getCollection();
            @endphp

            @if($gridArticles->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-16">
                @foreach($gridArticles as $item)
                <a href="{{ route('articles.show', $item->slug) }}" class="group">
                    <div class="relative aspect-[16/10] rounded-xl overflow-hidden mb-5 bg-gray-100">
                        @if($item->featured_image)
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                 style="background-image: url('{{ asset('storage/' . $item->featured_image) }}')"></div>
                        @else
                            <div class="absolute inset-0 bg-gradient-to-br from-brand/10 to-gray-200 flex items-center justify-center">
                                <span class="material-symbols-outlined text-5xl text-gray-300">article</span>
                            </div>
                        @endif
                    </div>
                    <h3 class="text-xl font-light leading-snug mb-3 text-gray-900 group-hover:text-brand transition-colors">
                        {{ $item->title }}
                    </h3>
                    @if($item->excerpt)
                    <p class="text-gray-500 font-light text-sm line-clamp-3 mb-4">
                        {{ $item->excerpt }}
                    </p>
                    @endif
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-400 text-xs font-medium uppercase tracking-tighter">
                            {{ $item->published_at?->format('M d, Y') }}
                        </span>
                        <span class="inline-flex items-center gap-1 text-xs font-semibold text-brand group-hover:gap-2 transition-all duration-200">
                            @lang('front.articles.featured_read_btn')
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
            @endif

            {{-- Pagination --}}
            @if($articles->hasPages())
            <div class="mt-8 flex justify-center">
                {{ $articles->links() }}
            </div>
            @endif

        @else
            <div class="text-center py-32">
                <span class="material-symbols-outlined text-6xl text-gray-200 mb-6 block">article</span>
                <p class="text-gray-400 font-light text-lg">
                    {{ app()->getLocale() === 'id' ? 'Belum ada artikel tersedia.' : 'No articles available yet.' }}
                </p>
            </div>
        @endif

    </div>
</div>
@endsection
