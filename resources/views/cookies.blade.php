@extends('layouts.app')

@section('title', __('front.meta.cookies_title'))
@section('meta_description', __('front.meta.cookies_description'))

@section('content')
<div class="container mx-auto px-4 md:px-6 py-20 max-w-3xl">

    {{-- Header --}}
    <div class="mb-12">
        <a href="/" class="inline-flex items-center gap-1.5 text-sm text-brand font-medium mb-8 hover:underline">
            <span class="material-symbols-outlined text-base">arrow_back</span> @lang('front.cookies.back_home')
        </a>
        <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-3">@lang('front.cookies.label')</p>
        <h1 class="text-4xl md:text-5xl font-extralight text-gray-900 mb-4">@lang('front.cookies.title') <span class="font-medium gradient-text">@lang('front.cookies.title_accent')</span></h1>
        <p class="text-gray-500 font-light">@lang('front.cookies.updated') <time datetime="2026-01-01">@lang('front.cookies.updated_date')</time></p>
    </div>

    {{-- Intro --}}
    <p class="text-gray-600 font-light leading-relaxed mb-12">
        @lang('front.cookies.intro')
    </p>

    {{-- Cookie categories --}}
    <div class="space-y-4 mb-14" id="cookie-settings">

        {{-- Essential --}}
        <div class="border border-gray-100 rounded-2xl p-6">
            <div class="flex items-start justify-between gap-4">
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="text-base font-semibold text-gray-900">@lang('front.cookies.essential_title')</h3>
                        <span class="text-[10px] font-semibold uppercase tracking-wider px-2 py-0.5 rounded-full bg-brand/10 text-brand">@lang('front.cookies.essential_badge')</span>
                    </div>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.cookies.essential_desc')</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach(['session','XSRF-TOKEN','bojeri_session','remember_token'] as $c)
                        <code class="text-[11px] bg-gray-50 border border-gray-100 px-2 py-0.5 rounded-full text-gray-500">{{ $c }}</code>
                        @endforeach
                    </div>
                </div>
                {{-- Always-on toggle (disabled) --}}
                <div class="shrink-0 mt-1">
                    <div class="w-11 h-6 bg-brand rounded-full flex items-center justify-end pr-1 cursor-not-allowed opacity-70">
                        <div class="w-4 h-4 bg-white rounded-full shadow"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Analytics --}}
        <div class="border border-gray-100 rounded-2xl p-6">
            <div class="flex items-start justify-between gap-4">
                <div class="flex-1">
                    <h3 class="text-base font-semibold text-gray-900 mb-1">@lang('front.cookies.analytics_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.cookies.analytics_desc')</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach(['_ga','_gid','_gat','_fbp'] as $c)
                        <code class="text-[11px] bg-gray-50 border border-gray-100 px-2 py-0.5 rounded-full text-gray-500">{{ $c }}</code>
                        @endforeach
                    </div>
                </div>
                <div class="shrink-0 mt-1">
                    <button onclick="toggleCookie(this, 'analytics')"
                        class="cookie-toggle w-11 h-6 rounded-full flex items-center pr-1 transition-colors duration-200 bg-brand justify-end"
                        data-cookie="analytics" data-enabled="1" aria-label="@lang('front.cookies.toggle_analytics_label')">
                        <div class="w-4 h-4 bg-white rounded-full shadow transition-all"></div>
                    </button>
                </div>
            </div>
        </div>

        {{-- Marketing --}}
        <div class="border border-gray-100 rounded-2xl p-6">
            <div class="flex items-start justify-between gap-4">
                <div class="flex-1">
                    <h3 class="text-base font-semibold text-gray-900 mb-1">@lang('front.cookies.marketing_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.cookies.marketing_desc')</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach(['_fbp','_gcl_au','IDE','NID'] as $c)
                        <code class="text-[11px] bg-gray-50 border border-gray-100 px-2 py-0.5 rounded-full text-gray-500">{{ $c }}</code>
                        @endforeach
                    </div>
                </div>
                <div class="shrink-0 mt-1">
                    <button onclick="toggleCookie(this, 'marketing')"
                        class="cookie-toggle w-11 h-6 rounded-full flex items-center pr-1 transition-colors duration-200 bg-gray-200 justify-start"
                        data-cookie="marketing" data-enabled="0" aria-label="@lang('front.cookies.toggle_marketing_label')">
                        <div class="w-4 h-4 bg-white rounded-full shadow transition-all ml-1"></div>
                    </button>
                </div>
            </div>
        </div>

        {{-- Functional --}}
        <div class="border border-gray-100 rounded-2xl p-6">
            <div class="flex items-start justify-between gap-4">
                <div class="flex-1">
                    <h3 class="text-base font-semibold text-gray-900 mb-1">@lang('front.cookies.functional_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.cookies.functional_desc')</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach(['bojeri_lang','bojeri_tz','bojeri_theme'] as $c)
                        <code class="text-[11px] bg-gray-50 border border-gray-100 px-2 py-0.5 rounded-full text-gray-500">{{ $c }}</code>
                        @endforeach
                    </div>
                </div>
                <div class="shrink-0 mt-1">
                    <button onclick="toggleCookie(this, 'functional')"
                        class="cookie-toggle w-11 h-6 rounded-full flex items-center pr-1 transition-colors duration-200 bg-brand justify-end"
                        data-cookie="functional" data-enabled="1" aria-label="@lang('front.cookies.toggle_functional_label')">
                        <div class="w-4 h-4 bg-white rounded-full shadow transition-all"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Save button --}}
    <div class="flex items-center gap-4">
        <button onclick="savePreferences()"
            class="px-8 py-3 rounded-full bg-brand text-white text-sm font-semibold hover:shadow-lg hover:shadow-brand/20 transition-all">
            @lang('front.cookies.save_btn')
        </button>
        <span id="save-msg" class="text-sm text-brand font-medium opacity-0 transition-opacity duration-300">@lang('front.cookies.saved_msg')</span>
    </div>

    {{-- Info --}}
    <div class="mt-14 space-y-10 text-gray-600 font-light leading-relaxed">
        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.cookies.what_title')</h2>
            <p>@lang('front.cookies.what_body')</p>
        </section>
        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.cookies.control_title')</h2>
            <p class="mb-3">@lang('front.cookies.control_intro')</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.cookies.browser_chrome') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.cookies.browser_firefox') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.cookies.browser_safari') !!}</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>{!! __('front.cookies.browser_edge') !!}</span></li>
            </ul>
        </section>
        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">@lang('front.cookies.contact_title')</h2>
            <p>{!! __('front.cookies.contact_body') !!}</p>
        </section>
    </div>

    {{-- Related links --}}
    <div class="mt-16 pt-8 border-t border-gray-100 flex flex-wrap gap-4">
        <a href="{{ route('privacy') }}" class="text-sm text-brand hover:underline font-medium">@lang('front.cookies.link_privacy')</a>
        <a href="{{ route('terms') }}" class="text-sm text-brand hover:underline font-medium">@lang('front.cookies.link_terms')</a>
    </div>
