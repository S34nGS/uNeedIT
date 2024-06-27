<x-app-layout>
    <x-slot:title>
        Bezorgdiensten
    </x-slot:title>
    <div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
            <h2 class="text-2xl font-bold text-gray-900">Collections</h2>
            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">

              <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                    <img src="{{ asset('images/UPS-Logo.png') }}" class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                  <a href="#">
                    <span class="absolute inset-0"></span>UPS
                  </a>
                </h3>
              </div>

              <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                    <img src="{{ asset('images/DHL-Logo.png') }}" class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                  <a href="#">
                    <span class="absolute inset-0"></span>DHL
                  </a>
                </h3>
              </div>

              <div class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                    <img src="{{ asset('images/homerr_logo.png') }}" class="h-full w-full object-cover object-center">
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                  <a href="#">
                    <span class="absolute inset-0"></span>Homerr
                  </a>
                </h3>
              </div>

            </div>
          </div>
        </div>
      </div>
</x-app-layout>