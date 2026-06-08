<nav class="bg-white/80 backdrop-blur-md border-b border-gray-100 sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center transition-all duration-300 hover:scale-105">
                    <img src="{{ asset('img/app/uangkita-logo-center-removebg.png') }}" alt="UangKita" class="h-8 md:h-10 w-auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#features"
                    class="text-text-main hover:opacity-70 transition-all duration-300 hover:translate-y-[-2px]">{{ __('messages.features') }}</a>
                <a href="#categories"
                    class="text-text-main hover:opacity-70 transition-all duration-300 hover:translate-y-[-2px]">{{ __('messages.categories') }}</a>
                <a href="#faq"
                    class="text-text-main hover:opacity-70 transition-all duration-300 hover:translate-y-[-2px]">FAQ</a>
                <div class="hidden md:flex items-center space-x-3">
                    <x-language-switcher></x-language-switcher>
                </div>

                @auth
                    <a href="#"
                        class="px-4 py-2 rounded-lg text-white font-medium transition-all duration-300 hover:scale-105 hover:shadow-lg"
                        style="background-color: var(--primary);">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-text-main hover:opacity-70 transition-all duration-300">{{ __('messages.login') }}</a>
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 rounded-lg text-white font-medium transition-all duration-300 hover:scale-105 hover:shadow-lg"
                        style="background-color: var(--primary);">
                        {{ __('messages.register') }}
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden" x-data="{ mobileMenuOpen: false }">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="p-2 rounded-lg hover:bg-gray-100 transition-all duration-300">
                    <svg class="w-6 h-6 text-text-main" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Mobile Menu Panel -->
                <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-5"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-5"
                    class="absolute top-16 left-0 right-0 bg-white border-b border-gray-100 shadow-lg z-50">
                    <div class="flex flex-col space-y-3 p-4">
                        <a href="#features"
                            class="text-text-main hover:opacity-70 transition px-3 py-2 rounded-lg hover:bg-gray-50">Fitur</a>
                        <a href="#categories"
                            class="text-text-main hover:opacity-70 transition px-3 py-2 rounded-lg hover:bg-gray-50">Kategori</a>
                        <a href="#faq"
                            class="text-text-main hover:opacity-70 transition px-3 py-2 rounded-lg hover:bg-gray-50">FAQ</a>
                        @auth
                            <a href="#" class="px-3 py-2 rounded-lg text-white font-medium text-center"
                                style="background-color: var(--primary);">Dashboard</a>
                        @else
                            <a href="#" class="px-3 py-2 text-text-main hover:opacity-70">Login</a>
                            <a href="#" class="px-3 py-2 rounded-lg text-white font-medium text-center"
                                style="background-color: var(--primary);">Daftar</a>
                        @endauth
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