</div>

@push('scripts')
<script>
(function(){
    // Load saved prefs
    var prefs = JSON.parse(localStorage.getItem('bojeri_cookies') || '{"analytics":1,"marketing":0,"functional":1}');
    document.querySelectorAll('.cookie-toggle').forEach(function(btn){
        var key = btn.dataset.cookie;
        if(prefs[key] !== undefined){
            applyToggle(btn, prefs[key]);
        }
    });

    function applyToggle(btn, enabled){
        btn.dataset.enabled = enabled ? '1' : '0';
        if(enabled){
            btn.classList.add('bg-brand','justify-end');
            btn.classList.remove('bg-gray-200','justify-start');
        } else {
            btn.classList.add('bg-gray-200','justify-start');
            btn.classList.remove('bg-brand','justify-end');
        }
    }

    window.toggleCookie = function(btn){
        var enabled = btn.dataset.enabled === '1' ? 0 : 1;
        applyToggle(btn, enabled);
    };

    window.savePreferences = function(){
        var saved = {};
        document.querySelectorAll('.cookie-toggle').forEach(function(btn){
            saved[btn.dataset.cookie] = btn.dataset.enabled === '1' ? 1 : 0;
        });
        localStorage.setItem('bojeri_cookies', JSON.stringify(saved));
        var msg = document.getElementById('save-msg');
        msg.style.opacity = '1';
        setTimeout(function(){ msg.style.opacity = '0'; }, 2500);
    };
})();
</script>
@endpush
@endsection
