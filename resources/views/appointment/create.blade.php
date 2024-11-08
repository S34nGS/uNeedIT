<x-app-layout>
    <x-slot:title>
        Aanvraag doen
    </x-slot:title>

    <form method="POST" action="{{ route('appointment.store') }}" class="max-w-lg mx-auto">
        @csrf
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-2xl font-bold mb-4 text-white">Afspraak maken</h1>

        <div class="flex flex-wrap mb-4">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Naam</label>
                <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="John" />
            </div>

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="example@uneedit.nl" />
            </div>
        </div>

        <div class="mb-5">
            <div>
                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merk</label>
                <select name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value=""></option>
                    <option value="Canada">Apple</option>
                    <option value="France">Microsoft</option>
                    <option value="Germany">HP</option>
                    <option value="Germany">Dell</option>
                    <option value="Germany">Acer</option>
                    <option value="Germany">Asus</option>
                    <option value="Germany">Lenovo</option>
                    <option value="Germany">MSI</option>
                    <option value="Germany">Samsung</option>
                </select>
            </div>

            <div>
                <label for="modelNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelnummer</label>
                <input type="text" name="modelNumber" id="modelNumber" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
            </div>
        </div>

        <div class="mb-5">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Datum</label>
            <input type="text" name="date" id="appointment_date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Selecteer een datum" />
        </div>

        <div class="mb-5">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bericht</label>
            <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Beschrijf het probleem"></textarea>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aanvraag versturen</button>
    </form>
</x-app-layout>
