<section id="search-results" class="bg-gradient-to-br from-gray-50 to-gray-100 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl text-center font-bold mb-16">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-500">
                Wyniki wyszukiwania: "{{ $searchQuery }}"
            </span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @forelse($posts as $post)
                <div wire:key="search-post-{{ $post->id }}" class="bg-white rounded-2xl shadow-xl transition-all duration-300 hover:shadow-2xl hover:scale-[1.03] overflow-hidden flex flex-col h-full">
                    <div class="flex-none w-full aspect-square relative">
                        <img src="{{ asset('storage/' . ($post->image ?? 'default.jpg')) }}" alt="{{ $post->title }}" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <h2 class="text-xl font-bold mb-3">
                            {{ $post->title ?? 'Brak tytułu' }}
                        </h2>
                        <p class="text-gray-600 text-sm mb-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ optional($post->created_at)->format('d.m.Y') ?? 'Brak daty' }}
                        </p>
                        <p class="text-gray-700 text-base mb-4 break-all">
                            {{ \Illuminate\Support\Str::limit($post->content, 100) ?? 'Brak podsumowania' }}
                        </p>

                        <div class="mt-auto flex justify-center">
                            <button 
                                wire:click="goToPost({{ $post->id }})" 
                                class="w-full px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition duration-300 shadow-md">
                                Czytaj więcej
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white p-8 rounded-2xl shadow-lg text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <p class="text-xl text-gray-700">
                        Nie znaleziono wyników dla zapytania: <strong>{{ $searchQuery }}</strong>
                    </p>
                </div>
            @endforelse
        </div>

        @if($posts->count() > 0)
            <div class="mt-16 flex justify-center">
                <div class="pagination-links">
                    {{ $posts->links() }}
                </div>
            </div>
        @endif
    </div>
</section>