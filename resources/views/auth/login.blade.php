<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Masuk - uangkita</title>

    <!-- Fonts & Styles -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-body-bg font-nunito antialiased">

    <div class="min-h-screen flex items-center justify-center px-4 py-8">

        <!-- Card Container -->
        <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden">

            <!-- Header -->
            <div class="relative px-6 py-8 text-center"
                style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>

                <!-- Logo -->
                <div class="flex justify-center mb-4">
                    <div class="bg-white/20 rounded-full p-3 backdrop-blur-sm">
                        <img src="{{ asset('img/app/uangkita-logo-center-removebg.png') }}" alt="uangkita"
                            class="h-12 w-auto brightness-0 invert">
                    </div>
                </div>

                <h2 class="text-2xl font-bold text-white">Masuk ke Akun</h2>
                <p class="text-white/80 text-sm mt-1">Gunakan username atau email</p>
            </div>

            <!-- Form Login -->
            <form method="POST" action="{{ route('login') }}" class="p-6">
                @csrf
                <!-- Flash Message (Success) -->
                @if (session('success'))
                    <div
                        class="mb-4 p-3 rounded-xl bg-green-50 border border-green-200 text-green-700 text-sm flex items-center gap-2">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Flash Message (Error) -->
                @if (session('error'))
                    <div
                        class="mb-4 p-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm flex items-center gap-2">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div
                        class="mb-4 p-3 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm flex items-center gap-2">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $errors->first() }}
                    </div>
                @endif
                <!-- Login (Username atau Email) -->
                <div class="mb-4">
                    <label for="login" class="block text-sm font-semibold text-text-main mb-2">
                        <i class="fas fa-envelope mr-2" style="color: var(--primary);"></i> Username atau Email
                    </label>
                    <input type="text" name="login" id="login" value="{{ old('login') }}" required
                        placeholder="Masukkan username atau email"
                        class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 transition-all"
                        style="focus:ring-color: var(--primary);">
                    @error('login')
                        <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i>
                            {{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold text-text-main mb-2">
                        <i class="fas fa-lock mr-2" style="color: var(--primary);"></i> Password
                    </label>
                    <input type="password" name="password" id="password" required placeholder="Masukkan password"
                        class="w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 transition-all"
                        style="focus:ring-color: var(--primary);">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i>
                            {{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember"
                            class="rounded border-gray-300 text-primary focus:ring-primary">
                        <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                    </label>
                    <a href="#" class="text-sm hover:underline" style="color: var(--primary);">Lupa password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-3 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg flex items-center justify-center gap-2"
                    style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                    <i class="fas fa-sign-in-alt"></i> Masuk
                </button>

                <!-- Link to Register -->
                <p class="text-center text-sm text-gray-500 mt-6">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-semibold hover:underline"
                        style="color: var(--primary);">
                        Daftar sekarang
                    </a>
                </p>
            </form>

        </div>

    </div>

</body>

</html>
