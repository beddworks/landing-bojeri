@extends('layouts.app')

@section('title', 'Terms of Service — Bojeri')
@section('meta_description', 'Read the terms and conditions governing your use of the Bojeri ERP platform.')

@section('content')
<div class="container mx-auto px-4 md:px-6 py-20 max-w-3xl">

    {{-- Header --}}
    <div class="mb-12">
        <a href="/" class="inline-flex items-center gap-1.5 text-sm text-brand font-medium mb-8 hover:underline">
            <span class="material-symbols-outlined text-base">arrow_back</span> Back to home
        </a>
        <p class="text-xs uppercase tracking-widest text-brand font-semibold mb-3">Legal</p>
        <h1 class="text-4xl md:text-5xl font-extralight text-gray-900 mb-4">Terms of <span class="font-medium gradient-text">Service</span></h1>
        <p class="text-gray-500 font-light">Last updated: <time datetime="2026-01-01">January 1, 2026</time></p>
    </div>

    {{-- Content --}}
    <div class="space-y-10 text-gray-600 font-light leading-relaxed">

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">1. Acceptance of Terms</h2>
            <p>By creating an account or using the Bojeri platform, you agree to these Terms of Service and our <a href="{{ route('privacy') }}" class="text-brand hover:underline">Privacy Policy</a>. If you do not agree, do not use the service.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">2. Description of Service</h2>
            <p>Bojeri is a cloud-based, modular ERP platform that includes invoicing, accounting, HRM, project management, CRM, POS, and related business tools. Features available to you depend on your subscription plan. We reserve the right to modify, add, or remove features at any time with reasonable notice.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">3. Account Registration</h2>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>You must provide accurate and complete registration information.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>You are responsible for maintaining the security of your account credentials.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>You must be at least 18 years old or have parental consent to use the platform.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>One account per person or legal entity unless a multi-tenant arrangement is agreed in writing.</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">4. Subscription & Billing</h2>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Paid plans are billed in advance on a monthly or annual basis.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Annual plans include 2 bonus months (12 months of access for the price of 10).</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Prices are shown exclusive of applicable taxes unless stated otherwise.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Subscriptions auto-renew unless cancelled before the renewal date.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Refunds are issued at our discretion within 14 days of initial purchase for annual plans. Monthly plans are non-refundable.</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">5. Free Plan & Trials</h2>
            <p>The Free Plan is provided at no cost with limited features and is subject to fair-use limits. Trial periods are offered at our discretion. At the end of a trial, access reverts to the Free Plan unless you upgrade. We reserve the right to suspend free accounts that are inactive for more than 12 months.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">6. Acceptable Use</h2>
            <p class="mb-3">You agree not to use Bojeri to:</p>
            <ul class="space-y-2 pl-4">
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Violate any applicable law or regulation.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Transmit spam, malware, or harmful content.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Attempt to gain unauthorized access to other users' data or our systems.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Reverse-engineer, decompile, or scrape the platform.</span></li>
                <li class="flex gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand shrink-0 mt-2"></span><span>Resell or sublicense access without written agreement.</span></li>
            </ul>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">7. Your Data & Content</h2>
            <p>You retain full ownership of all business data you upload or create within Bojeri. By using the platform you grant us a limited license to store and process your data solely to provide the service. We do not sell or use your business data for advertising purposes.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">8. Intellectual Property</h2>
            <p>All software, design, trademarks, and documentation comprising the Bojeri platform are owned by or licensed to us. Nothing in these terms grants you ownership of our intellectual property. You may not use our branding without prior written consent.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">9. Availability & Uptime</h2>
            <p>We aim for high availability but do not guarantee uninterrupted access. We may perform maintenance with or without prior notice. Planned maintenance will be communicated in advance where possible. We are not liable for losses resulting from downtime.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">10. Limitation of Liability</h2>
            <p>To the maximum extent permitted by law, Bojeri's total liability to you for any claim arising from the use of the platform shall not exceed the fees paid by you in the 3 months preceding the claim. We are not liable for indirect, incidental, or consequential damages.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">11. Termination</h2>
            <p>You may cancel your account at any time from account settings. We may suspend or terminate accounts that violate these terms, with or without notice. On termination, your data will be retained for 30 days before permanent deletion, during which you may export it.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">12. Changes to Terms</h2>
            <p>We may update these terms. Material changes will be communicated by email or in-app notification at least 14 days before taking effect. Continued use of the platform after that date constitutes acceptance of the updated terms.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">13. Governing Law</h2>
            <p>These terms are governed by the laws of the jurisdiction in which Bojeri is registered. Disputes shall be resolved by binding arbitration or the courts of that jurisdiction, as applicable.</p>
        </section>

        <section>
            <h2 class="text-lg font-semibold text-gray-900 mb-3">14. Contact</h2>
            <p>Questions about these terms? Email us at <a href="mailto:legal@bojeri.com" class="text-brand hover:underline">legal@bojeri.com</a>.</p>
        </section>

    </div>

    {{-- Related links --}}
    <div class="mt-16 pt-8 border-t border-gray-100 flex flex-wrap gap-4">
        <a href="{{ route('privacy') }}" class="text-sm text-brand hover:underline font-medium">Privacy Policy →</a>
        <a href="{{ route('cookies') }}" class="text-sm text-brand hover:underline font-medium">Cookie Settings →</a>
    </div>
</div>
@endsection
