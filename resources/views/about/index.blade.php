<x-layout :title="$title">
    <section class="max-w-3xl mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">About Us</h1>
        <p class="text-lg text-gray-400 leading-relaxed mb-6">
            Welcome to our Laravel application! We’re passionate about building modern, fast, and
            user-friendly web solutions. Our goal is to provide you with a smooth experience, from
            the first click to the last interaction.
        </p>

        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">🚀 Fast</h2>
                <p class="text-gray-400 text-sm">
                    Optimized for performance so you get lightning-fast load times.
                </p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">🎨 Modern</h2>
                <p class="text-gray-400 text-sm">
                    Sleek, modern UI designed with Tailwind CSS for a premium feel.
                </p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-semibold mb-2">🔒 Secure</h2>
                <p class="text-gray-400 text-sm">
                    Built with Laravel’s robust security features to protect your data.
                </p>
            </div>
        </div>
    </section>
</x-layout>
