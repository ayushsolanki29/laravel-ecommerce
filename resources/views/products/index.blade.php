<x-layout :title="$title">
    <section class="max-w-3xl mx-auto text-center">
        <h1 class="text-4xl font-extrabold mb-4 tracking-tight text-white">
            Explore Our Latest Collection
        </h1>
        <p class="text-lg text-gray-400 leading-relaxed mb-6 max-w-2xl">
            Discover handpicked products designed with style, comfort, and quality in mind.
            Whether you’re upgrading your wardrobe or finding the perfect gift,
            we’ve got something special for everyone.
        </p>
<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($products as $prod)
        <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:scale-105 transform transition duration-300">
            <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-lg font-semibold">{{ $prod['name'] }}</h2>
                    <span class="bg-indigo-500 text-white text-xs px-3 py-1 rounded-full">₹{{ $prod['price'] }}</span>
                </div>
                <p class="text-gray-400 text-sm mb-4">{{ $prod['description'] }}</p>
                <a href="/products/{{ $prod['id'] }}" class="block text-center bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 rounded-lg transition">
                    View Product
                </a>
            </div>
        </div>
    @endforeach
</div>

<!-- Pagination -->
<div class="mt-8 flex justify-center space-x-2">
    @for ($i = 1; $i <= ceil($total / $perPage); $i++)
        <a href="?page={{ $i }}" 
           class="px-4 py-2 rounded-lg {{ $i == $currentPage ? 'bg-indigo-500 text-white' : 'bg-gray-700 text-gray-300 hover:bg-gray-600' }}">
            {{ $i }}
        </a>
    @endfor
</div>


    </section>
</x-layout>
