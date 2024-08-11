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
                    <svg :style="isOpen ? 'transform: rotate(180deg);' : ''"
                        class="-mr-1 ml-1 h-6 w-8 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>


                </button>
            </div>


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
                    <a href="#"
                        :class="activeItem === 0 ?
                            'block px-4 py-2 text-sm font-medium text-gray-900 bg-gray-100' :
                            'block px-4 py-2 text-sm text-gray-500'"
                        @click.prevent="activeItem = 0" role="menuitem" tabindex="-1"
                        id="menu-item-0">Price: Low to High</a>

                    <a href="#"
                        :class="activeItem === 1 ?
                            'block px-4 py-2 text-sm font-medium text-gray-900 bg-gray-100' :
                            'block px-4 py-2 text-sm text-gray-500'"
                        @click.prevent="activeItem = 1" role="menuitem" tabindex="-1"
                        id="menu-item-1">Price: High to Low</a>

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