<div class="min-h-screen bg-gray-50">
    {{-- Hero Search Section --}}
    <div class="bg-gradient-to-br from-emerald-600 to-emerald-800 py-16 px-4">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-white mb-4">Find Your Perfect Sports Field</h1>
            <p class="text-emerald-100 mb-8 text-lg">Book futsal, badminton, basketball, and more — instantly.</p>

            {{-- Search Bar --}}
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input
                        wire:model.live.debounce.300ms="search"
                        type="text"
                        placeholder="Search fields by name or location..."
                        class="w-full px-6 py-4 rounded-xl text-gray-800 shadow-lg focus:ring-4 focus:ring-emerald-300 focus:outline-none text-lg"
                    >
                    <svg class="absolute right-4 top-4 w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Type Filter Pills --}}
    <div class="max-w-6xl mx-auto px-4 -mt-6">
        <div class="flex flex-wrap gap-3 justify-center">
            @foreach($types as $key => $typeInfo)
                <button
                    wire:click="setType('{{ $key }}')"
                    class="px-5 py-2.5 rounded-full font-medium text-sm transition-all shadow-md
                        {{ $type === $key
                            ? 'bg-emerald-600 text-white shadow-emerald-200'
                            : 'bg-white text-gray-700 hover:bg-emerald-50 hover:text-emerald-700' }}"
                >
                    <span class="mr-1">{{ $typeInfo['icon'] }}</span>
                    {{ $typeInfo['label'] }}
                </button>
            @endforeach
        </div>
    </div>

    {{-- Results Grid --}}
    <div class="max-w-6xl mx-auto px-4 py-10">
        @if($fields->isEmpty())
            <div class="text-center py-16">
                <svg class="mx-auto w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="text-lg font-medium text-gray-500">No fields found</h3>
                <p class="text-gray-400 mt-1">Try adjusting your search or filters</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($fields as $field)
                    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group">
                        {{-- Image --}}
                        <div class="h-48 bg-gradient-to-br from-emerald-100 to-emerald-200 relative overflow-hidden">
                            @if($field->image)
                                <img src="{{ asset('storage/' . $field->image) }}" alt="{{ $field->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            @else
                                <div class="flex items-center justify-center h-full text-5xl">
                                    {{ $types[$field->type]['icon'] ?? '🏟️' }}
                                </div>
                            @endif
                            <span class="absolute top-3 right-3 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-emerald-700">
                                {{ ucfirst($field->type) }}
                            </span>
                        </div>

                        {{-- Info --}}
                        <div class="p-5">
                            <h3 class="font-bold text-lg text-gray-800 mb-1">{{ $field->name }}</h3>
                            <p class="text-gray-500 text-sm flex items-center gap-1 mb-3">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                {{ $field->location }}
                            </p>

                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-2xl font-bold text-emerald-600">Rp {{ number_format($field->price_per_hour, 0, ',', '.') }}</span>
                                    <span class="text-gray-400 text-sm">/hour</span>
                                </div>

                                @can('create_booking')
                                    <button
                                        wire:click="$dispatch('open-booking-modal', { fieldId: {{ $field->id }} })"
                                        class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors font-medium text-sm"
                                    >
                                        Book Now
                                    </button>
                                @endcan
                            </div>

                            <div class="mt-3 pt-3 border-t border-gray-100 text-xs text-gray-400">
                                {{ $field->bookings_count }} bookings
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-8">
                {{ $fields->links() }}
            </div>
        @endif
    </div>
</div>
