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

    <div class="bg-white">
        <div x-data="{ isFilter: false }">
                <x-sort></x-sort>
            <main class="mx-auto max-w-8xl px-4 sm:px-6 lg:px-4 pt-24">
                <section aria-labelledby="products-heading" class="pb-24 pt-20">
                    <header><h2 id="products-heading" class="sr-only">Products</h2></header>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">

                        <!-- Filters -->
                        <x-filter-desktop></x-filter-desktop>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">

                            <!-- Your content -->

                            <div class="bg-white">
                                <div class="ml-2 max-w-4xl px-4 py-16 sm:px-6 sm:py-2 lg:max-w-7xl lg:px-12">
                                    <x-header>{{ $title }}</x-header>
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <x-footer></x-footer>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>
