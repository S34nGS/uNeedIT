<x-app-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <div class="flex justify-center items-center mt-60">
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('images/cropped-logo UNEED-IT.png') }}" alt="Application Logo" class="h-40">
                {{-- <div class="text-center">
                    <span class="text-white">voor al uw reparaties kunt u terecht bij </span>
                    <span class="text-red-500">Uneed-</span>
                    <span class="text-blue-500">it</span>
                </div> --}}
            </div>

            <div class="flex">
                <div class="w-1/3 px-16 flex justify-center">
                    <img src="{{ asset('images/icons/location.svg') }}" class="w-40 h-auto">
                </div>

                <div class="w-1/3 px-16 flex justify-center">
                    <img src="{{ asset('images/icons/phone.svg') }}" class="w-40 h-auto fill-red-500">
                </div>

                <div class="w-1/3 px-16 flex justify-center">
                    <img src="{{ asset('images/icons/clock.svg') }}" class="w-40 h-auto">
                </div>

            </div>
        </div>
    </div>
</x-app-layout>