<x-layout  :title="$title">
    <div class="flex flex-col items-center justify-center min-h-screen text-center px-4">
        <!-- Title -->
        <h1 class="text-5xl md:text-6xl font-bold mb-4">
            Welcome to <span class="text-indigo-400">My Laravel App</span>
        </h1>

        <!-- Subtitle -->
        <p class="text-lg text-gray-400 mb-8 max-w-xl">
            This is your new Laravel application styled with Tailwind CSS.
            Start building something amazing today!
        </p>

        <!-- Buttons -->
        <div class="flex space-x-4">
            <a href="{{ url('/about') }}"
                class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition">
                Learn More
            </a>
            <a href="{{ url('/contact') }}"
                class="border border-gray-500 hover:border-indigo-400 text-gray-300 hover:text-indigo-400 font-semibold px-6 py-3 rounded-lg transition">
                Contact Us
            </a>
        </div>
    </div>
</x-layout>
