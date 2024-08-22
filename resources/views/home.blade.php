<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex justify-center items-center space-x-8 py-8 min-h-screen">
        <!-- First Icon and Text -->
        <div class="flex flex-col items-center text-center">
            <div class="p-4 rounded-full bg-gray-200">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 3V9a9 9 0 10-18 0v10l3-3V9a6 6 0 1112 0v8a2 2 0 01-2 2H9"></path>
                </svg>
            </div>
            <p class="mt-4 text-gray-600">Menghemat waktu Anda 12.5 jam/pekan untuk memasak.</p>
        </div>
    
        <!-- Second Icon and Text -->
        <div class="flex flex-col items-center text-center p-4 ">
            <div class="p-4 rounded-full bg-gray-200">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657A8 8 0 118.343 7.343m3.535 4.95a4 4 0 115.657 5.657"></path>
                </svg>
            </div>
            <p class="mt-4 text-gray-600">Diantar kapan saja sesuai kebutuhan Anda. Free ongkir!</p>
        </div>
    
        <!-- Third Icon and Text -->
        <div class="flex flex-col items-center text-center">
            <div class="p-4 rounded-full bg-gray-200">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 12a7.5 7.5 0 0115 0c0 6-7.5 10.5-7.5 10.5S4.5 18 4.5 12z"></path>
                </svg>
            </div>
            <p class="mt-4 text-gray-600">Rasakan tubuh yang lebih sehat & terhindar dari berbagai penyakit.</p>
        </div>
    </div>
    
</x-layout>