<!-- BEGIN: Footer -->
<footer class="border-t border-gray-100 bg-gray-50/50" id="site-footer">
    <!-- Pre-footer CTA -->
    <div class="container mx-auto px-6 py-20">
        <div class="bg-gradient-to-br from-brand to-emerald-600 rounded-3xl p-12 md:p-16 text-center relative overflow-hidden mb-20">
            <div class="absolute -right-16 -top-16 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -left-16 -bottom-16 w-48 h-48 bg-white/5 rounded-full blur-2xl"></div>
            <div class="relative z-10">
                <h2 class="text-3xl md:text-4xl font-light text-white mb-4">Stop stitching tools together.</h2>
                <p class="text-emerald-100 font-light text-lg max-w-xl mx-auto mb-8">
                    Join businesses that run invoicing, accounting, HR, projects, CRM, and POS from a single platform.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/register" class="bg-white text-brand font-semibold px-8 py-3.5 rounded-full hover:shadow-xl transition-all text-sm" id="footer-cta-trial">
                        Start Free Trial
                    </a>
                    <a href="/features" class="border border-white/30 text-white font-medium px-8 py-3.5 rounded-full hover:bg-white/10 transition-all text-sm" id="footer-cta-demo">
                        See All Features
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer columns -->
        <div class="grid md:grid-cols-5 gap-12 mb-16">
            <div class="col-span-1 md:col-span-2">
                <a href="/" class="flex items-center gap-2.5 mb-5">
                    <div class="h-10">
                        <img src="{{ asset('assets/logo.png') }}" class="object-fit w-full h-full">
                    </div>  
                </a>
                <p class="text-sm text-gray-500 font-light leading-relaxed mb-6 max-w-xs">
                    A modular, multi-tenant ERP platform built for growing businesses. Everything your team needs, in one place.
                </p>
                <div class="flex gap-4">
                    <a class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-brand hover:text-white transition-all" href="#" aria-label="Twitter">
                        <span class="material-symbols-outlined text-lg">tag</span>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-brand hover:text-white transition-all" href="#" aria-label="LinkedIn">
                        <span class="material-symbols-outlined text-lg">work</span>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-brand hover:text-white transition-all" href="#" aria-label="GitHub">
                        <span class="material-symbols-outlined text-lg">code</span>
                    </a>
                </div>
            </div>
            <div>
                <h5 class="text-xs font-semibold uppercase tracking-widest text-gray-900 mb-5">Platform</h5>
                <ul class="space-y-3 text-sm text-gray-500 font-light">
                    <li><a class="hover:text-brand transition-colors" href="/features">All Features</a></li>
                    <li><a class="hover:text-brand transition-colors" href="/docs">Documentation</a></li>
                    <li><a class="hover:text-brand transition-colors" href="/articles">Articles</a></li>
                    <li><a class="hover:text-brand transition-colors" href="#">Changelog</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-xs font-semibold uppercase tracking-widest text-gray-900 mb-5">Company</h5>
                <ul class="space-y-3 text-sm text-gray-500 font-light">
                    <li><a class="hover:text-brand transition-colors" href="#">About</a></li>
                    <li><a class="hover:text-brand transition-colors" href="#">Careers</a></li>
                    <li><a class="hover:text-brand transition-colors" href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-xs font-semibold uppercase tracking-widest text-gray-900 mb-5">Stay Updated</h5>
                <p class="text-sm text-gray-500 font-light mb-4">Get product updates and tips.</p>
                <form class="relative" id="newsletter-form">
                    <input class="w-full bg-white border border-gray-200 rounded-full px-5 py-2.5 text-sm focus:ring-2 focus:ring-brand/20 focus:border-brand outline-none transition-all placeholder:text-gray-400" placeholder="Your email" type="email" id="newsletter-email"/>
                    <button type="submit" class="absolute right-1.5 top-1.5 bg-brand text-white w-7 h-7 rounded-full flex items-center justify-center hover:bg-brand-dark transition-colors">
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-gray-200 text-xs text-gray-400 font-medium">
            <p>© 2026 Bojeri. All rights reserved.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a class="hover:text-gray-900 transition-colors" href="{{ route('privacy') }}">Privacy Policy</a>
                <a class="hover:text-gray-900 transition-colors" href="{{ route('terms') }}">Terms of Service</a>
                <a class="hover:text-gray-900 transition-colors" href="{{ route('cookies') }}">Cookie Settings</a>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
