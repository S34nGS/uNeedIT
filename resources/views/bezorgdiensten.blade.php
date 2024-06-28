<x-app-layout>
    <x-slot:title>
        Bezorgdiensten
    </x-slot:title>

      <div class="container mx-auto p-6">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
              <h1 class="text-2xl font-bold mb-4 text-white">Onze bezorgdiensten</h1>
              <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">

                <div class="group relative">
                  <div class="relative h-80 w-full overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                      <img src="{{ asset('images/UPS-Logo.png') }}" class="h-56 object-cover object-center">
                  </div>
                </div>

                <div class="group relative">
                  <div class="relative h-80 w-full overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                      <img src="{{ asset('images/DHL-Logo.png') }}" class="h-56 object-cover object-center">
                  </div>
                </div>

                <div class="group relative">
                  <div class="relative h-80 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                      <img src="{{ asset('images/homerr_logo.png') }}" class="h-56 object-cover object-center">
                  </div>
                </div>

              </div>
            </div>
          </div>
      </div>
</x-app-layout>