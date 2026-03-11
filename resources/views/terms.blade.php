@extends('layouts.app')

@section('title', __('front.meta.terms_title'))
@section('meta_description', __('front.meta.terms_description'))

@section('content')
<div class="container mx-auto px-4 md:px-6 py-20 max-w-3xl">

    {{-- Header --}}
    <div class="mb-12">
        <a href="/" class="inline-flex items-center gap-1.5 text-sm text-brand font-medium mb-8 hover:underline">
            <span class="material-symbols-outlined text-base">arrow_back</span> @lang('front.terms.back_home')
        </a>
        <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-3">@lang('front.terms.label')</p>
        <h1 class="text-4xl md:text-5xl font-extralight text-gray-900 mb-4">@lang('front.terms.title') <span class="font-medium gradient-text">@lang('front.terms.title_accent')</span></h1>
        <p class="text-gray-500 font-light">@lang('front.terms.updated') <time datetime="2026-01-01">@lang('front.terms.updated_date')</time></p>
    </div>

    {{-- Content --}}
    <div class="space-y-10 text-gray-600 font-light leading-relaxed">

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s1_title')</h2>
            <p>{!! __('front.terms.s1_body', ['url' => route('privacy')]) !!}</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s2_title')</h2>
            <p>@lang('front.terms.s2_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s3_title')</h2>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s3_item1')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s3_item2')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s3_item3')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s3_item4')</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s4_title')</h2>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s4_item1')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s4_item2')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s4_item3')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s4_item4')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s4_item5')</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s5_title')</h2>
            <p>@lang('front.terms.s5_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s6_title')</h2>
            <p class="mb-3">@lang('front.terms.s6_intro')</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s6_item1')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s6_item2')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s6_item3')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s6_item4')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.terms.s6_item5')</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s7_title')</h2>
            <p>@lang('front.terms.s7_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s8_title')</h2>
            <p>@lang('front.terms.s8_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s9_title')</h2>
            <p>@lang('front.terms.s9_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s10_title')</h2>
            <p>@lang('front.terms.s10_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s11_title')</h2>
            <p>@lang('front.terms.s11_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s12_title')</h2>
            <p>@lang('front.terms.s12_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s13_title')</h2>
            <p>@lang('front.terms.s13_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.terms.s14_title')</h2>
            <p>{!! __('front.terms.s14_body') !!}</p>
        </section>

    </div>

    {{-- Related links --}}
    <div class="mt-16 pt-8 border-t border-gray-100 flex flex-wrap gap-4">
        <a href="{{ route('privacy') }}" class="text-sm text-brand hover:underline font-medium">@lang('front.terms.link_privacy')</a>
        <a href="{{ route('cookies') }}" class="text-sm text-brand hover:underline font-medium">@lang('front.terms.link_cookies')</a>
    </div>
</div>
@endsection
