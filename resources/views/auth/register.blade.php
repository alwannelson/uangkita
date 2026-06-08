<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar - uangkita</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-body-bg font-nunito antialiased">
    
    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        
        <!-- Card Container -->
        <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden">
            
            <!-- Header dengan gradien warna primary -->
            <div class="relative px-6 py-8 text-center" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                <!-- Decorative circle -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                
                <!-- Logo -->
                <div class="flex justify-center mb-4">
                    <div class=" bg-white/20 rounded-full p-3 backdrop-blur-sm">
                        <img src="{{ asset('img/app/uangkita-logo-center-removebg.png') }}" alt="uangkita" class="h-12 w-auto brightness-0 invert">
                    </div>
                </div>
                
                <h2 class="text-2xl font-bold text-white">Buat Akun Baru</h2>
                <p class="text-white/80 text-sm mt-1">Mulai kelola keuangan bersama</p>
            </div>
            
            <!-- Form -->
            <form method="POST" action="{{ route('register') }}" class="p-6">
                @csrf
                
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold text-text-main mb-2">
                        <i class="fas fa-user mr-2" style="color: var(--primary);"></i> Nama Lengkap
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        placeholder="Masukkan nama lengkap"
                        class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 transition-all"
                        style="focus:ring-color: var(--primary); border-color: #e5e7eb;">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block text-sm font-semibold text-text-main mb-2">
                        <i class="fas fa-at mr-2" style="color: var(--primary);"></i> Username
                    </label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}" required
                        placeholder="Masukkan username unik"
                        class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 transition-all"
                        style="focus:ring-color: var(--primary);">
                    <p class="text-xs text-gray-400 mt-1"><i class="fas fa-info-circle mr-1"></i> Digunakan untuk login alternatif</p>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-text-main mb-2">
                        <i class="fas fa-envelope mr-2" style="color: var(--primary);"></i> Alamat Email
                    </label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        placeholder="contoh@email.com"
                        class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 transition-all"
                        style="focus:ring-color: var(--primary);">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold text-text-main mb-2">
                        <i class="fas fa-lock mr-2" style="color: var(--primary);"></i> Password
                    </label>
                    <input type="password" name="password" id="password" required
                        placeholder="Minimal 8 karakter"
                        class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 transition-all"
                        style="focus:ring-color: var(--primary);">
                    <p class="text-xs text-gray-400 mt-1"><i class="fas fa-shield-alt mr-1"></i> Minimal 8 karakter untuk keamanan</p>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-semibold text-text-main mb-2">
                        <i class="fas fa-check-circle mr-2" style="color: var(--primary);"></i> Konfirmasi Password
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        placeholder="Ulangi password"
                        class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 transition-all"
                        style="focus:ring-color: var(--primary);">
                </div>
                
                <!-- PIN -->
                <div class="mb-6">
                    <label for="pin" class="block text-sm font-semibold text-text-main mb-2">
                        <i class="fas fa-key mr-2" style="color: var(--primary);"></i> PIN (6 digit)
                    </label>
                    <input type="password" name="pin" id="pin" maxlength="6" required
                        placeholder="6 digit angka"
                        class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 transition-all text-center tracking-widest text-lg"
                        style="focus:ring-color: var(--primary);">
                    <p class="text-xs text-gray-400 mt-1"><i class="fas fa-lock mr-1"></i> PIN digunakan untuk otorisasi transaksi</p>
                    @error('pin')
                        <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg flex items-center justify-center gap-2"
                    style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                    <i class="fas fa-user-plus"></i> Daftar Sekarang
                </button>
                
                <!-- Link to Login -->
                <p class="text-center text-sm text-gray-500 mt-6">
                    Sudah punya akun?
                    <a href="#" class="font-semibold hover:underline" style="color: var(--primary);">
                        Masuk di sini
                    </a>
                </p>
            </form>
            
        </div>
        
    </div>
    
</body>
</html>