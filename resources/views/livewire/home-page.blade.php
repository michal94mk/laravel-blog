<div>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 to-gray-800 text-white h-screen text-center flex flex-col justify-center overflow-hidden">
        <!-- Background video -->
        <div class="absolute inset-0 w-full h-full z-0">
            <video id="video1" class="absolute inset-0 w-full h-full object-cover opacity-20" autoplay loop muted>
                <source src="/videos/video1.mp4" type="video/mp4">
                <source src="/videos/video1.webm" type="video/webm">
            </video>
        </div>

        <!-- Hero content -->
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl font-extrabold mb-4 transition duration-500 ease-in-out hover:scale-105">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-blue-600">
                    Zdrowie & Fitness
                </span>
            </h1>
            <p class="mt-2 text-xl text-gray-300 opacity-90 transition-all duration-500 hover:opacity-100 max-w-2xl mx-auto">
                Trenuj, jedz zdrowo i dbaj o siebie!
            </p>
            
            <!-- Section Navigation -->
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <button 
                    x-data="{ scrollTo() { document.getElementById('quick-access').scrollIntoView({ behavior: 'smooth' }); } }"
                    @click="scrollTo()" 
                    class="px-6 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full hover:from-blue-600 hover:to-blue-700 transition duration-300 hover:scale-105 shadow-md text-sm font-medium">
                    Szybki dostęp
                </button>

                <button 
                    x-data="{ scrollTo() { document.getElementById('popular-posts').scrollIntoView({ behavior: 'smooth' }); } }"
                    @click="scrollTo()" 
                    class="px-6 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full hover:from-blue-600 hover:to-blue-700 transition duration-300 hover:scale-105 shadow-md text-sm font-medium">
                    Popularne posty
                </button>
                
                <button 
                    x-data="{ scrollTo() { document.getElementById('posts').scrollIntoView({ behavior: 'smooth' }); } }"
                    @click="scrollTo()" 
                    class="px-6 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full hover:from-blue-600 hover:to-blue-700 transition duration-300 hover:scale-105 shadow-md text-sm font-medium">
                    Najnowsze posty
                </button>
                
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    <!-- Quick Access Section -->
    <section id="quick-access" class="bg-blue-50 py-16 border-b border-blue-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-3xl font-bold text-center text-blue-800 mb-10">Szybki dostęp</h3>
            
            <div class="flex flex-wrap justify-center gap-6">
                <!-- Znajdź trenera -->
                <a href="{{ route('trainers.list') }}" wire:navigate class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-lg hover:scale-105 hover:bg-blue-50 w-full sm:w-[calc(50%-12px)] md:w-[calc(33.333%-16px)] lg:w-60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Znajdź trenera</h4>
                    <p class="text-sm text-gray-600">Przeglądaj dostępnych trenerów</p>
                </a>
                
                <!-- Artykuły i porady -->
                <a href="{{ route('posts.list') }}" wire:navigate class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-lg hover:scale-105 hover:bg-blue-50 w-full sm:w-[calc(50%-12px)] md:w-[calc(33.333%-16px)] lg:w-60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Artykuły i porady</h4>
                    <p class="text-sm text-gray-600">Przeczytaj najnowsze artykuły</p>
                </a>
                
                <!-- Kalkulator Diety -->
                <a href="{{ route('nutrition-calculator') }}" wire:navigate class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-lg hover:scale-105 hover:bg-green-50 w-full sm:w-[calc(50%-12px)] md:w-[calc(33.333%-16px)] lg:w-60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Kalkulator Diety</h4>
                    <p class="text-sm text-gray-600">Oblicz zapotrzebowanie kaloryczne</p>
                </a>
                
                <!-- Planer Posiłków -->
                <a href="{{ route('meal-planner') }}" wire:navigate class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-lg hover:scale-105 hover:bg-green-50 w-full sm:w-[calc(50%-12px)] md:w-[calc(33.333%-16px)] lg:w-60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Planer Posiłków</h4>
                    <p class="text-sm text-gray-600">Stwórz plan posiłków</p>
                </a>
                
                @if(Auth::check())
                <!-- Moje rezerwacje - Only for logged in users -->
                <a href="{{ route('user.reservations') }}" wire:navigate class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-lg hover:scale-105 hover:bg-blue-50 w-full sm:w-[calc(50%-12px)] md:w-[calc(33.333%-16px)] lg:w-60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Moje rezerwacje</h4>
                    <p class="text-sm text-gray-600">Sprawdź swoje treningi</p>
                </a>
                @endif
                
                @if(Auth::guard('trainer')->check())
                <!-- Panel Trenera - Only for trainers -->
                <a href="{{ route('trainer.reservations') }}" wire:navigate class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-lg hover:scale-105 hover:bg-blue-50 w-full sm:w-[calc(50%-12px)] md:w-[calc(33.333%-16px)] lg:w-60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Panel Trenera</h4>
                    <p class="text-sm text-gray-600">Zarządzaj rezerwacjami</p>
                </a>
                @endif
            </div>
        </div>
    </section>
    
    <!-- Popular Posts Section -->
    <section id="popular-posts" class="bg-gradient-to-br from-blue-50 to-blue-100 py-20 border-t border-blue-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl text-center font-bold mb-16">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-700 to-blue-600">
                    Najpopularniejsze posty
                </span>
            </h2>

            <!-- Grid for popular posts -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($popularPosts as $post)
                <!-- Modern post card design -->
                <div wire:key="popular-{{ $post->id }}" class="group relative h-full">
                    <!-- Card with hover effect -->
                    <div class="relative h-full bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
                        <!-- Post image with elegant overlay -->
                        <div class="relative overflow-hidden">
                            <!-- Hexagon shape overlay -->
                            <div class="absolute -bottom-12 -right-12 w-24 h-24 bg-blue-50 rotate-45 z-0"></div>
                            
                            <!-- Image container with fixed aspect ratio -->
                            <div class="aspect-[4/3] overflow-hidden">
                                <img 
                                    src="{{ asset('storage/' . ($post->image ?? 'default.jpg')) }}" 
                                    alt="{{ $post->title }}" 
                                    class="w-full h-full object-cover object-center transform group-hover:scale-105 transition duration-700 ease-in-out"
                                >
                            </div>
                            
                            <!-- Position badge -->
                            <div class="absolute top-3 left-3 w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold shadow-lg">
                                {{ $loop->iteration }}
                            </div>
                            
                            <!-- Category badge -->
                            @if($post->category)
                            <div class="absolute top-4 right-4">
                                <span class="inline-block px-3 py-1 text-xs font-medium bg-blue-600/90 text-white backdrop-blur-sm rounded-md">
                                    {{ $post->category->name }}
                                </span>
                            </div>
                            @endif
                        </div>
                        
                        <!-- Content area -->
                        <div class="flex-1 p-6">
                            <!-- Post title with hover effect -->
                            <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                                @if($post->translations->isNotEmpty())
                                    {{ $post->translations->first()->title }}
                                @else
                                    {{ $post->title ?? 'Brak tytułu' }}
                                @endif
                            </h3>
                            
                            <!-- Subtle divider line with gradient -->
                            <div class="w-12 h-1 mt-2 mb-4 bg-gradient-to-r from-blue-500 to-blue-400 rounded"></div>
                            
                            <!-- Post excerpt with elegant typography -->
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                @if($post->translations->isNotEmpty() && $post->translations->first()->excerpt)
                                    {{ \Illuminate\Support\Str::limit($post->translations->first()->excerpt, 90) }}
                                @elseif($post->translations->isNotEmpty())
                                    {{ \Illuminate\Support\Str::limit($post->translations->first()->content, 90) }}
                                @else
                                    {{ \Illuminate\Support\Str::limit($post->excerpt ?? 'Brak opisu', 90) }}
                                @endif
                            </p>
                            
                            <!-- Author info -->
                            <p class="text-gray-500 text-sm mb-4">
                                Autor: {{ optional($post->user)->name ?? 'Brak autora' }}
                            </p>
                            
                            <!-- Post stats -->
                            <div class="flex justify-between text-sm text-gray-500">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <span>{{ number_format($post->view_count) }}</span>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                    </svg>
                                    <span>{{ $post->comments_count ?? 0 }}</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Modern view article button -->
                        <div class="border-t border-gray-100">
                            <a 
                                href="{{ route('post.show', ['postId' => $post->id]) }}"
                                wire:navigate
                                class="flex items-center justify-between px-6 py-4 text-gray-800 hover:bg-blue-50 transition-colors duration-300 group"
                            >
                                <span class="font-medium group-hover:text-blue-600 transition-colors duration-300">
                                    Czytaj artykuł
                                </span>
                                <svg class="w-5 h-5 text-blue-500 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- View all posts button -->
            <div class="flex justify-center mt-12">
                <a href="{{ route('posts.list', ['sortBy' => 'popular']) }}" wire:navigate class="px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg hover:from-blue-700 hover:to-blue-800 transition duration-300 shadow-md text-center flex items-center space-x-2">
                    <span>Zobacz wszystkie popularne posty</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Latest Posts Section -->
    <section id="posts" class="bg-gradient-to-br from-gray-50 to-gray-100 py-20 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl text-center font-bold mb-16">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-blue-500">
                    Najnowsze posty
                </span>
            </h2>

            <!-- Loop through posts -->
            @foreach ($posts as $post)
                <!-- Modern horizontal post card -->
                <div wire:key="post-{{ $post->id }}" class="bg-white rounded-lg shadow-sm hover:shadow-xl transition-all duration-500 mb-8 overflow-hidden flex flex-col md:flex-row max-w-4xl mx-auto">
                    <!-- Post image side -->
                    <div class="relative md:w-2/5 overflow-hidden">
                        <!-- Hexagon shape overlay -->
                        <div class="absolute -bottom-12 -right-12 w-24 h-24 bg-blue-50 rotate-45 z-0"></div>
                        
                        <!-- Image container -->
                        <div class="w-full h-full min-h-[240px]">
                            <img src="{{ asset('storage/' . ($post->image ?? 'default.jpg')) }}" 
                                alt="{{ $post->title }}" 
                                class="w-full h-full object-cover object-center hover:scale-105 transition duration-700 ease-in-out">
                        </div>
                        
                        <!-- Category badge -->
                        @if(isset($post->category) && $post->category)
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-blue-600/90 text-white backdrop-blur-sm rounded-md">
                                {{ $post->category->name }}
                            </span>
                        </div>
                        @endif
                    </div>

                    <!-- Content side -->
                    <div class="md:w-3/5 p-6 flex flex-col">
                        <!-- Title with divider -->
                        <h2 class="text-2xl font-bold text-gray-800 hover:text-blue-600 transition-colors duration-300">
                            @if($post->translations->isNotEmpty())
                                {{ $post->translations->first()->title }}
                            @else
                                {{ $post->title ?? 'Brak tytułu' }}
                            @endif
                        </h2>
                        <div class="w-16 h-1 my-3 bg-gradient-to-r from-blue-500 to-blue-400 rounded"></div>
                        
                        <!-- Post meta with elegant styles -->
                        <p class="text-gray-500 text-sm mb-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Dodano: {{ optional($post->created_at)->format('d.m.Y') ?? 'Brak daty' }}
                        </p>
                        
                        <!-- Post excerpt -->
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            @if($post->translations->isNotEmpty() && $post->translations->first()->excerpt)
                                {{ $post->translations->first()->excerpt }}
                            @elseif($post->translations->isNotEmpty())
                                {{ \Illuminate\Support\Str::limit($post->translations->first()->content, 150) }}
                            @else
                                {{ $post->excerpt ?? 'Brak opisu' }}
                            @endif
                        </p>
                        
                        <!-- Post stats in two columns -->
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-500 mb-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>{{ optional($post->user)->name ?? 'Brak autora' }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                <span>Komentarze: {{ $post->comments_count ?? 0 }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span>Wyświetlenia: {{ number_format($post->view_count) }}</span>
                            </div>
                        </div>

                        <!-- Modern read more button -->
                        <div class="mt-auto">
                            <a 
                                href="{{ route('post.show', ['postId' => $post->id]) }}" 
                                wire:navigate 
                                class="inline-flex items-center justify-center text-gray-800 hover:text-blue-600 transition-colors duration-300 group"
                            >
                                <span class="font-medium">Czytaj cały artykuł</span>
                                <svg class="w-5 h-5 ml-2 text-blue-500 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            
            <!-- View all posts button -->
            <div class="flex justify-center mt-8">
                <a href="{{ route('posts.list') }}" wire:navigate class="px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg hover:from-blue-700 hover:to-blue-800 transition duration-300 shadow-md text-center flex items-center space-x-2">
                    <span>Zobacz wszystkie posty</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Call to Action Section (tylko dla niezalogowanych użytkowników) -->
    @guest
    <section class="py-16 bg-gradient-to-r from-blue-700 to-blue-900 relative overflow-hidden">
        <!-- Dekoracyjne elementy tła -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute -top-24 -left-24 w-64 h-64 rounded-full bg-blue-500"></div>
            <div class="absolute top-20 right-10 w-48 h-48 rounded-full bg-blue-400"></div>
            <div class="absolute bottom-10 left-1/3 w-32 h-32 rounded-full bg-blue-600"></div>
        </div>
        
        <div class="max-w-5xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center md:text-left md:flex md:items-center md:justify-between">
                <div class="md:w-2/3 mb-10 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Dołącz do naszej społeczności fitness!
                    </h2>
                    <p class="text-blue-100 text-lg mb-6 md:pr-10">
                        Zarejestruj się już dziś, aby uzyskać dostęp do wszystkich funkcji platformy - 
                        personalizowane treningi, rezerwacje z trenerami, śledzenie postępów i więcej.
                    </p>
                    <ul class="text-left inline-block">
                        <li class="flex items-center text-blue-100 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Indywidualne rezerwacje treningów
                        </li>
                        <li class="flex items-center text-blue-100 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Dostęp do specjalnych treści i porad
                        </li>
                        <li class="flex items-center text-blue-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Możliwość komentowania i zapisywania artykułów
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/3 flex flex-col items-center">
                    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-sm transform transition-all duration-300 hover:scale-105">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Rozpocznij teraz</h3>
                        <div class="space-y-4">
                            <a href="{{ route('register') }}" class="block w-full bg-gradient-to-r from-blue-600 to-blue-500 text-white py-3 px-4 rounded-lg font-medium text-center hover:from-blue-700 hover:to-blue-600 transition duration-300 shadow-md">
                                Zarejestruj się
                            </a>
                            <a href="{{ route('login') }}" class="block w-full bg-white text-blue-600 border border-blue-300 py-3 px-4 rounded-lg font-medium text-center hover:bg-blue-50 transition duration-300">
                                Zaloguj się
                            </a>
                            <p class="text-center text-gray-500 text-sm">
                                Dołączenie zajmuje mniej niż 60 sekund
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endguest
    
    <!-- Back to top button -->
    <button 
        x-data="{ 
            isVisible: false,
            scrollToTop() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }"
        x-init="window.addEventListener('scroll', () => { isVisible = window.pageYOffset > 500 })"
        x-show="isVisible"
        x-transition.opacity
        @click="scrollToTop()"
        class="fixed bottom-8 right-8 p-3 rounded-full bg-blue-600 text-white shadow-lg hover:bg-blue-700 transition-all z-50"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</div>