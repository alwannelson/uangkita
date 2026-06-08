<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Verifikasi Email - uangkita</title>
    
    <!-- Fonts & Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-body-bg font-nunito antialiased">
    
    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        
        <!-- Card Container -->
        <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden">
            
            <!-- Header -->
            <div class="relative px-6 py-8 text-center" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                
                <!-- Icon -->
                <div class="flex justify-center mb-4">
                    <div class="bg-white/20 rounded-full p-4 backdrop-blur-sm">
                        <i class="fas fa-envelope text-white text-3xl"></i>
                    </div>
                </div>
                
                <h2 class="text-2xl font-bold text-white">Verifikasi Email</h2>
                <p class="text-white/80 text-sm mt-1">Konfirmasi alamat email Anda</p>
            </div>
            
            <!-- Content -->
            <div class="p-6">
                
                <!-- Info Message -->
                <div class="mb-6 p-4 bg-blue-50 rounded-xl border border-blue-200">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-info-circle text-blue-500 mt-0.5"></i>
                        <p class="text-sm text-blue-700 leading-relaxed">
                            Terima kasih telah mendaftar! Sebelum memulai, harap verifikasi alamat email Anda dengan mengklik tautan yang telah kami kirimkan ke email Anda.
                        </p>
                    </div>
                </div>
                
                <!-- Success Message -->
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-6 p-4 bg-green-50 rounded-xl border border-green-200">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                            <p class="text-sm text-green-700 leading-relaxed">
                                Tautan verifikasi baru telah dikirim ke alamat email Anda.
                            </p>
                        </div>
                    </div>
                @endif
                
                <!-- Buttons -->
                <div class="flex flex-col gap-3">
                    <!-- Resend Button -->
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit"
                            class="w-full py-3 rounded-xl text-white font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg flex items-center justify-center gap-2"
                            style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                            <i class="fas fa-paper-plane"></i> Kirim Ulang Email Verifikasi
                        </button>
                    </form>
                    
                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full py-3 rounded-xl border-2 font-semibold transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2"
                            style="border-color: var(--primary); color: var(--primary);">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
                
                <!-- Help Text -->
                <p class="text-center text-xs text-gray-400 mt-6">
                    <i class="fas fa-question-circle mr-1"></i>
                    Tidak menerima email? Periksa folder Spam atau Junk.
                </p>
                
            </div>
            
        </div>
        
    </div>
    
</body>
</html>