<x-app-layout>
    <x-slot:title>Home</x-slot>

        <div class="flex flex-col h-screen overflow-hidden">
            <!-- Main Section -->
            <main class="flex justify-center items-center flex-grow overflow-y-auto" style="background-image: url('{{ asset('images/40gp-uneedit5.jpg') }}'); background-size: cover; background-position: center;">
                <div class="flex flex-col space-y-4 items-center text-center bg-gradient-to-r from-black to-transparent p-8 rounded-lg">
                    <!-- Your main content here -->
                    <div class="bg-white bg-opacity-75 p-4 rounded shadow-md">
                        <img src="{{ asset('images/cropped-logo UNEED-IT.png') }}" alt="Application Logo" class="h-40">
                    </div>

                    <div class="flex justify-center space-x-16">
                        <!-- Example content -->
                        <div class="flex flex-col items-center text-white">
                            <img src="{{ asset('images/icons/location.svg') }}" class="w-40 h-auto">
                            <span class="mt-2">Location</span>
                            <div>
                                <p>ZUIDBAAN 514, 2841MD</p>
                                <p>MOORDRECHT</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center text-white">
                            <img src="{{ asset('images/icons/phone.svg') }}" class="w-40 h-auto fill-red-500">
                            <span class="mt-2">Phone</span>
                            <div>
                                <p>SERVICENUMMER: +31 6 30 985 409 </p>
                                <p>KANTOOR: +31 18 28 202 18 </p>
                                <p>(BEREIKBAAR VAN 09:00-18:00)</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center text-white">
                            <img src="{{ asset('images/icons/clock.svg') }}" class="w-40 h-auto">
                            <span class="mt-2">Opening Hours</span>
                            <div>
                                <p>MA T/M VRIJ, 09:00 - 23:00</p>
                                <p>TELEFONISCH BEREIKBAAR</p>
                                <p>VOOR ABONNEMENTHOUDERS</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center mt-4">
                    <span class="text-white">
                        voor al uw reparaties kunt u terecht bij
                        <span class="text-red-500">Uneed-</span><span class="text-blue-500">IT</span>
                    </span>
                    </div>
                </div>
            </main>
        </div>
</x-app-layout>
