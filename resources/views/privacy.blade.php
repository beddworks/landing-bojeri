@extends('layouts.app')

@section('title', __('front.meta.privacy_title'))
@section('meta_description', __('front.meta.privacy_description'))

@section('content')
<div class="container mx-auto px-4 md:px-6 py-20 max-w-3xl">

    {{-- Header --}}
    <div class="mb-12">
        <a href="/" class="inline-flex items-center gap-1.5 text-sm text-brand font-medium mb-8 hover:underline">
            <span class="material-symbols-outlined text-base">arrow_back</span> @lang('front.privacy.back_home')
        </a>
        <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-3">@lang('front.privacy.label')</p>
        <h1 class="text-4xl md:text-5xl font-extralight text-gray-900 mb-4">@lang('front.privacy.title') <span class="font-medium gradient-text">@lang('front.privacy.title_accent')</span></h1>
        <p class="text-gray-500 font-light">@lang('front.privacy.updated') <time datetime="2026-01-01">@lang('front.privacy.updated_date')</time></p>
    </div>

    {{-- Content --}}
    <div class="prose-custom space-y-10 text-gray-600 font-light leading-relaxed">

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s1_title')</h2>
            <p>{!! __('front.privacy.s1_body') !!}</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s2_title')</h2>
            <p class="mb-3">@lang('front.privacy.s2_intro')</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.privacy.s2_account') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.privacy.s2_billing') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.privacy.s2_usage') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.privacy.s2_business') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.privacy.s2_device') !!}</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s3_title')</h2>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s3_item1')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s3_item2')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s3_item3')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s3_item4')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s3_item5')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s3_item6')</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s4_title')</h2>
            <p class="mb-3">@lang('front.privacy.s4_intro')</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.privacy.s4_providers') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.privacy.s4_legal') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.privacy.s4_transfers') !!}</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s5_title')</h2>
            <p>@lang('front.privacy.s5_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s6_title')</h2>
            <p>@lang('front.privacy.s6_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s7_title')</h2>
            <p class="mb-3">@lang('front.privacy.s7_intro')</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s7_item1')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s7_item2')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s7_item3')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s7_item4')</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>@lang('front.privacy.s7_item5')</span></li>
            </ul>
            <p class="mt-3">{!! __('front.privacy.s7_contact') !!}</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s8_title')</h2>
            <p>{!! __('front.privacy.s8_body', ['url' => route('cookies')]) !!}</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s9_title')</h2>
            <p>@lang('front.privacy.s9_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s10_title')</h2>
            <p>@lang('front.privacy.s10_body')</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.privacy.s11_title')</h2>
            <p>{!! __('front.privacy.s11_body') !!}</p>
        </section>

    </div>

    {{-- Related links --}}
    <div class="mt-16 pt-8 border-t border-gray-100 flex flex-wrap gap-4">
        <a href="{{ route('terms') }}" class="text-sm text-brand hover:underline font-medium">@lang('front.privacy.link_terms')</a>
        <a href="{{ route('cookies') }}" class="text-sm text-brand hover:underline font-medium">@lang('front.privacy.link_cookies')</a>
    </div>
</div>
@endsection
