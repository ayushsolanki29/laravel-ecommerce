<x-layout :title="$title">
    <section class="max-w-4xl mx-auto px-4 py-8">
        <div class="bg-gray-800 rounded-2xl shadow-lg overflow-hidden md:flex">

            <!-- Product Image -->
            <div class="md:w-1/2 bg-gray-700 flex items-center justify-center p-6">
                <img src="{{ $product['image'] }}" 
                     alt="{{ $product['name'] }}"
                     class="rounded-lg shadow-lg max-h-96 w-full object-cover">
            </div>

            <!-- Product Details -->
            <div class="md:w-1/2 p-8 flex flex-col justify-between">
                <div>
                    <h1 class="text-3xl font-bold mb-2">{{ $product['name'] }}</h1>
                    <span class="text-indigo-400 text-xl font-semibold">₹{{ $product['price'] }}</span>

                    <p class="text-gray-400 mt-4 leading-relaxed">
                        {{ $product['description'] }}
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 flex space-x-4">
                    <a href="#"
                        class="flex-1 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 rounded-lg shadow-lg transition text-center">
                        Add to Cart
                    </a>
                    <a href="{{ url('/products') }}"
                        class="flex-1 border border-gray-500 hover:border-indigo-400 text-gray-300 hover:text-indigo-400 font-semibold py-3 rounded-lg transition text-center">
                        Back to Shop
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
