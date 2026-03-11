@extends('layouts.app')

@section('title', 'Bojeri — Run Your Entire Business From One Platform')
@section('meta_description', 'Bojeri brings invoicing, purchasing, accounting, HR, projects, CRM, and POS into a single workspace. One platform, every department, zero data silos.')

@section('content')
<div class="pt-20">

    {{-- ============================================ --}}
    {{-- HERO SECTION --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 pt-16 pb-24 text-center" id="hero">
        <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 rounded-full border border-brand/20 bg-brand/5 text-brand text-xs font-semibold tracking-wide animate-fade-in-up">
            <span class="material-symbols-outlined text-sm">rocket_launch</span>
            ALL-IN-ONE ERP PLATFORM
        </div>

        <h1 class="text-4xl sm:text-5xl md:text-7xl font-extralight mb-6 leading-[1.1] animate-fade-in-up delay-100">
            Run Your Entire Business<br/>
            <span class="font-medium gradient-text">From One Platform.</span>
        </h1>

        <p class="max-w-2xl mx-auto text-gray-500 font-light text-lg md:text-xl mb-10 leading-relaxed animate-fade-in-up delay-200">
            Bojeri brings your invoicing, purchasing, accounting, HR, projects, CRM, and point-of-sale into a single workspace — so your team works faster, your data stays connected, and your business decisions are based on the full picture.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16 animate-fade-in-up delay-300">
            <a href="/register" class="bg-brand text-white font-semibold px-8 py-3.5 rounded-full hover:shadow-xl hover:shadow-brand/20 transition-all text-sm" id="hero-cta-trial">
                Start Free Trial
            </a>
            <a href="/features" class="border border-gray-200 text-gray-700 font-medium px-8 py-3.5 rounded-full hover:border-brand hover:text-brand transition-all text-sm" id="hero-cta-features">
                See All Features →
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
                    
                    <img src="{{ asset('assets/account-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-100" alt="Account Dashboard">
                    <img src="{{ asset('assets/crm-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-0" alt="CRM Dashboard">
                    <img src="{{ asset('assets/hrm-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-0" alt="HRM Dashboard">
                    <img src="{{ asset('assets/pos-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-0" alt="POS Dashboard">
                    <img src="{{ asset('assets/project-dashboard.webp') }}" class="w-full h-auto absolute top-0 left-0 transition-opacity duration-1000 ease-in-out dashboard-slide opacity-0" alt="Project Dashboard">
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
            <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-2">Built for Every Sector</p>
            <p class="text-gray-500 font-light max-w-xl mx-auto">One platform, every business type. Bojeri adapts to how your industry works.</p>
        </div>

        @php
        $industries = [
            ['icon' => 'storefront',        'name' => 'Retail & E-commerce',      'desc' => 'POS, inventory, invoicing'],
            ['icon' => 'restaurant',         'name' => 'Food & Beverage',           'desc' => 'POS, purchase, stock sync'],
            ['icon' => 'construction',       'name' => 'Construction',              'desc' => 'Projects, purchase, HRM'],
            ['icon' => 'computer',           'name' => 'IT & Software',             'desc' => 'Projects, helpdesk, CRM'],
            ['icon' => 'local_shipping',     'name' => 'Logistics & Distribution',  'desc' => 'Warehouses, transfers, accounting'],
            ['icon' => 'groups',             'name' => 'HR & Staffing',             'desc' => 'Payroll, attendance, leave'],
            ['icon' => 'design_services',    'name' => 'Agencies & Consulting',     'desc' => 'Proposals, CRM, projects'],
            ['icon' => 'school',             'name' => 'Education',                 'desc' => 'HRM, accounting, events'],
            ['icon' => 'apartment',          'name' => 'Real Estate',               'desc' => 'CRM, proposals, accounting'],
            ['icon' => 'medical_services',   'name' => 'Healthcare',                'desc' => 'HRM, scheduling, billing'],
            ['icon' => 'gavel',              'name' => 'Legal Firms',               'desc' => 'Projects, CRM, invoicing'],
            ['icon' => 'hotel',              'name' => 'Hospitality',               'desc' => 'POS, HRM, accounting'],
            ['icon' => 'inventory_2',        'name' => 'Wholesale & Trading',       'desc' => 'Purchase, sales, warehouse'],
            ['icon' => 'volunteer_activism', 'name' => 'NGOs & Nonprofits',         'desc' => 'Accounting, HRM, projects'],
            ['icon' => 'precision_manufacturing', 'name' => 'Manufacturing',        'desc' => 'Purchase, warehouse, payroll'],
            ['icon' => 'account_balance',    'name' => 'Financial Services',        'desc' => 'Accounting, CRM, subscriptions'],
        ];
        @endphp

        {{-- Track 1 (left → right) --}}
        <div class="relative">
            <div class="flex gap-4 industry-track-1 w-max">
                @foreach(array_merge($industries, $industries) as $ind)
                <div class="flex-shrink-0 flex items-center gap-3 px-5 py-4 rounded-2xl border border-gray-100 bg-white shadow-sm w-64">
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
                <div class="flex-shrink-0 flex items-center gap-3 px-5 py-4 rounded-2xl border border-gray-100 bg-white shadow-sm w-64">
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
            <p class="text-center text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-8 font-semibold">Trusted by growing businesses worldwide</p>
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
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">One ecosystem. <span class="font-medium gradient-text">Zero friction.</span></h2>
            <p class="text-gray-500 font-light max-w-xl mx-auto">Every module talks to every other module. Your data flows, your team moves fast, and nothing falls through the cracks.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Pillar 1 --}}
            <div class="group relative bg-white border border-gray-100 rounded-2xl p-8 hover:shadow-xl hover:shadow-brand/5 hover:border-brand/20 transition-all duration-500" id="vp-invoicing">
                <div class="w-12 h-12 rounded-xl bg-brand/10 flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-all">
                    <span class="material-symbols-outlined text-brand group-hover:text-white text-2xl">receipt_long</span>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3">Invoicing to Accounting, Connected</h3>
                <p class="text-gray-500 font-light text-sm leading-relaxed">Create proposals, convert them to invoices, post to your ledger, and track payments — all in one flow. Your Chart of Accounts updates automatically.</p>
            </div>

            {{-- Pillar 2 --}}
            <div class="group relative bg-white border border-gray-100 rounded-2xl p-8 hover:shadow-xl hover:shadow-brand/5 hover:border-brand/20 transition-all duration-500" id="vp-hr">
                <div class="w-12 h-12 rounded-xl bg-brand/10 flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-all">
                    <span class="material-symbols-outlined text-brand group-hover:text-white text-2xl">schedule</span>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3">HR That Actually Tracks Hours</h3>
                <p class="text-gray-500 font-light text-sm leading-relaxed">Clock in/out with IP restriction, automatic overtime calculations, shift-aware attendance, and payroll generation. Your team's time becomes payslips without manual math.</p>
            </div>

            {{-- Pillar 3 --}}
            <div class="group relative bg-white border border-gray-100 rounded-2xl p-8 hover:shadow-xl hover:shadow-brand/5 hover:border-brand/20 transition-all duration-500" id="vp-unified">
                <div class="w-12 h-12 rounded-xl bg-brand/10 flex items-center justify-center mb-6 group-hover:bg-brand group-hover:text-white transition-all">
                    <span class="material-symbols-outlined text-brand group-hover:text-white text-2xl">hub</span>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3">CRM + Projects + POS, Unified</h3>
                <p class="text-gray-500 font-light text-sm leading-relaxed">Track leads through pipeline stages, manage project tasks on Kanban boards, and run in-store sales from your browser — with every data point feeding into the same dashboard.</p>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- FEATURE MODULES GRID --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 mb-32" id="features-grid">
        <div class="max-w-2xl mb-16">
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">16 modules. <span class="font-medium text-gray-900">One platform.</span></h2>
            <p class="text-gray-500 font-light">Every workflow your business needs — from first-contact CRM to month-end close — built in, connected, and ready.</p>
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
                <h3 class="text-lg font-medium mb-2 text-gray-900">Accounting</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">Full double-entry bookkeeping with Chart of Accounts, revenue, expenses, bank transactions, credit &amp; debit notes, and financial reports.</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/features">
                    Learn More <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
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
                <h3 class="text-lg font-medium mb-2 text-gray-900">HRM &amp; Payroll</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">Employees, shifts, clock in/out with IP restriction, overtime calculation, leave management, payroll, payslips, awards, and more.</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/features">
                    Learn More <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
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
                <h3 class="text-lg font-medium mb-2 text-gray-900">CRM</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">Lead and deal pipelines with custom stages, multi-user assignments, source tracking, and conversion analytics — all synced with invoicing.</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/features">
                    Learn More <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
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
                <h3 class="text-lg font-medium mb-2 text-gray-900">Point of Sale</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">Browser-based POS with barcode printing, order tracking, and real-time inventory sync. No extra hardware needed.</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/features">
                    Learn More <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
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
                <h3 class="text-lg font-medium mb-2 text-gray-900">Projects</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">Tasks, subtasks, milestones, Kanban boards, calendar views, bug tracking, file uploads, activity logs, and project reports.</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/features">
                    Learn More <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
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
                <h3 class="text-lg font-medium mb-2 text-gray-900">Purchase &amp; Inventory</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-light mb-6">Vendor invoices, purchase returns, warehouse management, inter-warehouse stock transfers, and per-warehouse stock levels.</p>
                <a class="text-xs tracking-widest uppercase font-semibold text-gray-400 group-hover:text-brand transition-colors inline-flex items-center gap-2" href="/features">
                    Learn More <span class="w-4 h-px bg-gray-300 group-hover:bg-brand transition-colors"></span>
                </a>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="/features" class="inline-flex items-center gap-2 text-sm font-semibold text-brand hover:underline" id="see-all-modules">
                See all 16 modules <span class="material-symbols-outlined text-lg">arrow_forward</span>
            </a>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- COMPARISON: Bojeri vs Stitched Tools --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 mb-32" id="comparison">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">One platform vs. <span class="font-medium text-gray-900">stitched tools.</span></h2>
            <p class="text-gray-500 font-light max-w-xl mx-auto">The real cost isn't subscription fees — it's the hours your team spends switching apps, re-entering data, and managing integrations that break.</p>
        </div>

        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">
            {{-- Stitched Tools --}}
            <div class="p-10 border border-gray-200 rounded-3xl opacity-70 relative" id="compare-stitched">
                <p class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-6 font-semibold">The Stitched Stack</p>
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
                    <p class="text-2xl font-light text-gray-900">$300–$1,000+<span class="text-sm text-gray-400">/mo</span></p>
                    <p class="text-sm text-gray-400 font-light">for 10 users • 5–8 integrations to maintain</p>
                </div>
                <div class="mt-6 space-y-2 text-sm text-gray-400">
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-red-300 text-lg">close</span> Data fragmented across tools</div>
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-red-300 text-lg">close</span> Different permission models per tool</div>
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-red-300 text-lg">close</span> 10–15 hrs/week context switching</div>
                </div>
            </div>

            {{-- Bojeri --}}
            <div class="p-10 border-2 border-brand/30 rounded-3xl bg-brand/[0.02] relative overflow-hidden" id="compare-bojeri">
                <div class="absolute -right-8 -top-8 w-32 h-32 bg-brand/5 rounded-full blur-3xl"></div>
                <p class="text-[10px] uppercase tracking-[0.2em] text-brand mb-6 font-semibold">The Bojeri Platform</p>
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-brand rounded-2xl flex items-center justify-center shadow-lg shadow-brand/20">
                        <span class="material-symbols-outlined text-white text-3xl">deployed_code</span>
                    </div>
                </div>
                <div class="text-center space-y-2">
                    <p class="text-2xl font-light text-gray-900">One plan<span class="text-sm text-gray-400">, one price</span></p>
                    <p class="text-sm text-gray-500 font-light">All 16 modules • Zero integrations needed</p>
                </div>
                <div class="mt-6 space-y-2 text-sm text-gray-600">
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-brand text-lg">check_circle</span> Single source of truth</div>
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-brand text-lg">check_circle</span> One permission system</div>
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-brand text-lg">check_circle</span> All data in your database</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- STATISTICS --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 mb-32" id="stats">
        <div class="grid md:grid-cols-4 gap-8 py-16 border-y border-gray-100">
            <div class="text-center">
                <div class="text-5xl font-extralight text-gray-900 mb-1">16</div>
                <div class="text-xs uppercase tracking-[0.2em] text-gray-400 font-semibold">Modules Built-In</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-extralight text-gray-900 mb-1">5</div>
                <div class="text-xs uppercase tracking-[0.2em] text-gray-400 font-semibold">Dashboard Views</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-extralight text-gray-900 mb-1">0</div>
                <div class="text-xs uppercase tracking-[0.2em] text-gray-400 font-semibold">Integrations Needed</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-extralight text-gray-900 mb-1">∞</div>
                <div class="text-xs uppercase tracking-[0.2em] text-gray-400 font-semibold">Languages Supported</div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- TESTIMONIALS --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-4 md:px-6 mb-20 md:mb-32" id="testimonials">
        <div class="text-center mb-12">
            <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-2">Customer Stories</p>
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">What teams are <span class="font-medium gradient-text">saying.</span></h2>
        </div>

        @php
        $testimonials = [
            ['quote'=>"Since switching to Bojeri, we've cut our month-end close from 5 days to 1. Everything just… connects.",'name'=>'Sarah D.','role'=>'CFO, GrowthScale Inc','init'=>'SD','color'=>'bg-brand/10 text-brand','module'=>'Accounting'],
            ['quote'=>"Our HR team used to spend 8 hours a week reconciling timesheets. Now it's fully automatic.",'name'=>'Michael R.','role'=>'HR Director, LogiTrack','init'=>'MR','color'=>'bg-cyan-50 text-cyan-600','module'=>'HRM'],
            ['quote'=>"We ran four separate tools before Bojeri. Now it's one login and zero data gaps.",'name'=>'Aisha L.','role'=>'CEO, NexWave Solutions','init'=>'AL','color'=>'bg-amber-50 text-amber-600','module'=>'Dashboard'],
            ['quote'=>"Our sales team closes deals faster because leads, proposals, and invoices all live in the same place.",'name'=>'Omar T.','role'=>'Sales Manager, Elevate Group','init'=>'OT','color'=>'bg-violet-50 text-violet-600','module'=>'CRM'],
            ['quote'=>"The POS syncs directly with accounting. No more end-of-day reconciliation nightmares.",'name'=>'Lena K.','role'=>'Operations Lead, RetailHub','init'=>'LK','color'=>'bg-rose-50 text-rose-600','module'=>'POS'],
            ['quote'=>"Project tracking used to be spreadsheets and Slack threads. Bojeri's Kanban and milestones changed everything.",'name'=>'James W.','role'=>'CTO, BuildBridge Agency','init'=>'JW','color'=>'bg-indigo-50 text-indigo-600','module'=>'Projects'],
            ['quote'=>"Payroll used to take two full days. With Bojeri it's done in an hour — shifts, overtime, everything included.",'name'=>'Fatima A.','role'=>'HR Manager, MedCore Clinics','init'=>'FA','color'=>'bg-teal-50 text-teal-600','module'=>'HRM'],
            ['quote'=>"Having our warehouse, purchasing, and vendor payments in one place cut our procurement cycle by 40%.",'name'=>'Carlos M.','role'=>'Supply Chain Director, TradeFast','init'=>'CM','color'=>'bg-orange-50 text-orange-600','module'=>'Purchase'],
            ['quote'=>"Support tickets, internal notes, file attachments — our helpdesk finally feels professional and nothing slips through.",'name'=>'Priya N.','role'=>'Customer Success, SaaSify','init'=>'PN','color'=>'bg-pink-50 text-pink-600','module'=>'Helpdesk'],
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
                <h2 class="text-3xl md:text-4xl font-extralight mb-4">Enterprise-ready. <span class="font-medium text-gray-900">Out of the box.</span></h2>
                <p class="text-gray-500 font-light max-w-xl mx-auto">Built with real-time capabilities, multi-language support, and flexible subscription plans.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-modular">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">widgets</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Modular by Design</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">Activate only the modules you need. Start with invoicing and add HRM, CRM, or POS as you grow — your plan controls which tools are available.</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-multitenant">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">domain</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Multi-Tenant SaaS Ready</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">Each company gets their own workspace with separate branding, currency, language, and data — all on the same installation.</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-realtime">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">bolt</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Real-Time Everything</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">Powered by Pusher for instant messaging, live presence, and real-time notifications. Your team sees updates the moment they happen.</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-i18n">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">translate</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Localized for the World</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">Full multi-language support with editable translation strings, per-package translations, and RTL-ready UI. Serve customers in any language.</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-security">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">shield</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Secure by Default</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">Spatie permissions for granular access control, Google 2FA, reCAPTCHA, and IP restriction for attendance. Your data stays safe.</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 p-7 hover:shadow-md transition-shadow" id="highlight-cloud">
                    <span class="material-symbols-outlined text-brand text-3xl mb-4 block">cloud</span>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Cloud-Ready Storage</h3>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">Store files locally, on AWS S3, or Wasabi. Switch backends anytime through Settings — no code changes, no migration scripts.</p>
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
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">Transparent <span class="font-medium gradient-text">pricing.</span></h2>
            <p class="text-gray-500 font-light mb-8">Plans that grow with your business. No hidden fees.</p>

            {{-- Billing Toggle --}}
            <div class="inline-flex items-center bg-gray-100 rounded-full p-1 gap-1">
                <button onclick="setBilling('monthly')" id="btn-monthly"
                    class="px-5 py-2 rounded-full text-sm font-medium transition-all text-gray-500 hover:text-gray-700">
                    Monthly
                </button>
                <button onclick="setBilling('yearly')" id="btn-yearly"
                    class="px-5 py-2 rounded-full text-sm font-medium transition-all bg-white text-gray-900 shadow-sm">
                    Yearly <span class="text-brand text-xs font-semibold ml-1">+2 months free</span>
                </button>
            </div>
        </div>

        @php
        $modules = ['Accounting','CRM','HRM','Paypal','POS','Project','Stripe'];
        @endphp

        <div class="max-w-4xl mx-auto">

            {{-- ── Plan Cards ── --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 items-stretch">

                {{-- Free Plan --}}
                <div class="rounded-2xl border border-gray-100 p-6 hover:shadow-md transition-shadow flex flex-col">
                    <h4 class="text-base font-semibold text-gray-900 mb-1 text-center">Free Plan</h4>
                    <p class="text-xs text-gray-400 font-light mb-4 text-center leading-relaxed">Perfect for getting started with basic features</p>
                    <div class="text-center mb-4">
                        <span class="text-4xl font-bold text-brand">Free</span>
                        <p class="text-xs text-brand font-medium mt-1">&nbsp;</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600 font-light mb-4">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>5 users</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>1 GB storage</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>3 months free trial</li>
                    </ul>
                    <div class="border-t border-gray-100 pt-4 flex-1">
                        <p class="text-[10px] text-gray-400 font-semibold uppercase tracking-wider mb-2 text-center">Modules</p>
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
                        <span>★</span> Most Popular
                    </div>
                    <h4 class="text-base font-semibold text-gray-900 mb-1 text-center mt-1">Starter Plan</h4>
                    <p class="text-xs text-gray-400 font-light mb-4 text-center leading-relaxed">For small teams &amp; growing businesses</p>
                    <div class="text-center mb-1">
                        <span class="text-4xl font-bold text-gray-900 plan-price" data-yearly="2.5" data-monthly="3">36</span><span class="text-2xl font-bold text-gray-900">$</span>
                        <span class="text-sm text-gray-400 font-light plan-period" data-yearly="/yr" data-monthly="/mo">/yr</span>
                    </div>
                    <p class="text-[11px] text-brand font-medium mb-4 text-center yearly-badge">Billed $30/yr annually</p>
                    <p class="text-[11px] text-gray-400 mb-4 text-center monthly-badge hidden">Billed $36/yr annually</p>
                    <ul class="space-y-2 text-sm text-gray-600 font-light mb-4">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>10 users</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>5 GB storage</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>1 month trial</li>
                    </ul>
                    <div class="border-t border-brand/20 pt-4 flex-1">
                        <p class="text-[10px] text-brand font-semibold uppercase tracking-wider mb-2 text-center">Modules</p>
                        <div class="flex flex-wrap gap-1.5 justify-center">
                            @foreach($modules as $mod)
                            <span class="px-2.5 py-1 rounded-full bg-brand/10 text-brand text-[11px] font-medium">{{ $mod }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Enterprise Plan --}}
                <div class="rounded-2xl border border-gray-100 p-6 hover:shadow-md transition-shadow flex flex-col">
                    <h4 class="text-base font-semibold text-gray-900 mb-1 text-center">Enterprise</h4>
                    <p class="text-xs text-gray-400 font-light mb-4 text-center leading-relaxed">Multi-tenant &amp; white-label deployments</p>
                    <div class="text-center mb-4">
                        <span class="text-4xl font-bold text-gray-900">Custom</span>
                    </div>
                    <p class="text-[11px] text-gray-400 mb-4 text-center">&nbsp;</p>
                    <ul class="space-y-2 text-sm text-gray-600 font-light mb-4">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>Unlimited users</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>Custom storage</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0"></span>Dedicated support</li>
                    </ul>
                    <div class="border-t border-gray-100 pt-4 flex-1">
                        <p class="text-[10px] text-gray-400 font-semibold uppercase tracking-wider mb-2 text-center">Modules</p>
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
                    <a href="/register" class="w-full py-3 rounded-full border border-gray-200 text-sm font-medium text-center hover:bg-gray-50 hover:border-brand transition-all block">Start Free</a>
                </div>
                <div>
                    <a href="/register" class="w-full py-3 rounded-full bg-brand text-white text-sm font-semibold text-center hover:shadow-lg hover:shadow-brand/20 transition-all block">Get Started</a>
                </div>
                <div>
                    <a href="#contact" class="w-full py-3 rounded-full border border-gray-200 text-sm font-medium text-center hover:bg-gray-50 hover:border-brand transition-all block">Contact Sales</a>
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
                ['icon' => 'receipt', 'label' => 'Sales & Invoicing'],
                ['icon' => 'shopping_cart', 'label' => 'Purchase & Inventory'],
                ['icon' => 'account_balance', 'label' => 'Accounting'],
                ['icon' => 'badge', 'label' => 'HRM & Payroll'],
                ['icon' => 'assignment', 'label' => 'Projects'],
                ['icon' => 'favorite', 'label' => 'CRM'],
                ['icon' => 'point_of_sale', 'label' => 'POS'],
                ['icon' => 'help_center', 'label' => 'Helpdesk'],
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