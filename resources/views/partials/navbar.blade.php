<!-- BEGIN: Navigation -->
<nav class="fixed top-0 w-full z-50 glass border-b border-gray-100/50 h-16 flex items-center" id="main-nav">
    <div class="container px-6 md:px-0 mx-auto flex justify-between items-center">
        <!-- Brand -->
        <a href="/" class="flex items-center gap-2.5 md:w-64" id="brand-logo">
            <div class="h-10">
                <img src="{{ asset('assets/logo.png') }}" class="object-fit w-full h-full">
            </div>
        </a>

        <!-- Desktop Nav -->
        <div class="hidden md:flex items-center gap-8">
            <a class="text-sm font-medium text-gray-500 hover:text-brand transition-colors" href="/">@lang('front.nav.home')</a>
            <a class="text-sm font-medium text-gray-500 hover:text-brand transition-colors" href="/#pricing">@lang('front.nav.pricing')</a>

            <!-- Solutions Mega Menu -->
            <div class="group h-16 flex items-center">
                <button class="text-sm font-medium text-gray-500 hover:text-brand transition-colors flex items-center gap-1" id="solutions-menu-btn">
                    @lang('front.nav.solutions')
                    <span class="material-symbols-outlined text-[16px] group-hover:rotate-180 transition-transform duration-300">expand_more</span>
                </button>
                <div class="mega-menu fixed top-16 left-0 right-0 mx-auto w-[720px] bg-white border border-gray-100 shadow-2xl shadow-gray-200/50 rounded-2xl p-8 z-50 animate-slide-down">
                    <div class="grid grid-cols-4 gap-8">
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-4 font-semibold">@lang('front.nav.core_business')</h4>
                            <ul class="space-y-3 text-[13px] text-gray-600">
                                <li><a href="/docs#dashboard" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">dashboard</span> @lang('front.nav.dashboard')</a></li>
                                <li><a href="/docs#user-management" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">group</span> @lang('front.nav.user_management')</a></li>
                                <li><a href="/docs#project" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">assignment</span> @lang('front.nav.projects')</a></li>
                                <li><a href="/docs#crm" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">favorite</span> @lang('front.nav.crm')</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-4 font-semibold">@lang('front.nav.financials')</h4>
                            <ul class="space-y-3 text-[13px] text-gray-600">
                                <li><a href="/docs#accounting" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">account_balance</span> @lang('front.nav.accounting')</a></li>
                                <li><a href="/docs#sales-invoice" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">receipt</span> @lang('front.nav.sales_invoice')</a></li>
                                <li><a href="/docs#purchase" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">shopping_cart</span> @lang('front.nav.purchase')</a></li>
                                <li><a href="/docs#proposal" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">description</span> @lang('front.nav.proposals')</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-4 font-semibold">@lang('front.nav.operations')</h4>
                            <ul class="space-y-3 text-[13px] text-gray-600">
                                <li><a href="/docs#hrm" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">badge</span> @lang('front.nav.hrm')</a></li>
                                <li><a href="/docs#pos" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">point_of_sale</span> @lang('front.nav.pos')</a></li>
                                <li><a href="/docs#product-service" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">inventory_2</span> @lang('front.nav.products')</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-4 font-semibold">@lang('front.nav.communication')</h4>
                            <ul class="space-y-3 text-[13px] text-gray-600">
                                <li><a href="/docs#messenger" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">chat</span> @lang('front.nav.messenger')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <a class="text-sm font-medium text-gray-500 hover:text-brand transition-colors" href="/docs">@lang('front.nav.docs')</a>
            <a class="text-sm font-medium text-gray-500 hover:text-brand transition-colors" href="/articles">@lang('front.nav.articles')</a>
        </div>

        <!-- CTA -->
        <div class="flex items-center md:w-64 justify-end gap-3">
            <a href="https://app.bojeri.com/login" class="hidden sm:inline-flex text-sm font-medium text-gray-600 px-5 py-2 rounded-full border border-gray-200 hover:border-brand hover:text-brand transition-all" id="nav-signin">
                @lang('front.nav.sign_in')
            </a>
            <a href="https://app.bojeri.com/register" class="text-sm font-semibold px-5 py-2 bg-brand text-white rounded-full hover:shadow-lg hover:shadow-brand/20 transition-all" id="nav-cta">
                @lang('front.nav.start_free_trial')
            </a>
            <!-- Mobile hamburger -->
            <button class="md:hidden text-gray-600" id="mobile-menu-btn" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <span class="material-symbols-outlined text-2xl">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="hidden absolute top-16 left-0 w-full bg-white border-b border-gray-100 shadow-lg md:hidden z-50" id="mobile-menu">
        <div class="container mx-auto px-6 py-6 flex flex-col gap-4">
            <a class="text-sm font-medium text-gray-700 py-2 hover:text-brand" href="/">@lang('front.nav.home')</a>
            <a class="text-sm font-medium text-gray-700 py-2 hover:text-brand" href="/#pricing">@lang('front.nav.pricing')</a>
            <a class="text-sm font-medium text-gray-700 py-2 hover:text-brand" href="/docs">@lang('front.nav.docs')</a>
            <a class="text-sm font-medium text-gray-700 py-2 hover:text-brand" href="/articles">@lang('front.nav.articles')</a>
            <hr class="border-gray-100"/>
            <a href="/register" class="text-sm font-semibold px-5 py-2.5 bg-brand text-white rounded-full text-center hover:shadow-lg hover:shadow-brand/20 transition-all">
                @lang('front.nav.start_free_trial')
            </a>
        </div>
    </div>
</nav>
<!-- END: Navigation -->
