<x-app-layout>
    <x-slot:title>
        Aanvraag bewerken
    </x-slot:title>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class=" shadow-md rounded-lg overflow-hidden p-4">
        <form method="POST" action="{{ route('appointment.update', $appointment->id) }}" class="max-w-lg mx-auto">
            <h1 class="text-2xl font-bold mb-4 text-white">Edit Aanvraag</h1>
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-white">Naam</label>
                <input type="text" name="name" value="{{ old('name', $appointment->name) }}" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-white">Email</label>
                <input type="email" name="email" value="{{ old('email', $appointment->email) }}" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-white">Merk</label>
                {{-- <input type="text" name="brand" value="{{ old('brand', $appointment->brand) }}" class="w-full p-2 border rounded"> --}}
                <select name="brand" id="brand" class="w-full p-2 border rounded">
                    <option value=""></option>
                    <option value="Apple" {{ old('brand', $appointment->brand) == 'Apple' ? 'selected' : '' }}>Apple</option>
                    <option value="Microsoft" {{ old('brand', $appointment->brand) == 'Microsoft' ? 'selected' : '' }}>Microsoft</option>
                    <option value="HP" {{ old('brand', $appointment->brand) == 'HP' ? 'selected' : '' }}>HP</option>
                    <option value="Dell" {{ old('brand', $appointment->brand) == 'Dell' ? 'selected' : '' }}>Dell</option>
                    <option value="Acer" {{ old('brand', $appointment->brand) == 'Acer' ? 'selected' : '' }}>Acer</option>
                    <option value="Asus" {{ old('brand', $appointment->brand) == 'Asus' ? 'selected' : '' }}>Asus</option>
                    <option value="Lenovo" {{ old('brand', $appointment->brand) == 'Lenovo' ? 'selected' : '' }}>Lenovo</option>
                    <option value="MSI" {{ old('brand', $appointment->brand) == 'MSI' ? 'selected' : '' }}>MSI</option>
                    <option value="Samsung" {{ old('brand', $appointment->brand) == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-white">Datum</label>
                <input type="text" name="date" id="appointment_date" value="{{ old('date', $appointment->date) }}" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-white">Model nummer</label>
                <input type="text" name="modelNumber" value="{{ old('modelNumber', $appointment->modelNumber) }}" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-white">Bericht</label>
                <textarea name="message" class="w-full p-2 border rounded">{{ old('message', $appointment->message) }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>