<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>Document</title>
</head>

<body>

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <div class="bg-white">
        <div x-data="{ isFilter: false }">
            <!--
        Mobile filter dialog
  
        Off-canvas filters for mobile, show/hide based on off-canvas filters state.
      -->
            <div x-show="isFilter" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
                <div x-show="isFilter" x-transition:enter="transition-opacity ease-linear duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

                <div class="fixed inset-0 z-40 flex">
                    <!--
            Off-canvas menu, show/hide based on off-canvas menu state.
  
            Entering: "transition ease-in-out duration-300 transform"
              From: "translate-x-full"
              To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
              From: "translate-x-0"
              To: "translate-x-full"
          -->
                    <div x-show="isFilter" x-transition:enter="transition-opacity ease-linear duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition-opacity ease-linear duration-300"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
                        <div class="flex items-center justify-between px-4">
                            <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                            <button type="button" @click="isFilter = !isFilter"
                                class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Filters -->
                        <form class="mt-4 border-t border-gray-200">
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                                <li>
                                    <a href="#" class="block px-2 py-3">MALANG</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3">SURABAYA</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3">YOGYAKARTA</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3">SOLO</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3">SEMARANG</a>
                                </li>
                            </ul>

                            <div x-data="{ isExpand: false }" class="border-t border-gray-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" @click="isExpand = !isExpand"
                                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-mobile-0" aria-expanded="false">
                                        <span class="font-medium text-gray-900">PAKET</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg x-show="!isExpand" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg x-show="isExpand" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div x-show="isExpand" class="pt-6" id="filter-section-mobile-0">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="white"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-0"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">FAMILY PACK</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-1" name="color[]" value="beige"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-1"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">PERSONAL MEALBOX</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-2" name="color[]" value="blue"
                                                type="checkbox" checked
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-2"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">HEALTHY DIET</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-3" name="color[]" value="brown"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-3"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">ADVANCE DIET</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-4" name="color[]" value="green"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-color-4"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">EVENT CATERING</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ isExpand: false }" class="border-t border-gray-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" @click="isExpand = !isExpand"
                                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-mobile-1" aria-expanded="false">
                                        <span class="font-medium text-gray-900">KARBO</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg x-show="!isExpand" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg x-show="isExpand" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div x-show="isExpand" class="pt-6" id="filter-section-mobile-1">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-0" name="category[]"
                                                value="tanpaNasi" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-0"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">TANPA NASI</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-1" name="category[]" value="nasiPutih"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-1"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">NASI PUTIH</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-2" name="category[]" value="nasiMerah"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-2"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">NASI MERAH</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-3" name="category[]"
                                                value="variatif" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-mobile-category-3"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">VARIATIF</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <main class="mx-auto max-w-xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                    {{-- <h1 class="text-4xl font-bold tracking-tight text-gray-900">Senjani</h1> --}}
                    <img class="h-32" src="img/AssetSenjani/LogoSenjaniKitchen.png" alt="Your Company">
                    <div class="flex items-center">
                        <div x-data="{ isOpen: false }" class="relative inline-block text-left">
                            <div>
                                <button type="button" @click="isOpen = !isOpen"
                                    class="group inline-flex justify-center text-xl font-medium text-gray-700 hover:text-gray-900"
                                    id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    Sort
                                    <svg :style="isOpen ? 'transform: rotate(180deg);' : ''" class="-mr-1 ml-1 h-6 w-8 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    
                                </button>
                            </div>

                            <!--
                Dropdown menu, show/hide based on menu state.
  
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
                            <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75 transform"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                tabindex="-1">
                                <div x-data="{ activeItem: 0 }" class="py-1" role="none">
                                    <!--
                                    Active: "bg-gray-100", Not Active: ""
                                
                                    Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                                    -->
                                    <a href="#"
                                        :class="activeItem === 0 ?
                                            'block px-4 py-2 text-sm font-medium text-gray-900 bg-gray-100' :
                                            'block px-4 py-2 text-sm text-gray-500'"
                                        @click.prevent="activeItem = 0" role="menuitem" tabindex="-1"
                                        id="menu-item-0">Most Popular</a>

                                    <a href="#"
                                        :class="activeItem === 1 ?
                                            'block px-4 py-2 text-sm font-medium text-gray-900 bg-gray-100' :
                                            'block px-4 py-2 text-sm text-gray-500'"
                                        @click.prevent="activeItem = 1" role="menuitem" tabindex="-1"
                                        id="menu-item-1">Best Rating</a>

                                    <a href="#"
                                        :class="activeItem === 2 ?
                                            'block px-4 py-2 text-sm font-medium text-gray-900 bg-gray-100' :
                                            'block px-4 py-2 text-sm text-gray-500'"
                                        @click.prevent="activeItem = 2" role="menuitem" tabindex="-1"
                                        id="menu-item-2">Newest</a>

                                    <a href="#"
                                        :class="activeItem === 3 ?
                                            'block px-4 py-2 text-sm font-medium text-gray-900 bg-gray-100' :
                                            'block px-4 py-2 text-sm text-gray-500'"
                                        @click.prevent="activeItem = 3" role="menuitem" tabindex="-1"
                                        id="menu-item-3">Price: Low to High</a>

                                    <a href="#"
                                        :class="activeItem === 4 ?
                                            'block px-4 py-2 text-sm font-medium text-gray-900 bg-gray-100' :
                                            'block px-4 py-2 text-sm text-gray-500'"
                                        @click.prevent="activeItem = 4" role="menuitem" tabindex="-1"
                                        id="menu-item-4">Price: High to Low</a>
                                </div>

                            </div>
                        </div>

                        <button type="button" @click="isFilter = !isFilter"
                            class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                            <span class="sr-only">Filters</span>
                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <section aria-labelledby="products-heading" class="pb-24 pt-6">
                    <h2 id="products-heading" class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                        <!-- Filters -->
                        <form class="hidden lg:block">
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list"
                                class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                                <li>
                                    <a href="#">MALANG</a>
                                </li>
                                <li>
                                    <a href="#">SURABAYA</a>
                                </li>
                                <li>
                                    <a href="#">YOGYAKARTA</a>
                                </li>
                                <li>
                                    <a href="#">SOLO</a>
                                </li>
                                <li>
                                    <a href="#">SEMARANG</a>
                                </li>
                            </ul>

                            <div x-data="{ isExpand: false }" class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" @click="isExpand = !isExpand"
                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-0" aria-expanded="false">
                                        <span class="font-medium text-gray-900">PAKET</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg x-show="!isExpand" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg x-show="isExpand" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div x-show="isExpand" class="pt-6" id="filter-section-0">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-0"
                                                class="ml-3 text-sm text-gray-600">FAMILY</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-1" class="ml-3 text-sm text-gray-600">PERSONAL
                                                MEALBOX</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox"
                                                checked
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-2" class="ml-3 text-sm text-gray-600">HEALTHY
                                                DIET</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-3" class="ml-3 text-sm text-gray-600">ADVANCE
                                                DIET</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-color-4" name="color[]" value="green" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-4" class="ml-3 text-sm text-gray-600">EVENT
                                                CATERING</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ isExpand: false }" class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" @click="isExpand= !isExpand"
                                        class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-1" aria-expanded="false">
                                        <span class="font-medium text-gray-900">KARBO</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg x-show="!isExpand" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg x-show="isExpand" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div x-show="isExpand" class="pt-6" id="filter-section-1">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <input id="filter-category-0" name="category[]" value="tanpaNasi"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-0" class="ml-3 text-sm text-gray-600">TANPA
                                                NASI</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-1" name="category[]" value="nasiPutih"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-1" class="ml-3 text-sm text-gray-600">NASI
                                                PUTIH</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-2" name="category[]" value="nasiMerah"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-2" class="ml-3 text-sm text-gray-600">NASI
                                                MERAH</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-category-3" name="category[]" value="variatif"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-category-3"
                                                class="ml-3 text-sm text-gray-600">VARIATIF</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <!-- Your content -->

                            <div class="bg-white">
                                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-2 lg:max-w-7xl lg:px-12">
                                    {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> --}}

                                    <div id="product-container"
                                        class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                                        <div class="product" data-categories="variatif">
                                            <div class="group relative">
                                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                                                    <img src="img/AssetSenjani/11.Snack.jpg" alt="Front of men's Basic Tee in black."
                                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                                </div>
                                                <div class="mt-4 flex justify-between">
                                                    <div>
                                                        <h3 class="text-sm text-gray-700">
                                                            <a href="#">
                                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                                Basic Tee
                                                            </a>
                                                        </h3>
                                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                                    </div>
                                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product" data-categories="tanpaNasi">
                                            <div class="group relative">
                                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                                                    <img src="img/AssetSenjani/1.Tanpa.jpg" alt="Front of men's Basic Tee in black."
                                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                                </div>
                                                <div class="mt-4 flex justify-between">
                                                    <div>
                                                        <h3 class="text-sm text-gray-700">
                                                            <a href="#">
                                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                                Basic Tee
                                                            </a>
                                                        </h3>
                                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                                    </div>
                                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product" data-categories="nasiMerah">
                                            <div class="group relative">
                                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                                                    <img src="img/AssetSenjani/3.Merah.jpg" alt="Front of men's Basic Tee in black."
                                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                                </div>
                                                <div class="mt-4 flex justify-between">
                                                    <div>
                                                        <h3 class="text-sm text-gray-700">
                                                            <a href="#">
                                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                                Basic Tee
                                                            </a>
                                                        </h3>
                                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                                    </div>
                                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product" data-categories="nasiPutih">
                                            <div class="group relative">
                                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                                                    <img src="img/AssetSenjani/2.Putih.jpg" alt="Front of men's Basic Tee in black."
                                                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                                </div>
                                                <div class="mt-4 flex justify-between">
                                                    <div>
                                                        <h3 class="text-sm text-gray-700">
                                                            <a href="#">
                                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                                Basic Tee
                                                            </a>
                                                        </h3>
                                                        <p class="mt-1 text-sm text-gray-500">Black</p>
                                                    </div>
                                                    <p class="text-sm font-medium text-gray-900">$35</p>
                                                </div>
                                            </div>
                                        </div>

                                        
                                
                                        <!-- More products... -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

<script>
    document.querySelectorAll('input[name="category[]"]').forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        filterProducts();
    });
});

function filterProducts() {
    let selectedCategories = [];
    document.querySelectorAll('input[name="category[]"]:checked').forEach(function (checkbox) {
        selectedCategories.push(checkbox.value);
    });

    document.querySelectorAll('#product-container .product').forEach(function (product) {
        const productCategories = product.getAttribute('data-categories').split(' ');
        if (selectedCategories.length === 0 || selectedCategories.some(category => productCategories.includes(category))) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

// Inisialisasi filter saat halaman dimuat
filterProducts();


</script>
</body>

</html>
