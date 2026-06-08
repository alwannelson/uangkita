@props(['user'])

<div x-data="{
    isExpanded: false,
    activeMenu: 'dashboard',
    setActive(menu) { this.activeMenu = menu; }
}" @mouseenter="isExpanded = true" @mouseleave="isExpanded = false"
    class="fixed left-4 top-4 bottom-4 bg-white text-gray-800 transition-all duration-300 ease-in-out z-30 shadow-xl border border-gray-200 rounded-2xl overflow-hidden"
    :class="isExpanded ? 'w-64' : 'w-20'">

    <!-- Logo Area - Hanya muncul saat expanded -->
    <div x-show="isExpanded" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" class="flex items-center justify-center h-20 border-b border-gray-200">
        <div class="px-4">
            <img src="{{ asset('img/app/uangkita-logo-center-removebg.png') }}" alt="uangkita" class="h-10 w-auto">
        </div>
    </div>

    <!-- Spacer saat collapsed (biar tetap rapi) -->
    <div x-show="!isExpanded" class="h-20"></div>

    <!-- User Info (hanya tampil saat expanded) -->
    <div x-show="isExpanded" x-transition class="p-4 border-b border-gray-200">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white font-bold">
                {{ substr($user->name, 0, 1) }}
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-gray-800 truncate">{{ $user->name }}</p>
                <p class="text-xs text-gray-500 truncate">{{ $user->email }}</p>
            </div>
        </div>

        <!-- Real-time Clock -->
        <div class="mt-3 pt-3 border-t border-gray-200">
            <p class="text-xs text-gray-500" x-data="{
                time: '',
                updateTime() {
                    const now = new Date();
                    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
                    this.time = now.toLocaleDateString('id-ID', options);
                }
            }" x-init="updateTime();
            setInterval(() => updateTime(), 1000)" x-text="time"></p>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 overflow-y-auto py-4">
        <ul class="space-y-1">
            <!-- Dashboard -->
            <li>
                <a href="#" @click.prevent="setActive('dashboard')"
                    class="flex items-center py-3 transition-all duration-200 hover:bg-gray-100 mx-2 rounded-lg"
                    :class="activeMenu === 'dashboard' ? 'bg-primary/10 border-l-4 border-primary text-primary' :
                        'text-gray-600'"
                    :style="isExpanded ? 'padding-left: 1rem; padding-right: 1rem;' :
                        'justify-content: center; padding-left: 0; padding-right: 0;'">
                    <i class="fas fa-tachometer-alt w-5 h-5"></i>
                    <span x-show="isExpanded" x-cloak class="ml-3 text-sm whitespace-nowrap">Dashboard</span>
                </a>
            </li>

            <!-- Groups Dropdown -->
            <li x-data="{ dropdownOpen: false }">
                <a href="#" @click.prevent="dropdownOpen = !dropdownOpen"
                    class="flex items-center justify-between py-3 transition-all duration-200 hover:bg-gray-100 text-gray-600 mx-2 rounded-lg"
                    :style="isExpanded ? 'padding-left: 1rem; padding-right: 1rem;' :
                        'justify-content: center; padding-left: 0; padding-right: 0;'">
                    <div class="flex items-center">
                        <i class="fas fa-folder w-5 h-5"></i>
                        <span x-show="isExpanded" x-cloak class="ml-3 text-sm whitespace-nowrap">Groups</span>
                    </div>
                    <i x-show="isExpanded" x-cloak class="fas fa-chevron-down text-xs transition-transform"
                        :class="dropdownOpen ? 'rotate-180' : ''"></i>
                </a>

                <!-- Dropdown Menu -->
                <div x-show="dropdownOpen && isExpanded" x-collapse class="ml-8 mt-1 space-y-1">
                    <a href="#" @click.prevent="setActive('all-categories')"
                        class="flex items-center py-2 px-3 text-sm text-gray-600 hover:text-primary hover:bg-gray-100 rounded-lg transition mx-2">
                        <i class="fas fa-list mr-2 w-4 h-4"></i> All Categories
                    </a>
                    <a href="#" @click.prevent="setActive('couple')"
                        class="flex items-center py-2 px-3 text-sm text-gray-600 hover:text-primary hover:bg-gray-100 rounded-lg transition mx-2">
                        <i class="fas fa-heart mr-2 w-4 h-4" style="color: #31081F;"></i> Couple
                    </a>
                    <a href="#" @click.prevent="setActive('friend')"
                        class="flex items-center py-2 px-3 text-sm text-gray-600 hover:text-primary hover:bg-gray-100 rounded-lg transition mx-2">
                        <i class="fas fa-user-friends mr-2 w-4 h-4" style="color: #808F85;"></i> Friend
                    </a>
                    <a href="#" @click.prevent="setActive('family')"
                        class="flex items-center py-2 px-3 text-sm text-gray-600 hover:text-primary hover:bg-gray-100 rounded-lg transition mx-2">
                        <i class="fas fa-home mr-2 w-4 h-4" style="color: #E5EC97;"></i> Family
                    </a>
                    <a href="#" @click.prevent="setActive('organization')"
                        class="flex items-center py-2 px-3 text-sm text-gray-600 hover:text-primary hover:bg-gray-100 rounded-lg transition mx-2">
                        <i class="fas fa-building mr-2 w-4 h-4" style="color: #DCE0D9;"></i> Organization
                    </a>
                    <a href="#" @click.prevent="setActive('individual')"
                        class="flex items-center py-2 px-3 text-sm text-gray-600 hover:text-primary hover:bg-gray-100 rounded-lg transition mx-2">
                        <i class="fas fa-user mr-2 w-4 h-4" style="color: #50514F;"></i> Individual
                    </a>
                </div>
            </li>

            <!-- Create New Group (Special Button) -->
            <li class="mt-2">
                <a href="#" @click.prevent="setActive('create-group')"
                    class="flex items-center py-3 mx-2 rounded-xl transition-all duration-200"
                    :style="isExpanded ? 'padding-left: 0.75rem; padding-right: 0.75rem;' :
                        'justify-content: center; padding-left: 0; padding-right: 0; margin-left: 4px; margin-right: 4px;'"
                    style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
                    <i class="fas fa-plus w-5 h-5 text-white"></i>
                    <span x-show="isExpanded" x-cloak
                        class="ml-3 text-sm text-white font-medium whitespace-nowrap">Create New Group</span>
                </a>
            </li>

            <!-- Chat -->
            <li>
                <a href="#" @click.prevent="setActive('chat')"
                    class="flex items-center py-3 transition-all duration-200 hover:bg-gray-100 mx-2 rounded-lg"
                    :class="activeMenu === 'chat' ? 'bg-primary/10 border-l-4 border-primary text-primary' : 'text-gray-600'"
                    :style="isExpanded ? 'padding-left: 1rem; padding-right: 1rem;' :
                        'justify-content: center; padding-left: 0; padding-right: 0;'">
                    <i class="fas fa-comment-dots w-5 h-5"></i>
                    <span x-show="isExpanded" x-cloak class="ml-3 text-sm whitespace-nowrap">Chat</span>
                </a>
            </li>

            <!-- Profile -->
            <li>
                <a href="#" @click.prevent="setActive('profile')"
                    class="flex items-center py-3 transition-all duration-200 hover:bg-gray-100 mx-2 rounded-lg"
                    :class="activeMenu === 'profile' ? 'bg-primary/10 border-l-4 border-primary text-primary' : 'text-gray-600'"
                    :style="isExpanded ? 'padding-left: 1rem; padding-right: 1rem;' :
                        'justify-content: center; padding-left: 0; padding-right: 0;'">
                    <i class="fas fa-user-circle w-5 h-5"></i>
                    <span x-show="isExpanded" x-cloak class="ml-3 text-sm whitespace-nowrap">Profile</span>
                </a>
            </li>

            <!-- Settings -->
            <li>
                <a href="#" @click.prevent="setActive('settings')"
                    class="flex items-center py-3 transition-all duration-200 hover:bg-gray-100 mx-2 rounded-lg"
                    :class="activeMenu === 'settings' ? 'bg-primary/10 border-l-4 border-primary text-primary' :
                        'text-gray-600'"
                    :style="isExpanded ? 'padding-left: 1rem; padding-right: 1rem;' :
                        'justify-content: center; padding-left: 0; padding-right: 0;'">
                    <i class="fas fa-cog w-5 h-5"></i>
                    <span x-show="isExpanded" x-cloak class="ml-3 text-sm whitespace-nowrap">Settings</span>
                </a>
            </li>

            <!-- Help -->
            <li>
                <a href="#" @click.prevent="setActive('help')"
                    class="flex items-center py-3 transition-all duration-200 hover:bg-gray-100 mx-2 rounded-lg"
                    :class="activeMenu === 'help' ? 'bg-primary/10 border-l-4 border-primary text-primary' :
                        'text-gray-600'"
                    :style="isExpanded ? 'padding-left: 1rem; padding-right: 1rem;' :
                        'justify-content: center; padding-left: 0; padding-right: 0;'">
                    <i class="fas fa-question-circle w-5 h-5"></i>
                    <span x-show="isExpanded" x-cloak class="ml-3 text-sm whitespace-nowrap">Help</span>
                </a>
            </li>

            <li class="mt-4">
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" @click="setActive('logout')"
                        class="flex items-center w-full py-3 transition-all duration-200 hover:bg-red-50 hover:text-red-600 mx-2 rounded-lg text-red-500"
                        :style="isExpanded ? 'padding-left: 1rem; padding-right: 1rem;' :
                            'justify-content: center; padding-left: 0; padding-right: 0; width: calc(100% - 1rem);'">
                        <i class="fas fa-sign-out-alt w-5 h-5"></i>
                        <span x-show="isExpanded" x-cloak class="ml-3 text-sm whitespace-nowrap">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- Copyright (hanya tampil saat expanded) -->
    <div x-show="isExpanded" x-transition class="p-4 border-t border-gray-200">
        <p class="text-xs text-gray-400 text-center">&copy; {{ date('Y') }} uangkita</p>
    </div>
</div>
