<x-app-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <div class="flex justify-center items-center mt-60">
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('images/cropped-logo UNEED-IT.png') }}" alt="Application Logo" class="h-40">
            </div>

            <div class="flex justify-center space-x-16">
                <div class="flex flex-col items-center text-white">
                    <img src="{{ asset('images/icons/location.svg') }}" class="w-32 h-auto">
                    <span class="mt-2">Locatie</span>
                    <div class="text-base">
                        <p>ZUIDBAAN 514, 2841MD</p>
                        <p>MOORDRECHT</p>
                    </div>
                </div>
                <div class="flex flex-col items-center text-white">
                    <img src="{{ asset('images/icons/phone.svg') }}" class="w-32 h-auto fill-red-500">
                    <span class="mt-2">Telefoon</span>
                    <div class="text-base">
                        <p>SERVICENUMMER: +31 6 30 985 409 </p>
                        <p>KANTOOR: +31 18 28 202 18 </p>
                        <p>(BEREIKBAAR VAN 09:00-18:00)</p>
                    </div>
                </div>
                <div class="flex flex-col items-center text-white">
                    <img src="{{ asset('images/icons/clock.svg') }}" class="w-32 h-auto">
                    <span class="mt-2">Openingstijden</span>
                    <div class="text-base">
                        <p>MA T/M VRIJ, 09:00 - 23:00</p>
                        <p>TELEFONISCH BEREIKBAAR</p>
                        <p>VOOR ABONNEMENTHOUDERS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>