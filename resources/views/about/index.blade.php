<x-layout :title="$title">
    <section class="max-w-4xl mx-auto text-center">
        <!-- Heading -->
        <h1 class="text-4xl font-bold mb-4">About Our Shop</h1>

        <!-- Intro Paragraph -->
        <p class="text-lg text-gray-400 leading-relaxed mb-6">
            At <span class="text-indigo-400 font-semibold">My Laravel Shop</span>, we believe in more than just selling products —
            we believe in delivering quality, style, and value to every customer. Whether you're shopping for fashion, accessories,
            or everyday essentials, our goal is to make your shopping experience smooth, enjoyable, and memorable.
        </p>

        <!-- Features -->
        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">🚀 Fast Delivery</h2>
                <p class="text-gray-400 text-sm">
                    We process and ship your orders quickly, so you can enjoy your new products without the wait.
                </p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">🎨 Stylish Designs</h2>
                <p class="text-gray-400 text-sm">
                    Every item in our store is carefully selected for its quality, comfort, and modern appeal.
                </p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">🔒 Secure Shopping</h2>
                <p class="text-gray-400 text-sm">
                    Your privacy and payment details are always safe with our secure checkout process.
                </p>
            </div>
        </div>
    </section>
</x-layout>
