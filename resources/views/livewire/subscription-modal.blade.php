<div>
    @if($isVisible)
        <div class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-6 rounded shadow-lg max-w-md">
                <p class="text-lg font-semibold text-center">Dziękujemy za subskrybcję!</p>
                <button wire:click="closeModal" class="mt-4 w-full bg-blue-500 text-white px-4 py-2 rounded">
                    Zamknij
                </button>
            </div>
        </div>
    @endif
</div>
