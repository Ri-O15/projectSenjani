<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex justify-center items-center space-x-8 py-8 min-h-screen">
        <!-- First Icon and Text -->
        <div class="flex flex-col items-center text-center">
            <div class="p-4 rounded-full bg-gray-200">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=""></path>
                </svg>
            </div>
            <p class="mt-4 text-gray-600">Menghemat waktu Anda 12.5 jam/pekan untuk memasak.</p>
        </div>
    
        <!-- Second Icon and Text -->
        <div class="flex flex-col items-center text-center p-4 ">
            <div class="p-4 rounded-full bg-gray-200">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=""></path>
                </svg>
            </div>
            <p class="mt-4 text-gray-600">Diantar kapan saja sesuai kebutuhan Anda. Free ongkir!</p>
        </div>
    
        <!-- Third Icon and Text -->
        <div class="flex flex-col items-center text-center">
            <div class="p-4 rounded-full bg-gray-200">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=""></path>
                </svg>
            </div>
            <p class="mt-4 text-gray-600">Rasakan tubuh yang lebih sehat & terhindar dari berbagai penyakit.</p>
        </div>
    </div>
    
</x-layout>