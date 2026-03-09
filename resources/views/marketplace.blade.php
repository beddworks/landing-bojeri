<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bojeri - Book sports fields instantly. Futsal, badminton, basketball and more.">
    <title>Bojeri Marketplace — Sports Field Booking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    @livewireStyles
</head>
<body class="bg-gray-50 antialiased">
    {{-- Navigation --}}
    <nav class="bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="text-xl font-extrabold text-emerald-600 tracking-tight">Bojeri</a>
            <div class="flex items-center gap-4">
                <a href="{{ route('marketplace') }}" class="text-sm text-gray-600 hover:text-emerald-600 font-medium">Marketplace</a>
                @auth
                    <a href="/admin" class="text-sm bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition font-medium">Dashboard</a>
                @else
                    <a href="/admin/login" class="text-sm bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition font-medium">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Flash Messages --}}
    @if(session('success'))
        <div class="max-w-6xl mx-auto px-4 mt-4">
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-lg text-sm">
                {{ session('success') }}
            </div>
        </div>
    @endif

    {{-- Main Content --}}
    <livewire:field-search />
    <livewire:booking-modal />

    @livewireScripts
</body>
</html>
