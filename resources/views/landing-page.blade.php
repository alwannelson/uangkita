<x-app-layout>
    <!-- ==================== SECTION 1: HERO ==================== -->
    <section class="min-h-screen flex items-center relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 bg-gradient-to-br from-white via-body-bg to-body-bg"></div>
        <div class="absolute top-20 right-20 w-72 h-72 rounded-full opacity-20 animate-pulse"
            style="background: radial-gradient(circle, var(--primary) 0%, transparent 70%);"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 rounded-full opacity-10 animate-pulse animation-delay-1000"
            style="background: radial-gradient(circle, var(--primary) 0%, transparent 70%);"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

                <!-- Left Side: Text Content -->
                <div class="flex-1 text-center lg:text-left">
                    <div
                        class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm rounded-full px-4 py-2 mb-6 shadow-sm border border-gray-100 animate-fade-in">
                        <span class="text-sm font-medium text-text-main">{{ __('messages.smart_solution') }}</span>
                    </div>

                    <h1
                        class="text-5xl lg:text-6xl xl:text-7xl font-bold text-text-main mb-6 leading-tight animate-fade-in animation-delay-200">
                        <!-- Logo UangKita -->
                        <div class="flex justify-start">
                            <img src="{{ asset('img/app/uangkita-logo-center-removebg.png') }}" alt="uangkita"
                                class="w-32 sm:w-40 md:w-48 lg:w-64 xl:w-80 h-auto object-contain">
                        </div>
                        <span class="text-3xl lg:text-4xl block mt-2 text-left">
                            <span class="text-gray-500">{{ __('messages.save_together_without') }}</span>
                            <span class="relative inline-block mx-1 group cursor-pointer">
                                <span
                                    class="relative text-gray-400 group-hover:text-gray-500 transition duration-300">{{ __('messages.the_hassle') }}.</span>
                                <span
                                    class="absolute left-0 top-1/2 w-0 h-1 bg-gradient-to-r from-red-400 to-red-500 transform -translate-y-1/2 transition-all duration-500 ease-out group-hover:w-full"></span>
                            </span>
                        </span>
                    </h1>

                    <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0 animate-fade-in animation-delay-400">
                        {{ __('messages.manage_money_easily') }}
                    </p>

                    <div
                        class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-fade-in animation-delay-600">
                        <a href="#faq"
                            class="px-8 py-3 rounded-xl border-2 font-semibold transition-all duration-300 hover:scale-105 text-center"
                            style="border-color: var(--primary); color: var(--primary);">
                            {{ __('messages.learn_more') }}
                        </a>
                    </div>
                </div>

                <!-- Right Side: Illustration -->
                <div class="flex-1 flex justify-center animate-fade-in animation-delay-400">
                    <div class="relative group">
                        <!-- Lingkaran Utama -->
                        <div class="w-64 h-64 lg:w-80 lg:h-80 rounded-full flex items-center justify-center shadow-2xl transition-all duration-500 group-hover:scale-110 group-hover:rotate-3"
                            style="background: linear-gradient(135deg, var(--category-couple-text) 0%, var(--primary) 100%);">
                            <img src="{{ asset('img/app/logo-fav.png') }}" alt="Coin"
                                class="w-20 h-20 lg:w-28 lg:h-28 transition-all duration-500 group-hover:scale-110">
                        </div>

                        <!-- Rocket / Save -->
                        <div
                            class="absolute -top-5 -right-5 bg-white rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110 hover:rotate-12">
                            <span
                                class="text-xs font-bold text-gray-700 whitespace-nowrap">{{ __('messages.save_label') }}</span>
                        </div>

                        <!-- Lock / Our Money -->
                        <div
                            class="absolute -bottom-5 -left-5 bg-white rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110 hover:-rotate-12">
                            <span
                                class="text-xs font-bold text-gray-700 whitespace-nowrap">{{ __('messages.our_money_label') }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== SECTION 2: MENGAPA ==================== -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-text-main mb-2">
                    {{ __('messages.why_should') }}
                </h2>
                <img src="{{ asset('img/app/uangkita-logo-center-removebg.png') }}" alt="uangkita"
                    class="h-12 md:h-14 w-auto inline-block mx-auto mb-2">
                <div class="w-24 h-1 rounded-full mx-auto transition-all duration-500 hover:w-32"
                    style="background-color: var(--primary);"></div>
            </div>

            <div class="max-w-3xl mx-auto text-center">
                <p class="text-lg text-gray-600 leading-relaxed">
                    {{ __('messages.because') }}
                    <span class="font-semibold relative inline-block" style="color: var(--primary);">
                        {{ __('messages.financial_freedom') }}
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#FFB800] transition-all duration-3000 ease-in-out animate-write-erase"
                            style="animation: writeErase 4s infinite;"></span>
                    </span>.
                </p>
            </div>

            <!-- Feature Highlights -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                <div data-aos="fade-up" data-aos-delay="100"
                    class="bg-body-bg rounded-xl p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl group">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:rotate-12"
                        style="background-color: var(--primary);">
                        <i class="fas fa-lock text-white text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-text-main mb-2">{{ __('messages.security_system') }}</h3>
                    <p class="text-gray-500 text-sm">{{ __('messages.security_desc') }}</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="100"
                    class="bg-body-bg rounded-xl p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl group">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:rotate-12"
                        style="background-color: var(--primary);">
                        <i class="fas fa-credit-card text-white text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-text-main mb-2">{{ __('messages.payment_integration') }}</h3>
                    <p class="text-gray-500 text-sm">{{ __('messages.payment_desc') }}</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="100"
                    class="bg-body-bg rounded-xl p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl group">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 transition-all duration-300 group-hover:rotate-12"
                        style="background-color: var(--primary);">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-text-main mb-2">{{ __('messages.create_saving_group') }}</h3>
                    <p class="text-gray-500 text-sm">{{ __('messages.create_saving_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SECTION 3: KATEGORI ==================== -->
    <section id="categories" class="py-20 bg-body-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-text-main mb-4">
                    {{ __('messages.choose_category') }} <br>
                    <span style="color: var(--primary);">{{ __('messages.achieve_mission_together') }}</span>
                </h2>
                <div class="w-24 h-1 rounded-full mx-auto transition-all duration-500 hover:w-32"
                    style="background-color: var(--primary);"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Couple Card -->
                <div class="rounded-xl p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl cursor-pointer group"
                    style="background-color: #31081F; color: #ffffff;" data-aos="fade-right" data-aos-delay="100">
                    <div class="text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-heart text-white"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">{{ __('messages.couple') }}</h3>
                    <p class="text-sm opacity-90">{{ __('messages.couple_desc') }}</p>
                </div>

                <!-- Friend Card -->
                <div class="rounded-xl p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl cursor-pointer group"
                    style="background-color: #808F85; color: #ffffff;" data-aos="fade-right" data-aos-delay="100">
                    <div class="text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-user-friends text-white"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">{{ __('messages.friend') }}</h3>
                    <p class="text-sm opacity-90">{{ __('messages.friend_desc') }}</p>
                </div>

                <!-- Family Card -->
                <div class="rounded-xl p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl cursor-pointer group"
                    style="background-color: #E5EC97; color: #1f2937;" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-home" style="color: #1f2937;"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">{{ __('messages.family') }}</h3>
                    <p class="text-sm opacity-90">{{ __('messages.family_desc') }}</p>
                </div>

                <!-- Organization Card -->
                <div class="rounded-xl p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl cursor-pointer group"
                    style="background-color: #DCE0D9; color: #374151;" data-aos="fade-left" data-aos-delay="100">
                    <div class="text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-building" style="color: #374151;"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">{{ __('messages.organization') }}</h3>
                    <p class="text-sm opacity-90">{{ __('messages.organization_desc') }}</p>
                </div>

                <!-- Individual Card -->
                <div class="rounded-xl p-6 text-center transition-all duration-300 hover:scale-105 hover:shadow-xl cursor-pointer group"
                    style="background-color: #50514F; color: #ffffff;" data-aos="fade-left" data-aos-delay="100">
                    <div class="text-5xl mb-4 transition-transform duration-300 group-hover:scale-110">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">{{ __('messages.individual') }}</h3>
                    <p class="text-sm opacity-90">{{ __('messages.individual_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SECTION 4: QnA DROPDOWN ==================== -->
    <section id="faq" class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-text-main mb-4">
                    {{ __('messages.frequently_asked') }}
                </h2>
                <div class="w-24 h-1 rounded-full mx-auto transition-all duration-500 hover:w-32"
                    style="background-color: var(--primary);"></div>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div
                    class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300 hover:shadow-md">
                    <button @click="openFaq = openFaq === 1 ? null : 1"
                        class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-all duration-300">
                        <span class="font-semibold text-text-main">{{ __('messages.faq1_question') }}</span>
                        <svg class="w-5 h-5 transition-all duration-300" :class="openFaq === 1 ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--primary);">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="border-t border-gray-100">
                        <div class="p-5 text-gray-600 leading-relaxed bg-gray-50">
                            {{ __('messages.faq1_answer') }}
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div
                    class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300 hover:shadow-md">
                    <button @click="openFaq = openFaq === 2 ? null : 2"
                        class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-all duration-300">
                        <span class="font-semibold text-text-main">{{ __('messages.faq2_question') }}</span>
                        <svg class="w-5 h-5 transition-all duration-300" :class="openFaq === 2 ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--primary);">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="border-t border-gray-100">
                        <div class="p-5 text-gray-600 leading-relaxed bg-gray-50">
                            {{ __('messages.faq2_answer') }}
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div
                    class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300 hover:shadow-md">
                    <button @click="openFaq = openFaq === 3 ? null : 3"
                        class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-all duration-300">
                        <span class="font-semibold text-text-main">{{ __('messages.faq3_question') }}</span>
                        <svg class="w-5 h-5 transition-all duration-300" :class="openFaq === 3 ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--primary);">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="border-t border-gray-100">
                        <div class="p-5 text-gray-600 leading-relaxed bg-gray-50">
                            {{ __('messages.faq3_answer') }}
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div
                    class="border border-gray-200 rounded-xl overflow-hidden transition-all duration-300 hover:shadow-md">
                    <button @click="openFaq = openFaq === 4 ? null : 4"
                        class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-all duration-300">
                        <span class="font-semibold text-text-main">{{ __('messages.faq4_question') }}</span>
                        <svg class="w-5 h-5 transition-all duration-300" :class="openFaq === 4 ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--primary);">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="border-t border-gray-100">
                        <div class="p-5 text-gray-600 leading-relaxed bg-gray-50">
                            {{ __('messages.faq4_answer') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
