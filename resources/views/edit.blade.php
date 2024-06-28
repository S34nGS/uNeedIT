<x-app-layout>
    <x-slot:title>
        Edit Aanvraag
    </x-slot:title>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4 text-white">Edit Aanvraag</h1>
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
            <form action="{{ route('aanvragen.update', $aanvraag->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700">Naam</label>
                    <input type="text" name="name" value="{{ old('name', $aanvraag->name) }}" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ old('email', $aanvraag->email) }}" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Merk</label>
                    <input type="text" name="option" value="{{ old('option', $aanvraag->option) }}" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Model nummer</label>
                    <input type="text" name="modelNumber" value="{{ old('modelNumber', $aanvraag->modelNumber) }}" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Bericht</label>
                    <textarea name="message" class="w-full p-2 border rounded">{{ old('message', $aanvraag->message) }}</textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>
