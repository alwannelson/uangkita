@props(['activeMenu' => 'dashboard'])

<div x-data="{ active: '{{ $activeMenu }}' }"
     @menu-changed.window="active = $event.detail"
     class="fixed bottom-4 left-4 right-4 bg-white border border-gray-200 z-30 lg:hidden shadow-lg rounded-2xl overflow-hidden">
    <div class="flex items-center justify-around py-2">
        <!-- Dashboard -->
        <a href="#" @click.prevent="$dispatch('menu-changed', 'dashboard')" 
           class="relative flex flex-col items-center py-2 px-4 transition-all duration-200 hover:scale-110 rounded-xl"
           :class="active === 'dashboard' ? 'text-primary' : 'text-gray-500'">
            <i class="fas fa-tachometer-alt text-2xl"></i>
            <div x-show="active === 'dashboard'" 
                 class="absolute -top-2 w-0 h-0 border-l-8 border-r-8 border-b-8 border-transparent border-b-primary"
                 style="top: -6px;"></div>
        </a>
        
        <!-- Groups -->
        <a href="#" @click.prevent="$dispatch('menu-changed', 'groups')" 
           class="relative flex flex-col items-center py-2 px-4 transition-all duration-200 hover:scale-110 rounded-xl"
           :class="active === 'groups' ? 'text-primary' : 'text-gray-500'">
            <i class="fas fa-folder text-2xl"></i>
            <div x-show="active === 'groups'" 
                 class="absolute -top-2 w-0 h-0 border-l-8 border-r-8 border-b-8 border-transparent border-b-primary"
                 style="top: -6px;"></div>
        </a>
        
        <!-- Create New Group (Center - Special) -->
        <a href="#" @click.prevent="$dispatch('menu-changed', 'create-group')" 
           class="relative -mt-8 flex items-center justify-center w-14 h-14 rounded-2xl shadow-lg transition-all duration-200 hover:scale-110"
           style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
            <i class="fas fa-plus text-white text-2xl"></i>
        </a>
        
        <!-- Chat -->
        <a href="#" @click.prevent="$dispatch('menu-changed', 'chat')" 
           class="relative flex flex-col items-center py-2 px-4 transition-all duration-200 hover:scale-110 rounded-xl"
           :class="active === 'chat' ? 'text-primary' : 'text-gray-500'">
            <i class="fas fa-comment-dots text-2xl"></i>
            <div x-show="active === 'chat'" 
                 class="absolute -top-2 w-0 h-0 border-l-8 border-r-8 border-b-8 border-transparent border-b-primary"
                 style="top: -6px;"></div>
        </a>
        
        <!-- Profile -->
        <a href="#" @click.prevent="$dispatch('menu-changed', 'profile')" 
           class="relative flex flex-col items-center py-2 px-4 transition-all duration-200 hover:scale-110 rounded-xl"
           :class="active === 'profile' ? 'text-primary' : 'text-gray-500'">
            <i class="fas fa-user-circle text-2xl"></i>
            <div x-show="active === 'profile'" 
                 class="absolute -top-2 w-0 h-0 border-l-8 border-r-8 border-b-8 border-transparent border-b-primary"
                 style="top: -6px;"></div>
        </a>
    </div>
</div>