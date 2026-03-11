@extends('layouts.app')

@section('title', __('front.meta.articles_title'))
@section('meta_description', __('front.meta.articles_description'))

@section('content')
<div class="pt-20">
    <div class="max-w-4xl mx-auto px-6 pt-8 pb-24">
        <div class="flex flex-col items-center text-center mb-12">
            <span class="text-brand text-xs font-bold tracking-[0.2em] uppercase mb-6">@lang('front.articles.article_show_category')</span>
            <h1 class="text-4xl md:text-6xl font-light text-gray-900 leading-[1.15] mb-8 max-w-3xl">
                @lang('front.articles.article_show_title')
            </h1>
            <div class="flex items-center gap-4">
                <div class="size-12 rounded-full overflow-hidden bg-gray-100 border border-gray-200">
                    <img alt="@lang('front.articles.article_show_author_alt')" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkNMTOluOeAFnXoQCjVNwDnZJ9XEXNhXLgTjV6MVIsMiJOSbR3HW4m1YGaDPuZgBrSOIYn0arFELPKbHRVsuNxvU_IS2n2tc5_ewJUkDEV5elm7Ly6O6L0FqrfE9-llD-uqE-qm9LAGpyN4nEZH1EXMYvXWr7JlQnK99Q_vQBSV-U120E5MVj2v0E0n1-5pjdu5nXuL6cemdvkGKuJrtZM6ogoko2ukRCQVujXkqm1GEbSV5M3Cdv11xZZ14RrABn40NkTFMf4skyb"/>
                </div>
                <div class="text-left">
                    <p class="text-sm font-semibold text-gray-900 leading-none mb-1">@lang('front.articles.article_show_author_name')</p>
                    <p class="text-xs text-gray-500 font-light">@lang('front.articles.article_show_meta')</p>
                </div>
                <div class="ml-6 flex gap-2">
                    <button class="size-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-500 hover:text-brand hover:border-brand transition-all">
                        <span class="material-symbols-outlined text-sm">share</span>
                    </button>
                </div>
            </div>
        </div>

        {{-- Hero Image --}}
        <div class="w-full aspect-[21/9] rounded-2xl overflow-hidden mb-16 shadow-2xl shadow-brand/5">
            <img alt="@lang('front.articles.article_show_hero_alt')" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuApT3sls9ysqvQfLtKwJYEbA7TxkVSEOinUgJT9XEW863XGHYW5Bvw_W1j1yjjvtXwQn7teZi0ihh4liHFXT5HvIkDRTQV5Bi2h2O99I8x2GDT2Z1MHts8Gf2f6FstTUZKyre7PB_Wp57xrB7NBXwBVMLBbM6O4104FHtUcSYKA48ny882_vWyFLuGmXZ0yKpuO1JSaOIsQKSs_omjvJ10iHytTegxSNvrelLTsQdX_DN6qxwJCyq01r42VeRwEkgNKLksh6v_Q-O_X"/>
        </div>

        {{-- Content --}}
        <div class="prose prose-slate max-w-none px-0 md:px-12">
            <p class="text-xl font-light italic text-gray-600 border-l-2 border-brand pl-6 py-2 mb-10">
                @lang('front.articles.article_show_intro')
            </p>
            <p>
                @lang('front.articles.article_show_p1')
            </p>
            <h2 class="text-2xl font-light text-gray-900 mt-12 mb-6">@lang('front.articles.article_show_h2_1')</h2>
            <p>
                @lang('front.articles.article_show_p2')
            </p>
            <ul class="space-y-4 my-8">
                <li class="flex gap-4">
                    <span class="material-symbols-outlined text-brand text-xl">check_circle</span>
                    <span class="text-gray-600 font-light">@lang('front.articles.article_show_li1')</span>
                </li>
                <li class="flex gap-4">
                    <span class="material-symbols-outlined text-brand text-xl">check_circle</span>
                    <span class="text-gray-600 font-light">@lang('front.articles.article_show_li2')</span>
                </li>
                <li class="flex gap-4">
                    <span class="material-symbols-outlined text-brand text-xl">check_circle</span>
                    <span class="text-gray-600 font-light">@lang('front.articles.article_show_li3')</span>
                </li>
            </ul>
            <h2 class="text-2xl font-light text-gray-900 mt-12 mb-6">@lang('front.articles.article_show_h2_2')</h2>
            <p>
                @lang('front.articles.article_show_p3')
            </p>
        </div>

        {{-- Tags --}}
        <div class="mt-16 pt-8 border-t border-gray-100 flex flex-wrap gap-2">
            <span class="px-4 py-1.5 bg-gray-50 text-gray-500 text-xs font-medium rounded-full">SaaS</span>
            <span class="px-4 py-1.5 bg-gray-50 text-gray-500 text-xs font-medium rounded-full">ERP</span>
            <span class="px-4 py-1.5 bg-gray-50 text-gray-500 text-xs font-medium rounded-full">@lang('front.articles.filter_strategy')</span>
        </div>
    </div>

    {{-- Related Articles Section --}}
    <section class="bg-gray-50/50 border-y border-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <span class="text-brand text-xs font-bold tracking-[0.2em] uppercase mb-4 block">@lang('front.articles.article_show_keep_reading')</span>
                    <h3 class="text-3xl font-light text-gray-900">@lang('front.articles.article_show_related_title')</h3>
                </div>
                <a class="text-sm font-semibold text-brand hover:underline flex items-center gap-1" href="{{ route('articles') }}">
                    @lang('front.articles.article_show_view_all') <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Related Card 1 --}}
                <div class="group cursor-pointer">
                    <div class="aspect-[16/10] rounded-xl overflow-hidden mb-6 bg-white shadow-sm">
                        <img alt="@lang('front.articles.article_show_related_img_alt')" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMi--saskPcpLdLzTeQXJHXZV3FQmzgIt4th2XWqQRN9ZGl2aoBljXe759fUp33s-FOrpdsTMjOyzaitWbv4j4UxHVz3v3WKkGbA-kmrg4DZ3_KJ5SUC_HJwfr7pgRwRn_ncIrw1INix0UIrPq_Z2l9ZI6ZnY-RP44cFh41phqnBnro-i26BOjRK40p6rZTKa8GTH4ni8yIG_hCXz99ZAYVT-psL5D4J_L1G_ybj95rXR-izugig3Y7bF1B1tICRg2auxCajLEQwpX"/>
                    </div>
                    <span class="text-brand text-[10px] font-bold tracking-widest uppercase mb-2 block">@lang('front.articles.filter_cat_case')</span>
                    <h4 class="text-xl font-light text-gray-900 group-hover:text-brand transition-colors mb-3">@lang('front.articles.article_show_related1_title')</h4>
                    <p class="text-sm text-gray-500 font-light line-clamp-2">@lang('front.articles.article_show_related1_desc')</p>
                </div>
                {{-- Related Card 2 --}}
                <div class="group cursor-pointer">
                    <div class="aspect-[16/10] rounded-xl overflow-hidden mb-6 bg-white shadow-sm">
                        <img alt="@lang('front.articles.article_show_related_img_alt')" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbMWslL3fTeAHYNpmnAq2NVNeRhw-YDfo5NWot1HriOrcwn5F_9JrjW_pZQutHP8zN9iJy3kvxcSjqhjUcwGHAgIXjKUMxqxtwyFi2LXbdi0NNrJwblUDnBc4HOEglRpYXCsGK7oDsGZKRNnPd5w3z8rh69zmh0dP362Ijvs26dUALp1mzsg7Z2TupZTm9ovLcer4JzcXMjgB6LBjjiRL-zJGw9M-gAv-tMXyFhnoim9WONUP2zJgKI4a-cvpeW4XCDyXzhcjTomfS"/>
                    </div>
                    <span class="text-brand text-[10px] font-bold tracking-widest uppercase mb-2 block">@lang('front.articles.article_show_related2_cat')</span>
                    <h4 class="text-xl font-light text-gray-900 group-hover:text-brand transition-colors mb-3">@lang('front.articles.article_show_related2_title')</h4>
                    <p class="text-sm text-gray-500 font-light line-clamp-2">@lang('front.articles.article_show_related2_desc')</p>
                </div>
                {{-- Related Card 3 --}}
                <div class="group cursor-pointer">
                    <div class="aspect-[16/10] rounded-xl overflow-hidden mb-6 bg-white shadow-sm">
                        <img alt="@lang('front.articles.article_show_related_img_alt')" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJ-y1s5ZGdxZjKLZb-fIu5N2HO2DlPQVp8TmqsrDgex0pdR7PfPzP0NE1qV_3ZQkI_khV2Gb1tTbFgTYuEZUlZenpJ88fjAkI50MfYOjB5ow1W7dGiFY77IjeW6ChrD-Ei5LqfALxdlYkF0q1pyv833IqqjbS2F3MPS-NIpCYg-8ATrRcFT2oIgd1BaujLiSXh5-SyaBdbwHqNals7doTPc5duihujyoBNHw0OOpq4U7hvshjn3HAV28ZJqg3MRpvJb_SyECNwc46r"/>
                    </div>
                    <span class="text-brand text-[10px] font-bold tracking-widest uppercase mb-2 block">@lang('front.articles.article_show_related3_cat')</span>
                    <h4 class="text-xl font-light text-gray-900 group-hover:text-brand transition-colors mb-3">@lang('front.articles.article_show_related3_title')</h4>
                    <p class="text-sm text-gray-500 font-light line-clamp-2">@lang('front.articles.article_show_related3_desc')</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
