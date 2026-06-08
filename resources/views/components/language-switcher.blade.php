<div class="relative" x-data="{ open: false }">
    <button @click="open = !open" class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
        @if (app()->getLocale() == 'id')
            <span class="flag fi fi-id"></span>
            <span class="font-medium">ID</span>
        @else
            <span class="flag fi fi-gb"></span>
            <span class="font-medium">EN</span>
        @endif
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    <div x-show="open" @click.away="open = false"
        class="absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg border overflow-hidden z-50" x-transition>
        <a href="{{ route('lang.switch', 'id') }}"
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50 transition {{ app()->getLocale() == 'id' ? 'bg-gray-100' : '' }}">
             Indonesia
        </a>
        <a href="{{ route('lang.switch', 'en') }}"
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50 transition {{ app()->getLocale() == 'en' ? 'bg-gray-100' : '' }}">
             English
        </a>
    </div>
</div>
