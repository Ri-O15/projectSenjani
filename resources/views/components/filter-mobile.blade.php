<div x-show="isFilter" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
    <div x-show="isFilter" x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

    <div class="fixed inset-0 z-40 flex">
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
                        <a href="/malang" class="block px-2 py-3">MALANG</a>
                    </li>
                    <li>
                        <a href="/surabaya" class="block px-2 py-3">SURABAYA</a>
                    </li>
                    <li>
                        <a href="/yogyakarta" class="block px-2 py-3">YOGYAKARTA</a>
                    </li>
                    <li>
                        <a href="/solo" class="block px-2 py-3">SOLO</a>
                    </li>
                    <li>
                        <a href="/semarang" class="block px-2 py-3">SEMARANG</a>
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
                                <input id="filter-mobile-paket-0" name="paket[]" value="family"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-paket-0"
                                    class="ml-3 min-w-0 flex-1 text-gray-500">FAMILY PACK</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-mobile-paket-1" name="paket[]" value="personal"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-paket-1"
                                    class="ml-3 min-w-0 flex-1 text-gray-500">PERSONAL MEALBOX</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-mobile-paket-2" name="paket[]" value="healthy"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-paket-2"
                                    class="ml-3 min-w-0 flex-1 text-gray-500">HEALTHY DIET</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-mobile-paket-3" name="paket[]" value="advance"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-paket-3"
                                    class="ml-3 min-w-0 flex-1 text-gray-500">ADVANCE DIET</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-mobile-paket-4" name="paket[]" value="event"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-paket-4"
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
                                <input id="filter-mobile-karbo-0" name="karbo[]" value="tanpaNasi"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-karbo-0"
                                    class="ml-3 min-w-0 flex-1 text-gray-500">TANPA NASI</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-mobile-karbo-1" name="karbo[]" value="nasiPutih"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-karbo-1"
                                    class="ml-3 min-w-0 flex-1 text-gray-500">NASI PUTIH</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-mobile-karbo-2" name="karbo[]" value="nasiMerah"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-karbo-2"
                                    class="ml-3 min-w-0 flex-1 text-gray-500">NASI MERAH</label>
                            </div>
                            <div class="flex items-center">
                                <input id="filter-mobile-karbo-3" name="karbo[]" value="variatif"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="filter-mobile-karbo-3"
                                    class="ml-3 min-w-0 flex-1 text-gray-500">VARIATIF</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>