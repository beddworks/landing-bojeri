@extends('layouts.app')

@section('title', __('front.meta.home_title'))
@section('meta_description', __('front.meta.home_description'))

@section('content')
<div class="pt-20">

    {{-- ============================================ --}}
    {{-- HERO SECTION --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 pt-16 pb-24 text-center" id="hero">
        <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 rounded-full border border-brand/20 bg-brand/5 text-brand text-xs font-semibold tracking-wide animate-fade-in-up">
            <span class="material-symbols-outlined text-sm">rocket_launch</span>
            @lang('front.hero.badge')
        </div>

        <h1 class="text-4xl sm:text-5xl md:text-7xl font-extralight mb-6 leading-[1.1] animate-fade-in-up delay-100">
            @lang('front.hero.title_line1')<br/>
            <span class="font-medium gradient-text">@lang('front.hero.title_line2')</span>
        </h1>

        <p class="max-w-2xl mx-auto text-gray-500 font-light text-lg md:text-xl mb-10 leading-relaxed animate-fade-in-up delay-200">
            @lang('front.hero.subtitle')
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16 animate-fade-in-up delay-300">
            <a href="https://app.bojeri.com/register" class="bg-brand text-white font-semibold px-8 py-3.5 rounded-full hover:shadow-xl hover:shadow-brand/20 transition-all text-sm" id="hero-cta-trial">
                @lang('front.hero.cta_trial')
            </a>
            <a href="https://app.bojeri.com/login?email=demo@bojeri.com&password=password12345" class="border border-gray-200 text-gray-700 font-medium px-8 py-3.5 rounded-full hover:border-brand hover:text-brand transition-all text-sm" id="hero-cta-features">
                @lang('front.hero.cta_demo')
            </a>
        </div>

        {{-- Dashboard Mockup Slideshow --}}
        <div class="relative max-w-5xl mx-auto animate-fade-in-up delay-400">
            <div class="absolute -inset-4 bg-gradient-to-r from-brand/10 via-cyan-400/10 to-brand/10 rounded-3xl blur-2xl"></div>
            <div class="relative rounded-2xl border border-gray-200 shadow-2xl shadow-gray-200/50 overflow-hidden bg-white">
                {{-- Images Slideshow --}}
                <div class="relative w-full bg-gray-50">
                    <!-- Invisible placeholder to set container height based on image aspect ratio -->
                    <img src="{{ asset('assets/account-dashboard.webp') }}" class="w-full h-auto invisible pointer-events-none" aria-hidden="true" alt="">

                    <img src="{{ asset('assets/account-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-100" alt="@lang('front.hero.img_account_dashboard')">
                    <img src="{{ asset('assets/crm-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-0" alt="@lang('front.hero.img_crm_dashboard')">
                    <img src="{{ asset('assets/hrm-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-0" alt="@lang('front.hero.img_hrm_dashboard')">
                    <img src="{{ asset('assets/pos-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-0" alt="@lang('front.hero.img_pos_dashboard')">
                    <img src="{{ asset('assets/project-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-0" alt="@lang('front.hero.img_project_dashboard')">
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const slides = document.querySelectorAll('.dashboard-slide');
                if (!slides.length) return;

                let currentSlide = 0;

                setInterval(() => {
                    // Fade out current slide
                    slides[currentSlide].classList.remove('opacity-100');
                    slides[currentSlide].classList.add('opacity-0');

                    // Increment and wrap around
                    currentSlide = (currentSlide + 1) % slides.length;

                    // Fade in next slide
                    slides[currentSlide].classList.remove('opacity-0');
                    slides[currentSlide].classList.add('opacity-100');
                }, 4000); // Change image every 4 seconds
            });
        </script>
    </section>

    <section class="mb-10 md:mb-22 overflow-hidden" id="industries">
        <div class="text-center mb-10 px-4">
            <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-2">@lang('front.industries.section_label')</p>
            <p class="text-gray-500 font-light max-w-xl mx-auto">@lang('front.industries.section_desc')</p>
        </div>

        @php
        $industries = [
            ['icon' => 'storefront',        'name' => __('front.industries.retail_name'),      'desc' => __('front.industries.retail_desc')],
            ['icon' => 'restaurant',         'name' => __('front.industries.food_name'),         'desc' => __('front.industries.food_desc')],
            ['icon' => 'construction',       'name' => __('front.industries.construction_name'), 'desc' => __('front.industries.construction_desc')],
            ['icon' => 'computer',           'name' => __('front.industries.it_name'),           'desc' => __('front.industries.it_desc')],
            ['icon' => 'local_shipping',     'name' => __('front.industries.logistics_name'),    'desc' => __('front.industries.logistics_desc')],
            ['icon' => 'groups',             'name' => __('front.industries.hr_name'),           'desc' => __('front.industries.hr_desc')],
            ['icon' => 'design_services',    'name' => __('front.industries.agencies_name'),     'desc' => __('front.industries.agencies_desc')],
            ['icon' => 'school',             'name' => __('front.industries.education_name'),    'desc' => __('front.industries.education_desc')],
            ['icon' => 'apartment',          'name' => __('front.industries.realestate_name'),   'desc' => __('front.industries.realestate_desc')],
            ['icon' => 'medical_services',   'name' => __('front.industries.healthcare_name'),   'desc' => __('front.industries.healthcare_desc')],
            ['icon' => 'gavel',              'name' => __('front.industries.legal_name'),        'desc' => __('front.industries.legal_desc')],
            ['icon' => 'hotel',              'name' => __('front.industries.hospitality_name'),  'desc' => __('front.industries.hospitality_desc')],
            ['icon' => 'inventory_2',        'name' => __('front.industries.wholesale_name'),    'desc' => __('front.industries.wholesale_desc')],
            ['icon' => 'volunteer_activism', 'name' => __('front.industries.ngo_name'),          'desc' => __('front.industries.ngo_desc')],
            ['icon' => 'precision_manufacturing', 'name' => __('front.industries.manufacturing_name'), 'desc' => __('front.industries.manufacturing_desc')],
            ['icon' => 'account_balance',    'name' => __('front.industries.financial_name'),    'desc' => __('front.industries.financial_desc')],
        ];
        @endphp

        {{-- Track 1 (left → right) --}}
        <div class="relative">
            <div class="flex gap-4 industry-track-1 w-max">
                @foreach(array_merge($industries, $industries) as $ind)
                <div class="flex-shrink-0 flex items-center gap-3 px-5 py-4 rounded-2xl border border-gray-100 bg-white w-64">
                    <div class="w-10 h-10 rounded-xl bg-brand/10 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-brand text-xl">{{ $ind['icon'] }}</span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-800 leading-tight">{{ $ind['name'] }}</p>
                        <p class="text-xs text-gray-400 font-light mt-0.5">{{ $ind['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Track 2 (right → left, offset) --}}
        <div class="relative mt-4">
            <div class="flex gap-4 industry-track-2 w-max">
                @foreach(array_merge(array_reverse($industries), array_reverse($industries)) as $ind)
                <div class="flex-shrink-0 flex items-center gap-3 px-5 py-4 rounded-2xl border border-gray-100 bg-white w-64">
                    <div class="w-10 h-10 rounded-xl bg-brand/10 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-brand text-xl">{{ $ind['icon'] }}</span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-800 leading-tight">{{ $ind['name'] }}</p>
                        <p class="text-xs text-gray-400 font-light mt-0.5">{{ $ind['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- TRUSTED BY / LOGOS --}}
    {{-- ============================================ --}}
    <section class="py-12 border-y border-gray-100 mb-24" id="trust-logos">
        <div class="container mx-auto px-6">
            <p class="text-center text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-8 font-semibold">@lang('front.trust.label')</p>
            <div class="flex flex-wrap justify-center items-center gap-10 md:gap-16 opacity-30 grayscale">
                <span class="text-xl font-bold tracking-tighter">VERTEX</span>
                <span class="text-xl font-light italic tracking-widest">AETHER</span>
                <span class="text-xl font-extrabold">SPHERE</span>
                <span class="text-xl font-extralight tracking-tight underline underline-offset-4">LINEARLY</span>
                <span class="text-xl font-semibold">NOVA</span>
                <span class="text-xl font-bold tracking-wide">HELIX</span>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- VALUE PROPOSITIONS (3 pillars) --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 mb-32" id="value-props">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">@lang('front.value_props.title') <span class="font-medium gradient-text">@lang('front.value_props.title_accent')</span></h2>
            <p class="text-gray-500 font-light max-w-xl mx-auto">@lang('front.value_props.subtitle')</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Pillar 1 --}}
            <div class="group relative bg-white border border-gray-100 rounded-2xl p-8 hover:shadow-xl hover:shadow-brand/5 hover:border-brand/20 transition-all duration-500" id="vp-invoicing">
                <div class="w-12 h-12 rounded-xl bg-brand/10 flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-all">
                    <span class="material-symbols-outlined text-brand group-hover:text-white text-2xl">receipt_long</span>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3">@lang('front.value_props.invoicing_title')</h3>
                <p class="text-gray-500 font-light text-sm leading-relaxed">@lang('front.value_props.invoicing_desc')</p>
            </div>

            {{-- Pillar 2 --}}
            <div class="group relative bg-white border border-gray-100 rounded-2xl p-8 hover:shadow-xl hover:shadow-brand/5 hover:border-brand/20 transition-all duration-500" id="vp-hr">
                <div class="w-12 h-12 rounded-xl bg-brand/10 flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-all">
                    <span class="material-symbols-outlined text-brand group-hover:text-white text-2xl">schedule</span>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3">@lang('front.value_props.hr_title')</h3>
                <p class="text-gray-500 font-light text-sm leading-relaxed">@lang('front.value_props.hr_desc')</p>
            </div>

            {{-- Pillar 3 --}}
            <div class="group relative bg-white border border-gray-100 rounded-2xl p-8 hover:shadow-xl hover:shadow-brand/5 hover:border-brand/20 transition-all duration-500" id="vp-unified">
                <div class="w-12 h-12 rounded-xl bg-brand/10 flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-all">
                    <span class="material-symbols-outlined text-brand group-hover:text-white text-2xl">hub</span>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3">@lang('front.value_props.unified_title')</h3>
                <p class="text-gray-500 font-light text-sm leading-relaxed">@lang('front.value_props.unified_desc')</p>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- FEATURE MODULES GRID --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 mb-32" id="features-grid">
        <div class="max-w-2xl mb-16">
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">@lang('front.modules_grid.title') <span class="font-medium text-gray-900">@lang('front.modules_grid.title_accent')</span></h2>
            <p class="text-gray-500 font-light">@lang('front.modules_grid.subtitle')</p>
        </div>

        <div class="grid md:grid-cols-3 gap-px bg-gray-100 overflow-hidden border border-gray-100 rounded-3xl shadow-sm">
            {{-- Accounting --}}
            <div class="bg-white p-8 group transition-all duration-500 hover:bg-brand/[0.02]" id="feature-accounting">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-brand/10 text-brand">
                        <span class="material-symbols-outlined text-xl">account_balance</span>
                    </div>
                    <div class="flex gap-1 items-end h-8">
                        <div class="w-1.5 h-3 bg-gray-100 rounded-full group-hover:bg-brand/20 transition-colors"></div>
                        <div class="w-1.5 h-5 bg-gray-100 rounded-full group-hover:bg-brand/40 transition-colors"></div>
                        <div class="w-1.5 h-8 bg-brand rounded-full"></div>
                    </div>
                </div>
                <h3 class="text-lg font-medium mb-2 text-gray-900">@lang('front.modules_grid.accounting_title')</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">@lang('front.modules_grid.accounting_desc')</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/docs">
                    @lang('front.modules_grid.learn_more') <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
                </a>
            </div>

            {{-- HRM --}}
            <div class="bg-white p-8 group transition-all duration-500 hover:bg-brand/[0.02]" id="feature-hrm">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-brand/10 text-brand">
                        <span class="material-symbols-outlined text-xl">badge</span>
                    </div>
                    <div class="flex -space-x-2">
                        <div class="w-7 h-7 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-[9px] text-gray-500 font-medium">JD</div>
                        <div class="w-7 h-7 rounded-full border-2 border-white bg-brand/10 flex items-center justify-center text-[9px] text-brand font-medium">AS</div>
                        <div class="w-7 h-7 rounded-full border-2 border-white bg-gray-100"></div>
                    </div>
                </div>
                <h3 class="text-lg font-medium mb-2 text-gray-900">@lang('front.modules_grid.hrm_title')</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">@lang('front.modules_grid.hrm_desc')</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/docs">
                    @lang('front.modules_grid.learn_more') <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
                </a>
            </div>

            {{-- CRM --}}
            <div class="bg-white p-8 group transition-all duration-500 hover:bg-brand/[0.02]" id="feature-crm">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-brand/10 text-brand">
                        <span class="material-symbols-outlined text-xl">favorite</span>
                    </div>
                    <div class="space-y-1">
                        <div class="px-2 py-0.5 rounded bg-brand/10 text-brand text-[8px] font-bold uppercase">Active Deal</div>
                        <div class="px-2 py-0.5 rounded bg-gray-100 text-gray-400 text-[8px] font-bold uppercase">New Lead</div>
                    </div>
                </div>
                <h3 class="text-lg font-medium mb-2 text-gray-900">@lang('front.modules_grid.crm_title')</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">@lang('front.modules_grid.crm_desc')</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/docs">
                    @lang('front.modules_grid.learn_more') <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
                </a>
            </div>

            {{-- POS --}}
            <div class="bg-white p-8 group transition-all duration-500 hover:bg-brand/[0.02]" id="feature-pos">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-brand/10 text-brand">
                        <span class="material-symbols-outlined text-xl">point_of_sale</span>
                    </div>
                    <div class="w-12 h-8 border border-gray-100 rounded bg-gray-50/30 p-1 flex flex-col gap-0.5">
                        <div class="h-1 w-full bg-gray-200 rounded-full"></div>
                        <div class="h-1 w-2/3 bg-gray-200 rounded-full"></div>
                        <div class="h-1 w-1/2 bg-brand rounded-full mt-auto"></div>
                    </div>
                </div>
                <h3 class="text-lg font-medium mb-2 text-gray-900">@lang('front.modules_grid.pos_title')</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">@lang('front.modules_grid.pos_desc')</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/docs">
                    @lang('front.modules_grid.learn_more') <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
                </a>
            </div>

            {{-- Projects --}}
            <div class="bg-white p-8 group transition-all duration-500 hover:bg-brand/[0.02]" id="feature-projects">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-brand/10 text-brand">
                        <span class="material-symbols-outlined text-xl">assignment</span>
                    </div>
                    <div class="w-14 h-4 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full bg-brand w-3/4 rounded-full"></div>
                    </div>
                </div>
                <h3 class="text-lg font-medium mb-2 text-gray-900">@lang('front.modules_grid.projects_title')</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">@lang('front.modules_grid.projects_desc')</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/docs">
                    @lang('front.modules_grid.learn_more') <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
                </a>
            </div>

            {{-- Purchase & Inventory --}}
            <div class="bg-white p-8 group transition-all duration-500 hover:bg-brand/[0.02]" id="feature-purchase">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-brand/10 text-brand">
                        <span class="material-symbols-outlined text-xl">inventory_2</span>
                    </div>
                    <div class="grid grid-cols-2 gap-1">
                        <div class="w-3 h-3 bg-gray-100 rounded-sm"></div>
                        <div class="w-3 h-3 bg-brand/40 rounded-sm"></div>
                        <div class="w-3 h-3 bg-brand rounded-sm"></div>
                        <div class="w-3 h-3 bg-gray-100 rounded-sm"></div>
                    </div>
                </div>
                <h3 class="text-lg font-medium mb-2 text-gray-900">@lang('front.modules_grid.purchase_title')</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">@lang('front.modules_grid.purchase_desc')</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/docs">
                    @lang('front.modules_grid.learn_more') <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
                </a>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="/docs" class="inline-flex items-center gap-2 text-sm font-semibold text-brand hover:underline" id="see-all-modules">
                @lang('front.modules_grid.see_all') <span class="material-symbols-outlined text-lg">arrow_forward</span>
            </a>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- COMPARISON: Bojeri vs Stitched Tools --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 mb-32" id="comparison">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">@lang('front.comparison.title') <span class="font-medium text-gray-900">@lang('front.comparison.title_accent')</span></h2>
            <p class="text-gray-500 font-light max-w-xl mx-auto">@lang('front.comparison.subtitle')</p>
        </div>

        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">
            {{-- Stitched Tools --}}
            <div class="p-10 border border-gray-200 rounded-3xl opacity-70 relative" id="compare-stitched">
                <p class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-6 font-semibold">@lang('front.comparison.stitched_label')</p>
                <div class="flex flex-wrap justify-center gap-3 mb-6">
                    <div class="px-3 py-2 rounded-xl bg-gray-50 text-xs text-gray-500 font-medium">QuickBooks</div>
                    <div class="px-3 py-2 rounded-xl bg-gray-50 text-xs text-gray-500 font-medium">Gusto</div>
                    <div class="px-3 py-2 rounded-xl bg-gray-50 text-xs text-gray-500 font-medium">HubSpot</div>
                    <div class="px-3 py-2 rounded-xl bg-gray-50 text-xs text-gray-500 font-medium">Square</div>
                    <div class="px-3 py-2 rounded-xl bg-gray-50 text-xs text-gray-500 font-medium">Asana</div>
                    <div class="px-3 py-2 rounded-xl bg-gray-50 text-xs text-gray-500 font-medium">Slack</div>
                    <div class="px-3 py-2 rounded-xl bg-gray-50 text-xs text-gray-500 font-medium">Zendesk</div>
                    <div class="px-3 py-2 rounded-xl bg-gray-50 text-xs text-gray-500 font-medium">Dropbox</div>
                </div>
                <div class="text-center space-y-2">
                    <p class="text-2xl font-light text-gray-900">@lang('front.comparison.stitched_price')<span class="text-sm text-gray-400">@lang('front.comparison.stitched_price_suffix')</span></p>
                    <p class="text-sm text-gray-400 font-light">@lang('front.comparison.stitched_users')</p>
                </div>
                <div class="mt-6 space-y-2 text-sm text-gray-400">
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-red-300 text-lg">close</span> @lang('front.comparison.stitched_con1')</div>
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-red-300 text-lg">close</span> @lang('front.comparison.stitched_con2')</div>
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-red-300 text-lg">close</span> @lang('front.comparison.stitched_con3')</div>
                </div>
            </div>

            {{-- Bojeri --}}
            <div class="p-10 border-2 border-brand/30 rounded-3xl bg-brand/[0.02] relative overflow-hidden" id="compare-bojeri">
                <div class="absolute -right-8 -top-8 w-32 h-32 bg-brand/5 rounded-full blur-3xl"></div>
                <p class="text-[10px] uppercase tracking-[0.2em] text-brand mb-6 font-semibold">@lang('front.comparison.bojeri_label')</p>
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-brand rounded-2xl flex items-center justify-center shadow-lg shadow-brand/20">
                        <span class="material-symbols-outlined text-white text-3xl">deployed_code</span>
                    </div>
                </div>
                <div class="text-center space-y-2">
                    <p class="text-2xl font-light text-gray-900">@lang('front.comparison.bojeri_price')<span class="text-sm text-gray-400">@lang('front.comparison.bojeri_price_suffix')</span></p>
                    <p class="text-sm text-gray-500 font-light">@lang('front.comparison.bojeri_modules')</p>
                </div>
                <div class="mt-6 space-y-2 text-sm text-gray-600">
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-brand text-lg">check_circle</span> @lang('front.comparison.bojeri_pro1')</div>
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-brand text-lg">check_circle</span> @lang('front.comparison.bojeri_pro2')</div>
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-brand text-lg">check_circle</span> @lang('front.comparison.bojeri_pro3')</div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================ --}}
    {{-- TESTIMONIALS --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-4 md:px-6 mb-20 md:mb-32" id="testimonials">
        <div class="text-center mb-12">
            <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-2">@lang('front.testimonials.label')</p>
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">@lang('front.testimonials.title') <span class="font-medium gradient-text">@lang('front.testimonials.title_accent')</span></h2>
        </div>

        @php
        $testimonials = [
            ['quote'=>__('front.testimonials.quote_sarah'),'name'=>'Sarah D.','role'=>'CFO, GrowthScale Inc','init'=>'SD','color'=>'bg-brand/10 text-brand','module'=>'Accounting'],
            ['quote'=>__('front.testimonials.quote_michael'),'name'=>'Michael R.','role'=>'HR Director, LogiTrack','init'=>'MR','color'=>'bg-cyan-50 text-cyan-600','module'=>'HRM'],
            ['quote'=>__('front.testimonials.quote_aisha'),'name'=>'Aisha L.','role'=>'CEO, NexWave Solutions','init'=>'AL','color'=>'bg-amber-50 text-amber-600','module'=>'Dashboard'],
            ['quote'=>__('front.testimonials.quote_omar'),'name'=>'Omar T.','role'=>'Sales Manager, Elevate Group','init'=>'OT','color'=>'bg-violet-50 text-violet-600','module'=>'CRM'],
            ['quote'=>__('front.testimonials.quote_lena'),'name'=>'Lena K.','role'=>'Operations Lead, RetailHub','init'=>'LK','color'=>'bg-rose-50 text-rose-600','module'=>'POS'],
            ['quote'=>__('front.testimonials.quote_james'),'name'=>'James W.','role'=>'CTO, BuildBridge Agency','init'=>'JW','color'=>'bg-indigo-50 text-indigo-600','module'=>'Projects'],
            ['quote'=>__('front.testimonials.quote_fatima'),'name'=>'Fatima A.','role'=>'HR Manager, MedCore Clinics','init'=>'FA','color'=>'bg-teal-50 text-teal-600','module'=>'HRM'],
            ['quote'=>__('front.testimonials.quote_carlos'),'name'=>'Carlos M.','role'=>'Supply Chain Director, TradeFast','init'=>'CM','color'=>'bg-orange-50 text-orange-600','module'=>'Purchase'],
            ['quote'=>__('front.testimonials.quote_priya'),'name'=>'Priya N.','role'=>'Customer Success, SaaSify','init'=>'PN','color'=>'bg-pink-50 text-pink-600','module'=>'Helpdesk'],
        ];
        $slides = array_chunk($testimonials, 3);
        @endphp

        <div class="relative max-w-5xl mx-auto" id="tcarousel">

            {{-- Slides --}}
            @foreach($slides as $si => $group)
            <div class="tslide grid grid-cols-1 md:grid-cols-3 gap-5"
                 data-slide="{{ $si }}"
                 style="opacity:{{ $si===0?'1':'0' }};{{ $si!==0?'position:absolute;top:0;left:0;width:100%;pointer-events:none;':'position:relative;' }}transition:opacity 0.6s ease;">
                @foreach($group as $t)
                <div class="p-6 bg-gray-50/50 border border-gray-100 rounded-2xl flex flex-col">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex gap-0.5">
                            @for($s=0;$s<5;$s++)<span class="material-symbols-outlined text-amber-400 text-base" style="font-variation-settings:'FILL' 1">star</span>@endfor
                        </div>
                        <span class="text-[10px] font-semibold uppercase tracking-wider px-2.5 py-0.5 rounded-full bg-brand/10 text-brand">{{ $t['module'] }}</span>
                    </div>
                    <blockquote class="text-gray-600 font-light leading-relaxed text-sm flex-1 mb-5">"{{ $t['quote'] }}"</blockquote>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full {{ $t['color'] }} flex items-center justify-center font-semibold text-xs shrink-0">{{ $t['init'] }}</div>
                        <div>
                            <p class="text-sm font-medium text-gray-900 leading-none mb-0.5">{{ $t['name'] }}</p>
                            <p class="text-xs text-gray-400 font-light">{{ $t['role'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach


        </div>

        {{-- Dots --}}
        <div class="flex justify-center gap-2 mt-8" id="tdots">
            @foreach($slides as $i => $s)
            <button onclick="tGoTo({{ $i }})"
                class="tdot h-2 rounded-full transition-all duration-300 {{ $i===0 ? 'w-6 bg-brand' : 'w-2 bg-gray-200' }}"
                data-dot="{{ $i }}"></button>
            @endforeach
        </div>
    </section>

    @push('scripts')
    <script>
    (function(){
        var cur    = 0;
        var slides = document.querySelectorAll('#tcarousel .tslide');
        var dots   = document.querySelectorAll('#tdots .tdot');
        var total  = slides.length;
        var timer;

        function show(idx){
            // fade out current
            slides[cur].style.opacity = '0';
            slides[cur].style.pointerEvents = 'none';
            slides[cur].style.position = 'absolute';

            cur = (idx + total) % total;

            // fade in new
            slides[cur].style.position = 'relative';
            slides[cur].style.pointerEvents = '';
            // tiny delay so transition fires
            requestAnimationFrame(function(){
                requestAnimationFrame(function(){
                    slides[cur].style.opacity = '1';
                });
            });

            dots.forEach(function(d, i){
                d.classList.toggle('w-6',        i === cur);
                d.classList.toggle('bg-brand',   i === cur);
                d.classList.toggle('w-2',        i !== cur);
                d.classList.toggle('bg-gray-200',i !== cur);
            });
        }

        function next(){ show((cur + 1) % total); }
        function start(){ timer = setInterval(next, 5000); }
        function reset(){ clearInterval(timer); start(); }

        window.tGoTo = function(i){ reset(); show(i); };
        start();
    })();
    </script>
    @endpush

    {{-- ============================================ --}}
    {{-- BELOW THE FOLD — Platform Highlights --}}
    {{-- ============================================ --}}
    <section class="bg-gray-50/50 border-y border-gray-100 py-24 mb-32" id="platform-highlights">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extralight mb-4">@lang('front.highlights.title') <span class="font-medium text-gray-900">@lang('front.highlights.title_accent')</span></h2>
                <p class="text-gray-500 font-light max-w-xl mx-auto">@lang('front.highlights.subtitle')</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-modular">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">widgets</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">@lang('front.highlights.modular_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.highlights.modular_desc')</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-multitenant">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">domain</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">@lang('front.highlights.multitenant_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.highlights.multitenant_desc')</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-realtime">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">bolt</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">@lang('front.highlights.realtime_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.highlights.realtime_desc')</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-i18n">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">translate</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">@lang('front.highlights.i18n_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.highlights.i18n_desc')</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-security">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">shield</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">@lang('front.highlights.security_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.highlights.security_desc')</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-cloud">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">cloud</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">@lang('front.highlights.cloud_title')</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">@lang('front.highlights.cloud_desc')</p>
                </div>
            </div>
        </div>
    </section>


    @push('styles')
    <style>
        @keyframes scroll-left {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        @keyframes scroll-right {
            0%   { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }
        .industry-track-1 {
            animation: scroll-left 120s linear infinite;
        }
        .industry-track-2 {
            animation: scroll-right 120s linear infinite;
        }
        .industry-track-1:hover,
        .industry-track-2:hover {
            animation-play-state: paused;
        }
    </style>
    @endpush

    {{-- ============================================ --}}
    {{-- PRICING --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-4 md:px-6 mb-20 md:mb-32" id="pricing">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">@lang('front.pricing.title') <span class="font-medium gradient-text">@lang('front.pricing.title_accent')</span></h2>
            <p class="text-gray-500 font-light mb-8">@lang('front.pricing.subtitle')</p>

            {{-- Billing Toggle --}}
            <div class="inline-flex items-center bg-gray-100 rounded-full p-1 gap-1">
                <button onclick="setBilling('monthly')" id="btn-monthly"
                    class="px-5 py-2 rounded-full text-sm font-medium transition-all text-gray-500 hover:text-gray-700">
                    @lang('front.pricing.toggle_monthly')
                </button>
                <button onclick="setBilling('yearly')" id="btn-yearly"
                    class="px-5 py-2 rounded-full text-sm font-medium transition-all bg-white text-gray-900 shadow-sm">
                    @lang('front.pricing.toggle_yearly') <span class="text-brand text-xs font-semibold ml-1">@lang('front.pricing.yearly_bonus')</span>
                </button>
            </div>
        </div>

        @php
        $modules = ['Accounting','CRM','HRM','POS','Project', 'Proposal'];
        $isIDR   = app()->getLocale() === 'id';
        $rate    = 16500;
        $yVal    = $isIDR ? 'Rp ' . number_format(2.5 * $rate, 0, ',', '.') : '2.5';
        $mVal    = $isIDR ? 'Rp ' . number_format(3   * $rate, 0, ',', '.') : '3';
        $yPer    = $isIDR ? '/thn' : '/yr';
        $mPer    = $isIDR ? '/bln' : '/mo';
        @endphp

        <div class="max-w-4xl mx-auto">

            {{-- ── Plan Cards ── --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 items-stretch">

                {{-- Free Plan --}}
                <div class="rounded-2xl border border-gray-100 p-6 hover:shadow-md transition-shadow flex flex-col">
                    <h4 class="text-base font-semibold text-gray-900 mb-1 text-center">@lang('front.pricing.free_name')</h4>
                    <p class="text-xs text-gray-400 font-light mb-4 text-center leading-relaxed">@lang('front.pricing.free_desc')</p>
                    <div class="text-center mb-4">
                        <span class="text-4xl font-bold text-brand">@lang('front.pricing.free_price')</span>
                        <p class="text-xs text-brand font-medium mt-1">&nbsp;</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600 font-light mb-4">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.free_users')</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.free_storage')</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.free_trial')</li>
                    </ul>
                    <div class="border-t border-gray-100 pt-4 flex-1">
                        <p class="text-[10px] text-gray-400 font-semibold uppercase tracking-wider mb-2 text-center">@lang('front.pricing.modules_label')</p>
                        <div class="flex flex-wrap gap-1.5 justify-center">
                            @foreach($modules as $mod)
                            <span class="px-2.5 py-1 rounded-full bg-brand/8 text-brand text-[11px] font-medium">{{ $mod }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Starter Plan (Most Popular) --}}
                <div class="rounded-2xl border-2 border-brand p-6 shadow-xl shadow-brand/10 relative flex flex-col mt-4 sm:mt-0" id="pricing">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 whitespace-nowrap bg-brand text-white px-4 py-1 rounded-full text-[11px] font-semibold flex items-center gap-1.5">
                        <span>★</span> @lang('front.pricing.starter_badge')
                    </div>
                    <h4 class="text-base font-semibold text-gray-900 mb-1 text-center mt-1">@lang('front.pricing.starter_name')</h4>
                    <p class="text-xs text-gray-400 font-light mb-4 text-center leading-relaxed">@lang('front.pricing.starter_desc')</p>
                    <div class="text-center mb-1">
                        <span class="text-4xl font-bold text-gray-900 plan-price"
                              data-yearly="{{ $yVal }}"
                              data-monthly="{{ $mVal }}">{{ $yVal }}</span>
                        @if(!$isIDR)<span class="text-2xl font-bold text-gray-900">$</span>@endif
                        <span class="text-sm text-gray-400 font-light plan-period"
                              data-yearly="{{ $yPer }}"
                              data-monthly="{{ $mPer }}">{{ $yPer }}</span>
                    </div>
                    <p class="text-[11px] text-brand font-medium mb-4 text-center yearly-badge">@lang('front.pricing.starter_billed_yearly')</p>
                    <p class="text-[11px] text-gray-400 mb-4 text-center monthly-badge hidden">@lang('front.pricing.starter_billed_monthly')</p>
                    <ul class="space-y-2 text-sm text-gray-600 font-light mb-4">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.starter_users')</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.starter_storage')</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.starter_trial')</li>
                    </ul>
                    <div class="border-t border-brand/20 pt-4 flex-1">
                        <p class="text-[10px] text-brand font-semibold uppercase tracking-wider mb-2 text-center">@lang('front.pricing.modules_label')</p>
                        <div class="flex flex-wrap gap-1.5 justify-center">
                            @foreach($modules as $mod)
                            <span class="px-2.5 py-1 rounded-full bg-brand/10 text-brand text-[11px] font-medium">{{ $mod }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Enterprise Plan --}}
                <div class="rounded-2xl border border-gray-100 p-6 hover:shadow-md transition-shadow flex flex-col">
                    <h4 class="text-base font-semibold text-gray-900 mb-1 text-center">@lang('front.pricing.enterprise_name')</h4>
                    <p class="text-xs text-gray-400 font-light mb-4 text-center leading-relaxed">@lang('front.pricing.enterprise_desc')</p>
                    <div class="text-center mb-4">
                        <span class="text-4xl font-bold text-gray-900">@lang('front.pricing.enterprise_price')</span>
                    </div>
                    <p class="text-[11px] text-gray-400 mb-4 text-center">&nbsp;</p>
                    <ul class="space-y-2 text-sm text-gray-600 font-light mb-4">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.enterprise_users')</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.enterprise_storage')</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>@lang('front.pricing.enterprise_support')</li>
                    </ul>
                    <div class="border-t border-gray-100 pt-4 flex-1">
                        <p class="text-[10px] text-gray-400 font-semibold uppercase tracking-wider mb-2 text-center">@lang('front.pricing.modules_label')</p>
                        <div class="flex flex-wrap gap-1.5 justify-center">
                            @foreach($modules as $mod)
                            <span class="px-2.5 py-1 rounded-full bg-brand/8 text-brand text-[11px] font-medium">{{ $mod }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- ── CTA Row ── --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <a href="/register" class="w-full py-3 rounded-full border border-gray-200 text-sm font-medium text-center hover:bg-gray-50 hover:border-brand transition-all block">@lang('front.pricing.cta_free')</a>
                </div>
                <div>
                    <a href="/register" class="w-full py-3 rounded-full bg-brand text-white text-sm font-semibold text-center hover:shadow-lg hover:shadow-brand/20 transition-all block">@lang('front.pricing.cta_starter')</a>
                </div>
                <div>
                    <a href="https://tawk.to/chat/69b0f49b791b0a1c352a38f2/1jjdjmvvg" class="w-full py-3 rounded-full border border-gray-200 text-sm font-medium text-center hover:bg-gray-50 hover:border-brand transition-all block">@lang('front.pricing.cta_enterprise')</a>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        (function () {
            var billing = 'yearly';

            function setBilling(mode) {
                billing = mode;

                // Toggle button styles
                var btnMonthly = document.getElementById('btn-monthly');
                var btnYearly  = document.getElementById('btn-yearly');
                if (mode === 'yearly') {
                    btnYearly.classList.add('bg-white', 'text-gray-900', 'shadow-sm');
                    btnYearly.classList.remove('text-gray-500');
                    btnMonthly.classList.remove('bg-white', 'text-gray-900', 'shadow-sm');
                    btnMonthly.classList.add('text-gray-500');
                } else {
                    btnMonthly.classList.add('bg-white', 'text-gray-900', 'shadow-sm');
                    btnMonthly.classList.remove('text-gray-500');
                    btnYearly.classList.remove('bg-white', 'text-gray-900', 'shadow-sm');
                    btnYearly.classList.add('text-gray-500');
                }

                // Update prices
                document.querySelectorAll('.plan-price').forEach(function (el) {
                    el.textContent = mode === 'yearly' ? el.dataset.yearly : el.dataset.monthly;
                });
                document.querySelectorAll('.plan-period').forEach(function (el) {
                    el.textContent = mode === 'yearly' ? el.dataset.yearly : el.dataset.monthly;
                });

                // Show/hide yearly / monthly sub-labels
                document.querySelectorAll('.yearly-badge').forEach(function (el) {
                    el.classList.toggle('hidden', mode !== 'yearly');
                });
                document.querySelectorAll('.monthly-badge').forEach(function (el) {
                    el.classList.toggle('hidden', mode !== 'monthly');
                });
            }

            // Expose globally for onclick
            window.setBilling = setBilling;

            // Default: yearly
            setBilling('yearly');
        })();
    </script>

    @endpush

    {{-- ============================================ --}}
    {{-- FEATURE STRIP --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 mb-16" id="feature-strip">
        <div class="flex flex-wrap justify-center gap-4 md:gap-6">
            @php
            $strips = [
                ['icon' => 'receipt',        'label' => __('front.strip.sales_invoicing')],
                ['icon' => 'shopping_cart',  'label' => __('front.strip.purchase_inventory')],
                ['icon' => 'account_balance','label' => __('front.strip.accounting')],
                ['icon' => 'badge',          'label' => __('front.strip.hrm_payroll')],
                ['icon' => 'assignment',     'label' => __('front.strip.projects')],
                ['icon' => 'favorite',       'label' => __('front.strip.crm')],
                ['icon' => 'point_of_sale',  'label' => __('front.strip.pos')],
                ['icon' => 'chat',           'label' => __('front.strip.messenger')],
            ];
            @endphp
            @foreach($strips as $strip)
            <div class="flex items-center gap-2 px-4 py-2 rounded-full bg-gray-50 border border-gray-100 text-sm font-light text-gray-600">
                <span class="material-symbols-outlined text-brand text-lg">{{ $strip['icon'] }}</span>
                {{ $strip['label'] }}
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
