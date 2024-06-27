<div class="flex justify-center items-center h-screen -mt-16">
  @if (session()->has('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif

  <form wire:submit.prevent="submit" class="w-full max-w-lg">
      @csrf
      <div class="flex flex-wrap -mx-3 mb-4">

          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                  Naam
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="name" type="text" placeholder="John" wire:model="name">
              @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
          </div>

          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                  Email
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="text" placeholder="example@uneedit.nl" wire:model="email">
              @error('email') <span class="error text-red-500">{{ $message }}</span> @enderror
          </div>

      </div>

      <div>

        <div class="mb-4">
            <label for="selectOption" class="block text-gray-700">Merk</label>
            <select id="selectOption" wire:model="selectedOption" class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @foreach($options as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
            </select>
            @error('selectedOption') <span class="error text-red-500">{{ $message }}</span> @enderror
          </div>

      </div>

      <div>
          
            <div class="mb-4">
                <label for="modelNumber" class="block text-gray-700">Modelnummer</label>
                <input type="text" id="modelNumber" wire:model="modelNumber" class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('modelNumber') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>

      </div>
      
      <div class="flex flex-wrap -mx-3 mb-6">

          <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                  Bericht
              </label>
              <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="message" wire:model="message" placeholder="Beschrijf het probleem"></textarea>
              @error('message') <span class="error text-red-500">{{ $message }}</span> @enderror
          </div>

      </div>
      <x-primary-button>
          Aanvraag versturen
      </x-primary-button>
  </form>
</div>