@php
    $locale    = app()->getLocale();
    $ogLocale  = $locale === 'id' ? 'id_ID' : 'en_US';
    $langAttr  = $locale === 'id' ? 'id-ID' : 'en-US';
    $siteUrl   = config('app.url');
    $pageUrl   = request()->url();
    $pageTitle = trim($__env->yieldContent('title'))            ?: __('front.meta.default_title');
    $pageDesc  = trim($__env->yieldContent('meta_description')) ?: __('front.meta.default_description');
    $pageKw    = trim($__env->yieldContent('keywords'))         ?: __('front.meta.keywords');
    $canonical = trim($__env->yieldContent('canonical'))        ?: $pageUrl;
    $ogImage   = trim($__env->yieldContent('og_image'))         ?: asset('assets/meta_image.webp');
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    {{-- ─── SEO: Core ──────────────────────────────────────────────────────── --}}
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDesc }}"/>
    <meta name="keywords"    content="{{ $pageKw }}"/>
    <link rel="canonical"    href="{{ $canonical }}"/>

    {{-- ─── SEO: Hreflang (session-based locale, same URL serves both) ─────── --}}
    <link rel="alternate" hreflang="en"        href="{{ $siteUrl }}"/>
    <link rel="alternate" hreflang="id"        href="{{ $siteUrl }}"/>
    <link rel="alternate" hreflang="x-default" href="{{ $siteUrl }}"/>

    {{-- ─── SEO: Open Graph ───────────────────────────────────────────────── --}}
    <meta property="og:type"         content="website"/>
    <meta property="og:locale"       content="{{ $ogLocale }}"/>
    <meta property="og:site_name"    content="Bojeri"/>
    <meta property="og:url"          content="{{ $canonical }}"/>
    <meta property="og:title"        content="{{ $pageTitle }}"/>
    <meta property="og:description"  content="{{ $pageDesc }}"/>
    <meta property="og:image"        content="{{ $ogImage }}"/>
    <meta property="og:image:width"  content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:image:alt"    content="Bojeri ERP Platform"/>

    {{-- ─── SEO: Twitter Card ─────────────────────────────────────────────── --}}
    <meta name="twitter:card"        content="summary_large_image"/>
    <meta name="twitter:title"       content="{{ $pageTitle }}"/>
    <meta name="twitter:description" content="{{ $pageDesc }}"/>
    <meta name="twitter:image"       content="{{ $ogImage }}"/>

    {{-- ─── SEO: JSON-LD (default; pages may @push('schema') to override) ─── --}}
    @stack('schema')
    <script type="application/ld+json">{!! json_encode([
        '@context'            => 'https://schema.org',
        '@type'               => 'SoftwareApplication',
        'name'                => 'Bojeri',
        'applicationCategory' => 'BusinessApplication',
        'operatingSystem'     => 'Web',
        'description'         => $pageDesc,
        'url'                 => $siteUrl,
        'inLanguage'          => $langAttr,
        'offers'              => ['@type' => 'Offer', 'price' => '2.50', 'priceCurrency' => 'USD'],
        'publisher'           => [
            '@type' => 'Organization',
            'name'  => 'Bojeri',
            'url'   => $siteUrl,
            'logo'  => ['@type' => 'ImageObject', 'url' => asset('assets/meta_image.webp')],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>

    {{-- ─── Favicon ─────────────────────────────────────────────────────────── --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon/favicon.ico') }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}"/>
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}"/>

    <meta name="google-site-verification" content="zvJ_5pHyqe-suLRdRTs66xfuVuKbdaaWcUCh0qu0dqw" />

    {{-- ─── Assets ──────────────────────────────────────────────────────────── --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- ─── Google Fonts: Inter ────────────────────────────────────────────── --}}
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    {{-- ─── Material Symbols ───────────────────────────────────────────────── --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: #ffffff;
            color: #1a1a1a;
        }
        h1, h2, h3, h4 {
            letter-spacing: -0.02em;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        @keyframes pulse-subtle {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.7s ease-out forwards;
            opacity: 0;
        }
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
            opacity: 0;
        }
        .animate-slide-down {
            animation: slideDown 0.4s ease-out forwards;
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }

        /* Mega menu */
        .mega-menu {
            display: none;
        }
        .group:hover .mega-menu {
            display: block;
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #12b780 0%, #0ea5e9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Glass effect */
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
        }

        /* Scrollbar */
        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #e2e8f0;
            border-radius: 10px;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-white">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/69b0f49b791b0a1c352a38f2/1jjdjmvvg';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
