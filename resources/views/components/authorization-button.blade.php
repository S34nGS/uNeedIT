<a href="{{ $href }}" {{ $attributes->merge(['class' => 'bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full']) }}>
    {{ $slot }}
</a>