<x-app-layout>
    <x-slot:title>Home</x-slot>

        <div class="flex flex-col h-screen overflow-hidden">
            <!-- Main Section -->
            <main class="flex justify-center items-center flex-grow overflow-y-auto" style="background-image: url('{{ asset('images/40gp-uneedit5.jpg') }}'); background-size: cover; background-position: center;">
                <div class="flex flex-col space-y-4 items-center text-center">
                    <!-- Your main content here -->
                    <div>
                        <img src="{{ asset('images/cropped-logo UNEED-IT.png') }}" alt="Application Logo" class="h-40">
                    </div>

                    <div class="flex justify-center space-x-16">
                        <!-- Example content -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('images/icons/location.svg') }}" class="w-40 h-auto">
                            <span class="text-white mt-2">Location</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('images/icons/phone.svg') }}" class="w-40 h-auto fill-red-500">
                            <span class="text-white mt-2">Phone</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('images/icons/clock.svg') }}" class="w-40 h-auto">
                            <span class="text-white mt-2">Opening Hours</span>
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

            <!-- Footer -->
            <footer class="bg-gray-800 text-white py-2 fixed bottom-0 w-full">
                <div class="container mx-auto flex justify-between px-4">
                    <!-- Example footer content -->
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('images/icons/location.svg') }}" class="w-8 h-auto">
                        <div>
                            <p>ZUIDBAAN 514, 2841MD</p>
                            <p>MOORDRECHT</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('images/icons/phone.svg') }}" class="w-8 h-auto">
                        <div>
                            <p>SERVICENUMMER: +316 30 985 409 </p>
                            <p>KANTOOR: +3118 28 202 18 </p>
                            <p>(BEREIKBAAR VAN 09:00-18:00)</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('images/icons/clock.svg') }}" class="w-8 h-auto">
                        <div>
                            <p>MA T/M VRIJ, 09:00 - 23:00</p>
                            <p>TELEFONISCH BEREIKBAAR</p>
                            <p>VOOR ABONNEMENTHOUDERS</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
</x-app-layout>
