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
<body class="bg-gray-100">
    <div class="container mx-auto px-4 mt-10">
        <div class="flex justify-center">
            <div class="max-w-8xl w-full rounded overflow-hidden shadow-lg bg-white">
                <div class="px-2 pt-4 pb-2">
                    <a href="{{ url('/') }}" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Back
                    </a>
                </div>
                <div class="flex justify-center mt-4">
                    <img class="max-w-xs h-auto shadow-xl rounded-lg" src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
                </div>
                
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $product['name'] }}</div>
                    <p class="text-gray-700 text-base mb-2 uppercase">
                        Color: {{ $city }}
                    </p>
                    <p class="text-gray-700 text-base">
                        Price: ${{ $product['price'] }}
                    </p>
                </div>

                <!-- Formulir Input Tambahan -->
                <div class="px-6 py-4">
                    <h2 class="font-bold text-lg mb-4">Submit Your Details</h2>
                    <form action="/submit" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Your Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="form-input mt-1 block w-full" placeholder="Your Email" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="form-textarea mt-1 block w-full" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
