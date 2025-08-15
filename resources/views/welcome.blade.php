<x-layout :title="$title">
    <div class="flex flex-col items-center justify-center min-h-screen text-center px-4 bg-gray-900">
        <!-- Title -->
        <h1 class="text-5xl md:text-6xl font-bold mb-4">
            Discover <span class="text-indigo-400">Your Next Favorite Product</span>
        </h1>

        <!-- Subtitle -->
        <p class="text-lg text-gray-400 mb-8 max-w-2xl">
            Explore our curated collection of stylish, high-quality products designed for comfort, durability, 
            and everyday use — all at prices you’ll love.
        </p>

        <!-- Buttons -->
        <div class="flex space-x-4">
            <a href="{{ url('/products') }}"
                class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition">
                🛍 Shop Now
            </a>
            <a href="{{ url('/about') }}"
                class="border border-gray-500 hover:border-indigo-400 text-gray-300 hover:text-indigo-400 font-semibold px-6 py-3 rounded-lg transition">
                Learn More
            </a>
        </div>
    </div>
</x-layout>
