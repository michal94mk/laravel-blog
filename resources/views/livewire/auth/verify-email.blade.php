<div class="container mx-auto px-4 py-12">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-2xl mx-auto">
        <div class="text-center">
            <div class="text-blue-500 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Potwierdź swój adres e-mail</h2>
            
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800">
                            Ważne: Sprawdź swoją skrzynkę e-mail!
                        </h3>
                        <div class="mt-2 text-sm text-yellow-700">
                            <p>
                                Wysłaliśmy link weryfikacyjny na adres: <strong>{{ $user->email }}</strong>. Kliknij w niego, aby aktywować swoje konto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            @if (session('status'))
                <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-green-700">
                                {{ session('status') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            
            <div class="prose prose-lg max-w-none text-gray-600 mb-8">
                <h3 class="text-xl font-bold text-gray-800">Co dalej?</h3>
                <ol class="text-left list-decimal pl-5 space-y-2">
                    <li>Otwórz swoją skrzynkę e-mail ({{ $user->email }})</li>
                    <li>Znajdź wiadomość z linkiem weryfikacyjnym (sprawdź też folder Spam)</li>
                    <li>Kliknij link w wiadomości, aby potwierdzić swój adres e-mail</li>
                    @if ($isTrainer)
                        <li>Po weryfikacji, administrator zatwierdzi Twoje konto trenerskie</li>
                        <li>Gdy konto zostanie zatwierdzone, będziesz mógł/mogła przyjmować rezerwacje</li>
                    @else
                        <li>Po weryfikacji, zaloguj się i korzystaj ze wszystkich funkcji platformy</li>
                    @endif
                </ol>
            </div>
            
            <div class="mb-8">
                <button wire:click="resendVerificationLink" 
                    wire:loading.attr="disabled"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <span wire:loading.remove wire:target="resendVerificationLink">Wyślij ponownie link weryfikacyjny</span>
                    <span wire:loading wire:target="resendVerificationLink">Wysyłanie...</span>
                </button>
                <p class="mt-2 text-sm text-gray-500">Nie otrzymałeś/aś e-maila? Kliknij powyższy przycisk, aby wysłać go ponownie.</p>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('profile') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-150 ease-in-out">
                    Przejdź do profilu
                </a>
                <a href="{{ route('home') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-6 rounded-lg shadow-md transition duration-150 ease-in-out">
                    Wróć do strony głównej
                </a>
            </div>
        </div>
    </div>
</div>
