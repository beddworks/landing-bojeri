<div>
    @if($showModal && $field)
        {{-- Backdrop --}}
        <div
            class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 transition-opacity"
            wire:click="closeModal"
        ></div>

        {{-- Modal --}}
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full max-h-[90vh] overflow-y-auto" wire:click.stop>
                {{-- Header --}}
                <div class="bg-gradient-to-r from-emerald-600 to-emerald-700 p-6 rounded-t-2xl">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-xl font-bold text-white">Book {{ $field->name }}</h2>
                            <p class="text-emerald-100 text-sm mt-1">{{ ucfirst($field->type) }} • {{ $field->location }}</p>
                        </div>
                        <button wire:click="closeModal" class="text-white/70 hover:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Form --}}
                <div class="p-6 space-y-5">
                    {{-- Date --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input
                            type="date"
                            wire:model="date"
                            min="{{ now()->format('Y-m-d') }}"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                        >
                        @error('date') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    {{-- Time Slots --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Start Time</label>
                            <input
                                type="time"
                                wire:model.live="startTime"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                            >
                            @error('startTime') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">End Time</label>
                            <input
                                type="time"
                                wire:model.live="endTime"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                            >
                            @error('endTime') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    {{-- Notes --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Notes (optional)</label>
                        <textarea
                            wire:model="notes"
                            rows="2"
                            placeholder="Any special requests..."
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                        ></textarea>
                    </div>

                    {{-- Price Display --}}
                    @if($totalPrice > 0)
                        <div class="bg-emerald-50 rounded-xl p-4 flex items-center justify-between">
                            <span class="text-gray-600 font-medium">Total Price</span>
                            <span class="text-2xl font-bold text-emerald-600">Rp {{ number_format($totalPrice, 0, ',', '.') }}</span>
                        </div>
                    @endif

                    {{-- Rate Info --}}
                    <p class="text-xs text-gray-400 text-center">
                        Rate: Rp {{ number_format($field->price_per_hour, 0, ',', '.') }} / hour
                    </p>

                    {{-- Submit --}}
                    <button
                        wire:click="createBooking"
                        wire:loading.attr="disabled"
                        wire:loading.class="opacity-50 cursor-not-allowed"
                        class="w-full py-3 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-colors"
                    >
                        <span wire:loading.remove wire:target="createBooking">Confirm Booking</span>
                        <span wire:loading wire:target="createBooking">Processing...</span>
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
