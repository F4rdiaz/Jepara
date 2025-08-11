@props(['label'])

<div x-data="{ open: false }" class="relative">
    <!-- Tombol -->
    <button 
        @click="open = !open" 
        @click.away="open = false"
        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-200 hover:text-red-500 focus:outline-none"
    >
        {{ $label }}
        <svg class="ms-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" 
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                clip-rule="evenodd" />
        </svg>
    </button>

    <!-- Dropdown -->
    <div 
        x-show="open" 
        x-transition 
        class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50"
        style="display: none;"
    >
        {{ $slot }}
    </div>
</div>
