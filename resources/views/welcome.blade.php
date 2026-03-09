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

        {{-- Dashboard Mockup --}}
        <div class="relative max-w-5xl mx-auto animate-fade-in-up delay-400">
            <div class="absolute -inset-4 bg-gradient-to-r from-brand/10 via-cyan-400/10 to-brand/10 rounded-3xl blur-2xl"></div>
            <div class="relative rounded-2xl border border-gray-200 shadow-2xl shadow-gray-200/50 overflow-hidden bg-white">
                <div class="h-10 border-b border-gray-100 bg-gray-50/50 flex items-center px-4 gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-300"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-300"></div>
                    <div class="w-3 h-3 rounded-full bg-green-300"></div>
                    <span class="ml-4 text-xs text-gray-400 font-light">app.bojeri.com — Dashboard</span>
                </div>
                <div class="p-4 md:p-8 bg-white min-h-[380px] flex">
                    {{-- Mock Sidebar --}}
                    <div class="w-1/5 border-r border-gray-100 pr-6 hidden md:block">
                        <div class="h-5 w-full bg-brand/10 rounded mb-6"></div>
                        <div class="space-y-3">
                            <div class="h-3 w-3/4 bg-brand/20 rounded"></div>
                            <div class="h-3 w-1/2 bg-gray-100 rounded"></div>
                            <div class="h-3 w-2/3 bg-gray-100 rounded"></div>
                            <div class="h-3 w-1/2 bg-gray-100 rounded"></div>
                            <div class="h-3 w-3/5 bg-gray-100 rounded"></div>
                        </div>
                    </div>
                    {{-- Mock Content --}}
                    <div class="flex-1 md:pl-8">
                        <div class="flex justify-between items-center mb-8">
                            <div class="h-6 w-40 bg-gray-100 rounded"></div>
                            <div class="flex gap-2">
                                <div class="h-8 w-24 border border-gray-100 rounded-lg"></div>
                                <div class="h-8 w-8 bg-brand/10 rounded-lg"></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-4 mb-8">
                            <div class="h-20 border border-gray-100 rounded-xl p-3">
                                <div class="h-2 w-1/2 bg-gray-100 rounded mb-2"></div>
                                <div class="h-4 w-3/4 bg-brand/10 rounded"></div>
                            </div>
                            <div class="h-20 border border-gray-100 rounded-xl p-3">
                                <div class="h-2 w-1/2 bg-gray-100 rounded mb-2"></div>
                                <div class="h-4 w-3/4 bg-emerald-50 rounded"></div>
                            </div>
                            <div class="h-20 border border-gray-100 rounded-xl p-3">
                                <div class="h-2 w-1/2 bg-gray-100 rounded mb-2"></div>
                                <div class="h-4 w-3/4 bg-cyan-50 rounded"></div>
                            </div>
                            <div class="h-20 border border-gray-100 rounded-xl p-3">
                                <div class="h-2 w-1/2 bg-gray-100 rounded mb-2"></div>
                                <div class="h-4 w-3/4 bg-amber-50 rounded"></div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-1 h-40 bg-gray-50 rounded-xl p-4">
                                <div class="flex items-end gap-2 h-full pb-4">
                                    <div class="w-full h-1/3 bg-brand/20 rounded-t"></div>
                                    <div class="w-full h-2/3 bg-brand/40 rounded-t"></div>
                                    <div class="w-full h-1/2 bg-brand rounded-t"></div>
                                    <div class="w-full h-3/4 bg-brand rounded-t"></div>
                                    <div class="w-full h-1/3 bg-brand/30 rounded-t"></div>
                                    <div class="w-full h-2/3 bg-brand/60 rounded-t"></div>
                                </div>
                            </div>
                            <div class="w-1/3 h-40 bg-gray-50 rounded-xl p-4 hidden lg:block">
                                <div class="space-y-3">
                                    <div class="flex items-center gap-2"><div class="w-2 h-2 bg-brand rounded-full"></div><div class="h-2 w-2/3 bg-gray-200 rounded"></div></div>
                                    <div class="flex items-center gap-2"><div class="w-2 h-2 bg-emerald-400 rounded-full"></div><div class="h-2 w-1/2 bg-gray-200 rounded"></div></div>
                                    <div class="flex items-center gap-2"><div class="w-2 h-2 bg-cyan-400 rounded-full"></div><div class="h-2 w-3/4 bg-gray-200 rounded"></div></div>
                                    <div class="flex items-center gap-2"><div class="w-2 h-2 bg-amber-400 rounded-full"></div><div class="h-2 w-1/3 bg-gray-200 rounded"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <section class="container mx-auto px-6 mb-32" id="testimonials">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">What teams are <span class="font-medium gradient-text">saying.</span></h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="p-8 bg-gray-50/50 border border-gray-100 rounded-2xl" id="testimonial-1">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <span class="material-symbols-outlined text-amber-400 text-lg">star</span>
                    @endfor
                </div>
                <blockquote class="text-gray-700 font-light leading-relaxed mb-6">
                    "Since switching to Bojeri, we've cut our month-end close from 5 days to 1. Everything just… connects."
                </blockquote>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand/10 flex items-center justify-center text-brand font-semibold text-sm">SD</div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Sarah D.</p>
                        <p class="text-xs text-gray-400">CFO, GrowthScale Inc</p>
                    </div>
                </div>
            </div>

            <div class="p-8 bg-gray-50/50 border border-gray-100 rounded-2xl" id="testimonial-2">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <span class="material-symbols-outlined text-amber-400 text-lg">star</span>
                    @endfor
                </div>
                <blockquote class="text-gray-700 font-light leading-relaxed mb-6">
                    "Our HR team used to spend 8 hours a week reconciling timesheets. Now it's automatic."
                </blockquote>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-cyan-50 flex items-center justify-center text-cyan-600 font-semibold text-sm">MR</div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Michael R.</p>
                        <p class="text-xs text-gray-400">HR Director, LogiTrack</p>
                    </div>
                </div>
            </div>

            <div class="p-8 bg-gray-50/50 border border-gray-100 rounded-2xl" id="testimonial-3">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                    <span class="material-symbols-outlined text-amber-400 text-lg">star</span>
                    @endfor
                </div>
                <blockquote class="text-gray-700 font-light leading-relaxed mb-6">
                    "We ran four separate tools before Bojeri. Now it's one login and zero data gaps."
                </blockquote>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-amber-50 flex items-center justify-center text-amber-600 font-semibold text-sm">AL</div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">Aisha L.</p>
                        <p class="text-xs text-gray-400">CEO, NexWave Solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- BELOW THE FOLD — Platform Highlights --}}
    {{-- ============================================ --}}
    <section class="bg-gray-50/50 border-y border-gray-100 py-24 mb-32" id="platform-highlights">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extralight mb-4">Enterprise-ready. <span class="font-medium text-gray-900">Out of the box.</span></h2>
                <p class="text-gray-500 font-light max-w-xl mx-auto">Built on Laravel 12 with real-time capabilities, multi-language support, and flexible subscription plans.</p>
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

    {{-- ============================================ --}}
    {{-- PRICING --}}
    {{-- ============================================ --}}
    <section class="container mx-auto px-6 mb-32" id="pricing">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extralight mb-4">Transparent <span class="font-medium gradient-text">pricing.</span></h2>
            <p class="text-gray-500 font-light">Plans that grow with your business. No hidden fees.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Free --}}
            <div class="p-10 border border-gray-100 rounded-3xl flex flex-col hover:shadow-lg transition-shadow" id="price-free">
                <h4 class="text-xs uppercase tracking-widest text-gray-400 font-semibold mb-2">Starter</h4>
                <div class="flex items-baseline gap-1 mb-2">
                    <span class="text-4xl font-extralight">$0</span>
                    <span class="text-gray-400 font-light">/mo</span>
                </div>
                <p class="text-sm text-gray-400 font-light mb-8">Perfect for solo operators getting started.</p>
                <ul class="space-y-3 mb-10 flex-1 text-sm font-light text-gray-600">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        Core Invoicing &amp; Accounting
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        Up to 5 Users
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        Dashboard &amp; Reports
                    </li>
                </ul>
                <a href="/register" class="w-full py-3 rounded-full border border-gray-200 text-sm font-medium text-center hover:bg-gray-50 hover:border-brand transition-all block">Start Free</a>
            </div>

            {{-- Pro --}}
            <div class="p-10 border-2 border-brand rounded-3xl flex flex-col relative shadow-lg shadow-brand/5" id="price-pro">
                <div class="absolute top-0 right-8 -translate-y-1/2 bg-brand text-white px-4 py-1 rounded-full text-[10px] font-semibold tracking-wide">MOST POPULAR</div>
                <h4 class="text-xs uppercase tracking-widest text-brand font-semibold mb-2">Professional</h4>
                <div class="flex items-baseline gap-1 mb-2">
                    <span class="text-4xl font-extralight">$49</span>
                    <span class="text-gray-400 font-light">/mo</span>
                </div>
                <p class="text-sm text-gray-400 font-light mb-8">For growing teams that need all modules.</p>
                <ul class="space-y-3 mb-10 flex-1 text-sm font-light text-gray-600">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        All 16 Modules
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        Unlimited Users
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        Real-Time Messenger
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        Multi-Language Support
                    </li>
                </ul>
                <a href="/register" class="w-full py-3 rounded-full bg-brand text-white text-sm font-semibold text-center hover:shadow-lg hover:shadow-brand/20 transition-all block">Go Professional</a>
            </div>

            {{-- Enterprise --}}
            <div class="p-10 border border-gray-100 rounded-3xl flex flex-col hover:shadow-lg transition-shadow" id="price-enterprise">
                <h4 class="text-xs uppercase tracking-widest text-gray-400 font-semibold mb-2">Enterprise</h4>
                <div class="flex items-baseline gap-1 mb-2">
                    <span class="text-4xl font-extralight">Custom</span>
                </div>
                <p class="text-sm text-gray-400 font-light mb-8">For multi-tenant and white-label deployments.</p>
                <ul class="space-y-3 mb-10 flex-1 text-sm font-light text-gray-600">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        Custom Deployment
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        Dedicated Support
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        White-Label Branding
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-brand text-lg">check_circle</span>
                        SLA &amp; SSO
                    </li>
                </ul>
                <a href="#" class="w-full py-3 rounded-full border border-gray-200 text-sm font-medium text-center hover:bg-gray-50 hover:border-brand transition-all block">Contact Sales</a>
            </div>
        </div>
    </section>

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