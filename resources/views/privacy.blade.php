@extends('layouts.app')

@section('title', 'Privacy Policy — Bojeri')
@section('meta_description', 'Learn how Bojeri collects, uses, and protects your personal data.')

@section('content')
<div class="container mx-auto px-4 md:px-6 py-20 max-w-3xl">

    {{-- Header --}}
    <div class="mb-12">
        <a href="/" class="inline-flex items-center gap-1.5 text-sm text-brand font-medium mb-8 hover:underline">
            <span class="material-symbols-outlined text-base">arrow_back</span> Back to home
        </a>
        <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-3">Legal</p>
        <h1 class="text-4xl md:text-5xl font-extralight text-gray-900 mb-4">Privacy <span class="font-medium gradient-text">Policy</span></h1>
        <p class="text-gray-500 font-light">Last updated: <time datetime="2026-01-01">January 1, 2026</time></p>
    </div>

    {{-- Content --}}
    <div class="prose-custom space-y-10 text-gray-600 font-light leading-relaxed">

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">1. Who We Are</h2>
            <p>Bojeri ("we", "us", or "our") operates the Bojeri ERP platform at <strong class="font-medium text-gray-800">bojeri.com</strong>. This Privacy Policy explains what personal data we collect, why we collect it, and your rights regarding that data.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">2. Data We Collect</h2>
            <p class="mb-3">We collect information you provide directly and data generated through your use of the platform:</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span><strong class="font-medium text-gray-800">Account data</strong> — name, email address, company name, and password when you register.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span><strong class="font-medium text-gray-800">Billing data</strong> — payment method details processed securely via PayPal or Bank Transfer. We never store raw card numbers.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span><strong class="font-medium text-gray-800">Usage data</strong> — pages visited, features used, session duration, and IP address for security and analytics.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span><strong class="font-medium text-gray-800">Business data</strong> — invoices, HR records, project files, and other content you store within the platform.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span><strong class="font-medium text-gray-800">Device data</strong> — browser type, operating system, and referring URLs collected automatically.</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">3. How We Use Your Data</h2>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>To provide, operate, and improve the Bojeri platform.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>To process payments and manage your subscription.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>To send transactional emails (invoices, alerts, password resets).</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>To send product updates and newsletters (you can unsubscribe at any time).</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>To detect and prevent fraud, abuse, or security incidents.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>To comply with legal obligations.</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">4. Data Sharing</h2>
            <p class="mb-3">We do not sell your personal data. We share data only with:</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span><strong class="font-medium text-gray-800">Service providers</strong> — hosting (cloud infrastructure), payment processors (Stripe, PayPal), email delivery (SMTP providers), and error monitoring tools.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span><strong class="font-medium text-gray-800">Legal authorities</strong> — when required by law or to protect the rights and safety of users.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span><strong class="font-medium text-gray-800">Business transfers</strong> — in the event of a merger, acquisition, or sale of assets, with notice to users.</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">5. Data Retention</h2>
            <p>We retain your account data for as long as your account is active. After account deletion we retain certain data for up to 90 days for backup integrity, then permanently delete it. Billing records may be retained longer as required by financial regulations.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">6. Security</h2>
            <p>We use industry-standard security practices including TLS encryption in transit, encrypted storage, two-factor authentication, and role-based access controls. No system is 100% secure; we encourage strong, unique passwords and enabling 2FA on your account.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">7. Your Rights</h2>
            <p class="mb-3">Depending on your location, you may have the right to:</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Access a copy of your personal data.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Correct inaccurate data.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Request deletion of your data ("right to be forgotten").</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Object to or restrict certain processing.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Data portability — receive your data in a machine-readable format.</span></li>
            </ul>
            <p class="mt-3">To exercise any of these rights, email us at <a href="mailto:privacy@bojeri.com" class="text-brand hover:underline">privacy@bojeri.com</a>.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">8. Cookies</h2>
            <p>We use cookies for authentication, preferences, and analytics. See our <a href="{{ route('cookies') }}" class="text-brand hover:underline">Cookie Settings</a> page for full details and opt-out controls.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">9. Children's Privacy</h2>
            <p>Bojeri is not directed at children under 16. We do not knowingly collect data from minors. If you believe a child has provided us data, contact us and we will delete it promptly.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">10. Changes to This Policy</h2>
            <p>We may update this policy from time to time. Material changes will be communicated via email or an in-app notification at least 14 days before they take effect.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">11. Contact</h2>
            <p>Questions about this policy? Reach us at <a href="mailto:privacy@bojeri.com" class="text-brand hover:underline">privacy@bojeri.com</a> or write to: Bojeri, Legal Department.</p>
        </section>

    </div>

    {{-- Related links --}}
    <div class="mt-16 pt-8 border-t border-gray-100 flex flex-wrap gap-4">
        <a href="{{ route('terms') }}" class="text-sm text-brand hover:underline font-medium">Terms of Service →</a>
        <a href="{{ route('cookies') }}" class="text-sm text-brand hover:underline font-medium">Cookie Settings →</a>
    </div>
</div>
@endsection
