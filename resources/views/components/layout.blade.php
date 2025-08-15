<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel App' }} | My Test App</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-gray-100 font-sans">


 <!-- Navbar -->
<header class="bg-gray-800 border-b border-gray-700">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo / Title -->
        <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-400 hover:text-indigo-300 transition">
            My Laravel App
        </a>

        <!-- Nav Links -->
        <nav class="space-x-6">
            <a href="{{ url('/') }}" 
               class="{{ request()->is('/') ? 'text-indigo-400 font-semibold' : 'hover:text-indigo-400 transition' }}">
               Home
            </a>
            <a href="{{ url('/about') }}" 
               class="{{ request()->is('about') ? 'text-indigo-400 font-semibold' : 'hover:text-indigo-400 transition' }}">
               About
            </a>
            <a href="{{ url('/products') }}" 
               class="{{ request()->is('products') ? 'text-indigo-400 font-semibold' : 'hover:text-indigo-400 transition' }}">
               Products
            </a>
            <a href="{{ url('/contact') }}" 
               class="{{ request()->is('contact') ? 'text-indigo-400 font-semibold' : 'hover:text-indigo-400 transition' }}">
               Contact
            </a>
        </nav>
    </div>
</header>


<main class="min-h-screen max-w-7xl mx-auto px-4 py-10">
    {{ $slot }}
</main>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 text-center py-4 text-gray-400 text-sm">
        &copy; {{ date('Y') }} Laravel App
    </footer>

</body>

</html>
