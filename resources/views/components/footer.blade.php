<footer class="bg-gray-900 text-gray-300 mt-auto">
    <!-- Main Footer -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Brand Column -->
            <div>
                <div class="flex items-center mb-4 group">
                    <a href="/" class="transition-all duration-300 group-hover:scale-105">
                        <div class="bg-gray-200 rounded-xl p-2 inline-flex items-center justify-center">
                            <img src="{{ asset('img/app/uangkita-logo-center-removebg.png') }}" alt="UangKita"
                                class="h-8 md:h-10 w-auto">
                        </div>
                    </a>
                </div>
                <p class="text-sm text-gray-400 mb-4 leading-relaxed">
                    {{ __('messages.save_together_without') }} {{ __('messages.the_hassle') }}. <br> {{ __('messages.manage_money_easily') }}
                </p>
                <!-- Social Media dengan Font Awesome -->
                <div class="flex space-x-3">
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center transition-all duration-300 hover:bg-gray-700 hover:scale-110">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center transition-all duration-300 hover:bg-gray-700 hover:scale-110">
                        <i class="fab fa-tiktok text-sm"></i>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center transition-all duration-300 hover:bg-gray-700 hover:scale-110">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#"
                        class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center transition-all duration-300 hover:bg-gray-700 hover:scale-110">
                        <i class="fas fa-envelope text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Contact Column dengan Font Awesome -->
            <div>
                <h3 class="font-semibold text-white mb-4 text-lg">Kontak</h3>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li
                        class="flex items-center gap-3 hover:text-white transition-all duration-300 hover:translate-x-1">
                        <i class="fas fa-map-marker-alt w-4"></i> Padang, Sumatera Barat
                    </li>
                    <li
                        class="flex items-center gap-3 hover:text-white transition-all duration-300 hover:translate-x-1">
                        <i class="fas fa-phone-alt w-4"></i> +62 831-8182-4490
                    </li>
                    <li
                        class="flex items-center gap-3 hover:text-white transition-all duration-300 hover:translate-x-1">
                        <i class="fas fa-envelope w-4"></i> alwanaditiaduha@gmail.com
                    </li>
                </ul>
            </div>

            <!-- Support Column dengan Card + Image (seperti logo UangKita) -->
            <div>
                <h3 class="font-semibold text-white mb-4 text-lg">Pendukung</h3>
                <div class="grid grid-cols-2 gap-3">
                    <!-- Card Midtrans -->
                    <div
                        class="bg-gray-800 rounded-xl p-3 text-center transition-all duration-300 hover:scale-105 hover:bg-gray-700 cursor-pointer">
                        <div class="bg-gray-200 rounded-lg p-2 inline-flex items-center justify-center mb-2">
                            <img src="{{ asset('img/app/midtrans-logo.png') }}" alt="Midtrans" class="h-6 w-auto">
                        </div>
                        <span class="text-xs font-medium">Midtrans</span>
                    </div>

                    <!-- Card Laravel -->
                    <div
                        class="bg-gray-800 rounded-xl p-3 text-center transition-all duration-300 hover:scale-105 hover:bg-gray-700 cursor-pointer">
                        <div class="bg-gray-200 rounded-lg p-2 inline-flex items-center justify-center mb-2">
                            <img src="{{ asset('img/app/QRIS-logo.png') }}" alt="QRIS" class="h-6 w-auto">
                        </div>
                        <span class="text-xs font-medium">QRIS</span>
                    </div>

                    <!-- Card Tailwind CSS -->
                    <div
                        class="bg-gray-800 rounded-xl p-3 text-center transition-all duration-300 hover:scale-105 hover:bg-gray-700 cursor-pointer">
                        <div class="bg-gray-200 rounded-lg p-2 inline-flex items-center justify-center mb-2">
                            <img src="{{ asset('img/app/dana-logo.png') }}" alt="Dana" class="h-6 w-auto">
                        </div>
                        <span class="text-xs font-medium">DANA</span>
                    </div>

                    <!-- Card Alpine.js -->
                    <div
                        class="bg-gray-800 rounded-xl p-3 text-center transition-all duration-300 hover:scale-105 hover:bg-gray-700 cursor-pointer">
                        <div class="bg-gray-200 rounded-lg p-2 inline-flex items-center justify-center mb-2">
                            <img src="{{ asset('img/app/gopay-logo.png') }}" alt="gopay" class="h-6 w-auto">
                        </div>
                        <span class="text-xs font-medium">gopay</span>
                    </div>
                </div>
            </div>

            <!-- Information Column -->
            <div>
                <h3 class="font-semibold text-white mb-4 text-lg">Informasi</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-all duration-300 hover:translate-x-1 inline-flex items-center gap-2">
                            <i class="fas fa-file-contract text-xs"></i> Terms & Conditions
                        </a></li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-all duration-300 hover:translate-x-1 inline-flex items-center gap-2">
                            <i class="fas fa-shield-alt text-xs"></i> Privacy Policy
                        </a></li>
                    <li><a href="#"
                            class="text-gray-400 hover:text-white transition-all duration-300 hover:translate-x-1 inline-flex items-center gap-2">
                            <i class="fas fa-info-circle text-xs"></i> About Us
                        </a></li>
                    <li><a href="#faq"
                            class="text-gray-400 hover:text-white transition-all duration-300 hover:translate-x-1 inline-flex items-center gap-2">
                            <i class="fas fa-question-circle text-xs"></i> FAQ
                        </a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} uangkita. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition-all duration-300 hover:scale-105">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="hover:text-white transition-all duration-300 hover:scale-105">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#" class="hover:text-white transition-all duration-300 hover:scale-105">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="hover:text-white transition-all duration-300 hover:scale-105">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
