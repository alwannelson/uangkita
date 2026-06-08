<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>uangkita - Dashboard</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-body-bg font-nunito antialiased" 
      x-data="{ 
        activeMenu: 'dashboard',
        sidebarExpanded: true
      }"
      @menu-changed.window="activeMenu = $event.detail">
    
    <!-- Sidebar Desktop & Tablet (hidden on mobile) -->
    <div class="hidden lg:block">
        <x-dashboard.sidebar :user="Auth::user()" />
    </div>
    
    <!-- Mobile Bottom Navigation (only on mobile) -->
    <div class="block lg:hidden">
        <x-dashboard.bottom-nav />
    </div>
    
    <!-- Main Content -->
    <div class="lg:ml-20 xl:ml-64 transition-all duration-300 pb-20 lg:pb-0">
        <!-- Header untuk Mobile (toggle sidebar tidak diperlukan lagi) -->
        <div class="sticky top-0 z-20 bg-white/80 backdrop-blur-md border-b border-gray-200 px-4 py-3 lg:hidden">
            <div class="flex items-center justify-between">
                <img src="{{ asset('img/app/uangkita-logo-center-removebg.png') }}" alt="uangkita" class="h-8 w-auto brightness-0">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white font-bold text-sm">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
            </div>
        </div>
        
        <!-- Konten Utama -->
        <main class="p-4 md:p-6 pb-24 lg:pb-6">
            @yield('content')
        </main>
    </div>
    
</body>
</html>