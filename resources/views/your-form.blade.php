<x-app-layout>
    <x-slot:title>
        Aanvraag doen
    </x-slot:title>
    <h1 class="text-2xl font-bold mb-4">Submit Your Information</h1>

    <form method="POST" action="{{ route('yourForm.store') }}" class="max-w-lg mx-auto">
        @csrf <!-- Protects from CSRF attacks -->

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Name</label>
            <input type="text" name="name" id="name" class="border p-2 rounded w-full" required>
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Email</label>
            <input type="email" name="email" id="email" class="border p-2 rounded w-full" required>
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
    </form>
    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-2 rounded">
        {{ session('success') }}
    </div>
    @endif
</x-app-layout>
