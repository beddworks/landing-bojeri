<!-- BEGIN: Footer -->
<footer class="border-t border-gray-100 bg-gray-50/50" id="site-footer">
    <!-- Pre-footer CTA -->
    <div class="container mx-auto px-6 py-20">
        <div class="bg-gradient-to-br from-brand to-emerald-600 rounded-3xl p-12 md:p-16 text-center relative overflow-hidden mb-20">
            <div class="absolute -right-16 -top-16 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -left-16 -bottom-16 w-48 h-48 bg-white/5 rounded-full blur-2xl"></div>
            <div class="relative z-10">
                <h2 class="text-3xl md:text-4xl font-light text-white mb-4">@lang('front.footer.cta_title')</h2>
                <p class="text-emerald-100 font-light text-lg max-w-xl mx-auto mb-8">
                    @lang('front.footer.cta_desc')
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://app.bojeri.com/register" class="bg-white text-brand font-semibold px-8 py-3.5 rounded-full hover:shadow-xl transition-all text-sm" id="footer-cta-trial">
                        @lang('front.footer.cta_trial')
                    </a>
                    <a href="https://app.bojeri.com/login?email=demo@bojeri.com&password=password12345" class="border border-white/30 text-white font-medium px-8 py-3.5 rounded-full hover:bg-white/10 transition-all text-sm" id="footer-cta-demo">
                        @lang('front.footer.cta_demo')
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
                    @lang('front.footer.tagline')
                </p>
                <div class="flex gap-4 hidden">
                    <a class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-brand hover:text-white transition-all" href="#" aria-label="@lang('front.footer.twitter_label')">
                        <span class="material-symbols-outlined text-lg">tag</span>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-brand hover:text-white transition-all" href="#" aria-label="@lang('front.footer.linkedin_label')">
                        <span class="material-symbols-outlined text-lg">work</span>
                    </a>
                    <a class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-brand hover:text-white transition-all" href="#" aria-label="@lang('front.footer.github_label')">
                        <span class="material-symbols-outlined text-lg">code</span>
                    </a>
                </div>
            </div>
            <div>
                <h5 class="text-xs font-semibold uppercase tracking-widest text-gray-900 mb-5">@lang('front.footer.platform')</h5>
                <ul class="space-y-3 text-sm text-gray-500 font-light">
                    <li><a class="hover:text-brand transition-colors" href="/docs">@lang('front.footer.all_features')</a></li>
                    <li><a class="hover:text-brand transition-colors" href="/docs">@lang('front.footer.documentation')</a></li>
                    <li class="hidden"><a class="hover:text-brand transition-colors" href="/articles">@lang('front.footer.articles')</a></li>
                    <li class="hidden"><a class="hover:text-brand transition-colors" href="#">@lang('front.footer.changelog')</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-xs font-semibold uppercase tracking-widest text-gray-900 mb-5">@lang('front.footer.company')</h5>
                <ul class="space-y-3 text-sm text-gray-500 font-light">
                    <li class="hidden"><a class="hover:text-brand transition-colors" href="#">@lang('front.footer.about')</a></li>
                    <li class="hidden"><a class="hover:text-brand transition-colors" href="#">@lang('front.footer.careers')</a></li>
                    <li><a class="hover:text-brand transition-colors" href="https://tawk.to/chat/69b0f49b791b0a1c352a38f2/1jjdjmvvg">@lang('front.footer.contact')</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-xs font-semibold uppercase tracking-widest text-gray-900 mb-5">@lang('front.footer.stay_updated')</h5>
                <p class="text-sm text-gray-500 font-light mb-4">@lang('front.footer.newsletter_desc')</p>
                <form class="relative" id="newsletter-form">
                    <input class="w-full bg-white border border-gray-200 rounded-full px-5 py-2.5 text-sm focus:ring-2 focus:ring-brand/20 focus:border-brand outline-none transition-all placeholder:text-gray-400" placeholder="@lang('front.footer.newsletter_placeholder')" type="email" id="newsletter-email"/>
                    <button type="submit" class="absolute right-1.5 top-1.5 bg-brand text-white w-7 h-7 rounded-full flex items-center justify-center hover:bg-brand-dark transition-colors">
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-gray-200 text-xs text-gray-400 font-medium gap-4">
            <p>@lang('front.footer.copyright')</p>

            <!-- Language switcher -->
            <div class="flex items-center gap-1 rounded-full border border-gray-200 p-0.5 bg-white">
                @php $currentLocale = app()->getLocale(); @endphp
                <a href="{{ route('lang.switch', 'en') }}"
                   class="px-3 py-1.5 rounded-full text-xs font-semibold transition-all {{ $currentLocale === 'en' ? 'bg-brand text-white shadow-sm' : 'text-gray-400 hover:text-gray-700' }}">
                    EN
                </a>
                <a href="{{ route('lang.switch', 'id') }}"
                   class="px-3 py-1.5 rounded-full text-xs font-semibold transition-all {{ $currentLocale === 'id' ? 'bg-brand text-white shadow-sm' : 'text-gray-400 hover:text-gray-700' }}">
                    ID
                </a>
            </div>

            <div class="flex gap-6">
                <a class="hover:text-gray-900 transition-colors" href="{{ route('privacy') }}">@lang('front.footer.privacy')</a>
                <a class="hover:text-gray-900 transition-colors" href="{{ route('terms') }}">@lang('front.footer.terms')</a>
                <a class="hover:text-gray-900 transition-colors" href="{{ route('cookies') }}">@lang('front.footer.cookies')</a>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->
