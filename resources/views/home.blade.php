<x-app-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <main class="relative flex flex-col items-center">
        <div class="absolute top-1/2 left-1/2 text-center">
            <img src="{{ asset('images/cropped-logo UNEED-IT.png') }}"  alt="Application Logo">
            <span class="text-white">voor al uw reparaties kunt u terecht bij </span><span class="text-red-500">Uneed-</span><span  class="text-blue-500">it</span>
        </div>
    </main>
</x-app-layout>