{{-- 
    Mini profil trenera - pokazuje znajomość Livewire
    Wykorzystuje metody z komponentu PHP i atrybut Computed
--}}
<div class="flex items-center">
    {{-- Avatar trenera z pierwszej litery imienia --}}
    <div class="w-8 h-8 rounded-full bg-blue-500 mr-3 flex items-center justify-center text-white font-bold">
        {{ substr($this->trainer->name, 0, 1) }}
    </div>
    
    {{-- Dane trenera - przykład użycia Computed --}}
    <div>
        <p class="text-sm font-medium text-white">{{ $this->trainer->name }}</p>
        <p class="text-xs text-gray-400">Trener{{ $this->trainer->is_approved ? '' : ' (oczekuje na zatwierdzenie)' }}</p>
    </div>
    
    {{-- Przycisk wylogowania z wire:click --}}
    <button 
        wire:click="logout" 
        class="ml-auto text-gray-400 hover:text-white"
        wire:loading.class="opacity-50"
        wire:loading.attr="disabled"
    >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
        </svg>
    </button>
</div> 