<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div id="productList"
    class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-3 lg:grid-cols-4 xl:gap-x-8">

    <div class="product" data-price="30" data-paket="family personal healthy advance event" data-karbo="variatif">
        <div class="group relative">
            <div
                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                <img src="img/AssetSenjani/11.Snack.jpg"
                    alt="Front of men's Basic Tee in black."
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a>
                            <span aria-hidden="true"
                                class="absolute inset-0"></span>
                            Basic Tee
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Black</p>
                </div>
                <p class="text-sm font-medium text-gray-900">$30</p>
            </div>
        </div>
    </div>

    <div class="product" x-on:click="window.location.href='{{ route('product.show', ['slug' => 'tanpa', 'city' => 'surabaya']) }}'" data-price="25" data-paket="family personal healthy advance event" data-karbo="tanpaNasi">
        <div class="group relative">
            <div
                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                <img src="img/AssetSenjani/1.Tanpa.jpg"
                    alt="Front of men's Basic Tee in black."
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a>
                            <span aria-hidden="true"
                                class="absolute inset-0"></span>
                            Tanpa Nasi
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">1 Kotak</p>
                </div>
                <p class="text-sm font-medium text-gray-900">Rp.10000</p>
            </div>
        </div>
    </div>

    <div class="product" data-price="45" data-paket=" personal healthy advance event" data-karbo="nasiMerah">
        <div class="group relative">
            <div
                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                <img src="img/AssetSenjani/3.Merah.jpg"
                    alt="Front of men's Basic Tee in black."
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a>
                            <span aria-hidden="true"
                                class="absolute inset-0"></span>
                            Basic Tee
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Black</p>
                </div>
                <p class="text-sm font-medium text-gray-900">$45</p>
            </div>
        </div>
    </div>

    <div class="product" data-price="50" data-paket="family personal healthy advance event" data-karbo="nasiPutih">
        <div class="group relative">
            <div
                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-90">
                <img src="img/AssetSenjani/2.Putih.jpg"
                    alt="Front of men's Basic Tee in black."
                    class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a>
                            <span aria-hidden="true"
                                class="absolute inset-0"></span>
                            Basic Tee
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Black</p>
                </div>
                <p class="text-sm font-medium text-gray-900">$50</p>
            </div>
        </div>
    </div>

    <!-- More products... -->


</div>
</x-layout>