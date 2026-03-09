@extends('layouts.app')

@section('title', 'Articles & Insights — Bojeri ERP')
@section('meta_description', 'Read the latest articles, business strategy guides, and case studies from the Bojeri ERP team.')

@section('content')
<div class="pt-20">
    <div class="max-w-7xl mx-auto px-6 py-12">
        {{-- Hero: Featured Article --}}
        <section class="relative rounded-2xl overflow-hidden mb-16 h-[480px] flex items-end group" id="featured-article">
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAgYSzw3GKzplnpdcyIjyJcsIalldgLJwQOEf9spvNzm_ImuYmVDDJDvsX6tf4I5PDWZSMM4ReWeqggQmS00KLWQlYLvNoSoFyc4pntvtQux3_8CuuBvw1JxLmzWbd0qAXCnmWNVXTicZMfZgGzMtKq4AGkqGJrL_HvdmqdNIblaRDK4ktvxAwqwdL8cRk2EG40S6R1n90hLzpf3XQWnXY0TPkqFOJQoC19AuPtZGssNXU8Gieta6G_5F19RafyUeBvJdXADEQn6E0F')"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent"></div>
            <div class="relative p-10 md:p-16 max-w-3xl">
                <span class="inline-block px-3 py-1 bg-brand text-white text-[10px] font-bold uppercase tracking-widest rounded-full mb-6">Featured</span>
                <h1 class="text-3xl md:text-5xl font-extralight text-white leading-tight mb-6">
                    Stop Stitching Tools Together — The All-in-One ERP Advantage
                </h1>
                <p class="text-gray-300 font-light text-lg mb-8 max-w-xl">
                    Discover how Bojeri replaces 5–8 separate tools with one unified platform, reducing costs and eliminating data silos.
                </p>
                <div class="flex items-center gap-6">
                    <button class="bg-brand text-white px-8 py-3 rounded-full font-medium hover:bg-brand-dark transition-colors">Read Full Story</button>
                    <span class="text-gray-300 text-sm font-light">8 min read • Mar 2026</span>
                </div>
            </div>
        </section>

        {{-- Filters & Sort --}}
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12 border-b border-gray-100 pb-8">
            <div class="flex flex-wrap gap-2">
                <button class="px-5 py-2 rounded-full text-sm bg-brand text-white font-medium">All Articles</button>
                <button class="px-5 py-2 rounded-full text-sm text-gray-500 hover:bg-gray-50 transition-colors">Business Strategy</button>
                <button class="px-5 py-2 rounded-full text-sm text-gray-500 hover:bg-gray-50 transition-colors">Product Updates</button>
                <button class="px-5 py-2 rounded-full text-sm text-gray-500 hover:bg-gray-50 transition-colors">Case Studies</button>
                <button class="px-5 py-2 rounded-full text-sm text-gray-500 hover:bg-gray-50 transition-colors">ERP Tips</button>
            </div>
            <div class="flex items-center gap-2 text-gray-500 text-sm">
                <span>Sort by:</span>
                <button class="font-medium text-gray-900 flex items-center gap-1">Newest <span class="material-symbols-outlined text-sm">expand_more</span></button>
            </div>
        </div>

        {{-- Article Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            {{-- Article 1 --}}
            <article class="group cursor-pointer" id="article-1">
                <div class="relative aspect-[16/10] rounded-xl overflow-hidden mb-5">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC7TvhSWB8dhP46SpgEWy226bFxfE2MuciHw-QpojoK-1kiM4m04tiO9hBVnGuRdut0T0AjOJ7q1EDAAaGd8XOKJOprOf-Z6Gc835wkqTxAgYWPxTuekrZklFhGIiod2SYtyJdiCPL8bmOX9rrR3X6SKatfYZPsCYHHU0qsFbaxaRYutYMeHEcH-6QHHYissmQZsDxdrhG2Ziwgb3hBPgBV5s-oJQ4grm5plJr3NbHP42MxJ4f9E3o4EEcASNM56c6rCmXIe2_GhOwn')"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider text-brand shadow-sm">Product Updates</span>
                    </div>
                </div>
                <h3 class="text-2xl font-light leading-snug mb-3 group-hover:text-brand transition-colors">How Bojeri Connects Invoicing to Accounting Automatically</h3>
                <p class="text-gray-500 font-light text-sm line-clamp-3 mb-4">
                    See how proposals flow into invoices and update your Chart of Accounts in real-time — without a single manual journal entry.
                </p>
                <div class="flex items-center gap-3 text-gray-400 text-xs font-medium uppercase tracking-tighter">
                    <span>Accounting</span>
                    <span class="size-1 bg-gray-200 rounded-full"></span>
                    <span>6 min read</span>
                </div>
            </article>

            {{-- Article 2 --}}
            <article class="group cursor-pointer" id="article-2">
                <div class="relative aspect-[16/10] rounded-xl overflow-hidden mb-5">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA1u9-MtcBggcnPRniGfnzIxN-fT1i6YAAAeMK761s7-KY4VHdC0ZohbgpT18wrdGpzs4Wd91flHoDkg9hnyV4Y-wPKZGGITE-mZG-_aQx5fAnYiq7C4p4KzTaVKXzO16qyZsyr9fE6xa-_ZYJK_kYveZpVY5NbguAo2p8QM9ViggMIJlkYOwgZFao9Dbo0MomJTqjzhv73G0-TtPXDKb43z4Ff4PrGUBs9dTEZ1JnytSXIFbeTokEQGUloz8rN1xBcFUupl8VU9eBz')"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider text-brand shadow-sm">Business Strategy</span>
                    </div>
                </div>
                <h3 class="text-2xl font-light leading-snug mb-3 group-hover:text-brand transition-colors">The Real Cost of Stitched Tools: A 10-User Analysis</h3>
                <p class="text-gray-500 font-light text-sm line-clamp-3 mb-4">
                    We compared the total cost of QuickBooks + Gusto + HubSpot + Square + Asana vs. Bojeri for a 10-person team.
                </p>
                <div class="flex items-center gap-3 text-gray-400 text-xs font-medium uppercase tracking-tighter">
                    <span>Finance</span>
                    <span class="size-1 bg-gray-200 rounded-full"></span>
                    <span>8 min read</span>
                </div>
            </article>

            {{-- Article 3 --}}
            <article class="group cursor-pointer" id="article-3">
                <div class="relative aspect-[16/10] rounded-xl overflow-hidden mb-5">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCloV95HaoKiphCzflOCyCPQ4n1peMSkYAbF8WtzwzSR4XDXyaPf0Z9pBUOtazwuoc0DnwYGyXi5NiwSw6HwTR5xTOmtjirDdlnGtcWwsb1nu5DOxsqyNxnsy9j-WpT4tPDhR8vwjNWV8bQLUUcatUKaePqG13BqWHvz7RXP7CiZq-zGDMjWBAo1hPAY3NPiMay6xYtD3fLXWQNxP57jIhGgpQUH8FaInLZImjGOEshGq7tSbWJqnmFN37eK-E7WdW3vchJLO55a_ue')"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider text-brand shadow-sm">Case Study</span>
                    </div>
                </div>
                <h3 class="text-2xl font-light leading-snug mb-3 group-hover:text-brand transition-colors">How a Logistics Firm Automated HR with Bojeri</h3>
                <p class="text-gray-500 font-light text-sm line-clamp-3 mb-4">
                    120 drivers, night shifts, IP-restricted clock-ins, and automated overtime — see how Bojeri HRM replaced spreadsheets.
                </p>
                <div class="flex items-center gap-3 text-gray-400 text-xs font-medium uppercase tracking-tighter">
                    <span>HRM</span>
                    <span class="size-1 bg-gray-200 rounded-full"></span>
                    <span>5 min read</span>
                </div>
            </article>

            {{-- Article 4 --}}
            <article class="group cursor-pointer" id="article-4">
                <div class="relative aspect-[16/10] rounded-xl overflow-hidden mb-5">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA8gSLnjN-HvfvbTahC_5fMvWGrw4AE7dGuYpdKqESnqAkFUQrrLBtgXbkzxoaZS8pWdfnkhT5i14gwp5jcwAVUb6OA2oK89v8KKcLMPGpQCJRDm7AKh-c77TaYjnfAXNPtfzbh2kz7VmpSmUlJaJ7OjQiLCiKYFxKwneAwbbasm2mxVbdu9hLSlsyWkckv9g-QVO36ERvCC2wPD09eNSk_6BQUzKq6Qvq0UXxJqJJFZIrNlmZ8lnUwvA4CZAsv34mt7Kz2fYH7d6Zf')"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider text-brand shadow-sm">CRM</span>
                    </div>
                </div>
                <h3 class="text-2xl font-light leading-snug mb-3 group-hover:text-brand transition-colors">From Lead to Invoice: The Connected Sales Pipeline</h3>
                <p class="text-gray-500 font-light text-sm line-clamp-3 mb-4">
                    Track leads through custom pipeline stages, convert to deals, create proposals, and issue invoices — all without switching tools.
                </p>
                <div class="flex items-center gap-3 text-gray-400 text-xs font-medium uppercase tracking-tighter">
                    <span>Sales</span>
                    <span class="size-1 bg-gray-200 rounded-full"></span>
                    <span>7 min read</span>
                </div>
            </article>

            {{-- Article 5 --}}
            <article class="group cursor-pointer" id="article-5">
                <div class="relative aspect-[16/10] rounded-xl overflow-hidden mb-5">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBXZxpyYl6-M8Uhd3NChEfhrv1ORNxUcz4vGcPqbpCgiu3LylVYVusE2e4cQVg01OMiO2ZLJT3bj6fSvj-IbSqv2A6ZFpfh0DXN8bQRyVPMRjPen78RbuLI0y6e4vfj5FjZzCSkOY4Uo0wB8NNLJhbjueHd457W9LxAwdDBQdReuEftTbcMdvCVrcn9fMZu7oEPU384e72JtyGRU6xJoyqiv0P-q_wIe63XqNHci6fqTMeFOrAlaKicepWyhTCcH0JcA2cV2wlpVtWc')"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider text-brand shadow-sm">Multi-Tenant</span>
                    </div>
                </div>
                <h3 class="text-2xl font-light leading-snug mb-3 group-hover:text-brand transition-colors">Building a SaaS Platform on Bojeri's Multi-Tenant Engine</h3>
                <p class="text-gray-500 font-light text-sm line-clamp-3 mb-4">
                    How platform operators use Bojeri's subscription plans, white-labeling, and per-company data isolation to serve multiple clients.
                </p>
                <div class="flex items-center gap-3 text-gray-400 text-xs font-medium uppercase tracking-tighter">
                    <span>Platform</span>
                    <span class="size-1 bg-gray-200 rounded-full"></span>
                    <span>10 min read</span>
                </div>
            </article>

            {{-- Article 6 --}}
            <article class="group cursor-pointer" id="article-6">
                <div class="relative aspect-[16/10] rounded-xl overflow-hidden mb-5">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDgC-UPpvWNRI6UnAMZjj8u2fS4aebKPaztOSLiE-c8Xr6nEdmfDe3fXDgHhiWEsrKo_PuCshJmS-ilp2ZoCd6blouXT3feUgcNzxncDz667LpHafZYnxJ2uTfneZ2N0TQVgV4BDDh7FguxZw2ebmT_-YnCWlszYU7L52bH1j1dvLD7WEZNO_rv3ai8TrbNU5LSwqXIKWjJDsykblH7KTb5URTYmmyUSeOqSGgJrAJpYSJP0x8vCHu0jdVPOcrYDCgjXXC6ag7NLnCA')"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider text-brand shadow-sm">POS</span>
                    </div>
                </div>
                <h3 class="text-2xl font-light leading-snug mb-3 group-hover:text-brand transition-colors">Browser-Based POS: No Hardware Required</h3>
                <p class="text-gray-500 font-light text-sm line-clamp-3 mb-4">
                    Run your point-of-sale from any browser, print barcodes, track orders, and sync inventory — no dedicated POS hardware needed.
                </p>
                <div class="flex items-center gap-3 text-gray-400 text-xs font-medium uppercase tracking-tighter">
                    <span>Retail</span>
                    <span class="size-1 bg-gray-200 rounded-full"></span>
                    <span>4 min read</span>
                </div>
            </article>
        </div>

        {{-- Pagination --}}
        <div class="mt-20 flex justify-center items-center gap-4">
            <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-400 hover:border-brand hover:text-brand transition-colors">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-brand text-white font-medium">1</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-600 hover:border-brand hover:text-brand transition-colors font-medium">2</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-600 hover:border-brand hover:text-brand transition-colors font-medium">3</button>
            <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-gray-400 hover:border-brand hover:text-brand transition-colors">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
        </div>
    </div>
</div>
@endsection