<!-- BEGIN: Navigation -->
<nav class="fixed top-0 w-full z-50 glass border-b border-gray-100/50 h-16 flex items-center" id="main-nav">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <!-- Brand -->
        <a href="/" class="flex items-center gap-2.5" id="brand-logo">
            <div class="h-10">
                <img src="{{ asset('assets/logo.png') }}" class="object-fit w-full h-full">
            </div>  
        </a>

        <!-- Desktop Nav -->
        <div class="hidden md:flex items-center gap-8">
            <a class="text-sm font-medium text-gray-500 hover:text-brand transition-colors" href="/">Home</a>

            <!-- Solutions Mega Menu -->
            <div class="group h-16 flex items-center">
                <button class="text-sm font-medium text-gray-500 hover:text-brand transition-colors flex items-center gap-1" id="solutions-menu-btn">
                    Solutions
                    <span class="material-symbols-outlined text-[16px] group-hover:rotate-180 transition-transform duration-300">expand_more</span>
                </button>
                <div class="mega-menu fixed top-16 left-0 right-0 mx-auto w-[720px] bg-white border border-gray-100 shadow-2xl shadow-gray-200/50 rounded-2xl p-8 z-50 animate-slide-down">
                    <div class="grid grid-cols-4 gap-8">
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-4 font-semibold">Core Business</h4>
                            <ul class="space-y-3 text-[13px] text-gray-600">
                                <li><a href="/docs#dashboard" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">dashboard</span> Dashboard</a></li>
                                <li><a href="/docs#user-management" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">group</span> User Management</a></li>
                                <li><a href="/docs#project" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">assignment</span> Projects</a></li>
                                <li><a href="/docs#crm" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">favorite</span> CRM</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-4 font-semibold">Financials</h4>
                            <ul class="space-y-3 text-[13px] text-gray-600">
                                <li><a href="/docs#accounting" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">account_balance</span> Accounting</a></li>
                                <li><a href="/docs#sales-invoice" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">receipt</span> Sales Invoice</a></li>
                                <li><a href="/docs#purchase" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">shopping_cart</span> Purchase</a></li>
                                <li><a href="/docs#proposal" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">description</span> Proposals</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-4 font-semibold">Operations</h4>
                            <ul class="space-y-3 text-[13px] text-gray-600">
                                <li><a href="/docs#hrm" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">badge</span> HRM</a></li>
                                <li><a href="/docs#pos" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">point_of_sale</span> POS</a></li>
                                <li><a href="/docs#product-service" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">inventory_2</span> Products</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-[10px] uppercase tracking-[0.2em] text-gray-400 mb-4 font-semibold">Communication</h4>
                            <ul class="space-y-3 text-[13px] text-gray-600">
                                <li><a href="/docs#messenger" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">chat</span> Messenger</a></li>
                                <li><a href="/docs#helpdesk" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">help_center</span> Helpdesk</a></li>
                                <li><a href="/docs#media-library" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">image</span> Media Library</a></li>
                                <li><a href="/docs#plan" class="hover:text-brand transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-brand/60 text-[16px]">credit_card</span> Subscriptions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <a class="text-sm font-medium text-gray-500 hover:text-brand transition-colors" href="/docs">Docs</a>
            <a class="text-sm font-medium text-gray-500 hover:text-brand transition-colors" href="/articles">Articles</a>
        </div>

        <!-- CTA -->
        <div class="flex items-center gap-3">
            <a href="/login" class="hidden sm:inline-flex text-sm font-medium text-gray-600 px-5 py-2 rounded-full border border-gray-200 hover:border-brand hover:text-brand transition-all" id="nav-signin">
                Sign In
            </a>
            <a href="/register" class="text-sm font-semibold px-5 py-2 bg-brand text-white rounded-full hover:shadow-lg hover:shadow-brand/20 transition-all" id="nav-cta">
                Start Free Trial
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
            <a class="text-sm font-medium text-gray-700 py-2 hover:text-brand" href="/">Home</a>

            <a class="text-sm font-medium text-gray-700 py-2 hover:text-brand" href="/docs">Docs</a>
            <a class="text-sm font-medium text-gray-700 py-2 hover:text-brand" href="/articles">Articles</a>
            <hr class="border-gray-100"/>
            <a href="/register" class="text-sm font-semibold px-5 py-2.5 bg-brand text-white rounded-full text-center hover:shadow-lg hover:shadow-brand/20 transition-all">
                Start Free Trial
            </a>
        </div>
    </div>
</nav>
<!-- END: Navigation -->
