<x-app-layout>
    <x-slot:title>
        Aanvragen
    </x-slot:title>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4 text-white">Openstaande aanvragen</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-bold uppercase text-sm">Naam</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-bold uppercase text-sm">Email</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-bold uppercase text-sm">Merk</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-bold uppercase text-sm">Model nummer</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-bold uppercase text-sm">Bericht</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-bold uppercase text-sm">Verwijder</th>
                        <th class="py-2 px-4 bg-gray-200 text-gray-600 font-bold uppercase text-sm">Aanpassen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aanvraag as $aanv)
                    <tr class="border-b border-gray-200">
                        <td class="py-2 px-4 text-center">{{ $aanv['name'] }}</td>
                        <td class="py-2 px-4 text-center">{{ $aanv['email'] }}</td>
                        <td class="py-2 px-4 text-center">{{ $aanv['option'] }}</td>
                        <td class="py-2 px-4 text-center">{{ $aanv['modelNumber'] }}</td>
                        <td class="py-2 px-4 text-center">{{ $aanv['message'] }}</td>
                        <td class="py-2 px-4 text-center">
                            <form action="{{ route('aanvragen.destroy', $aanv['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this aanvraag?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                            </form>
                        </td>
                        <td class="py-2 px-4 text-center">
                            <a href="{{ route('aanvragen.edit', $aanv['id']) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>