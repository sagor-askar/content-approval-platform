<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Content Approval Platform</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback Tailwind CDN (optional) -->
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body
    class="bg-gradient-to-r from-blue-600 to-indigo-700 min-h-screen flex items-center justify-center font-sans text-white">

    <div class="text-center max-w-xl px-6 py-12">
        <h1 class="text-5xl font-extrabold mb-6 drop-shadow-lg">
            Content Approval Platform
        </h1>

        <p class="text-lg mb-8 text-blue-200">
            Streamline your workflow and get your content approved effortlessly.
        </p>

        <a href="{{ route('login') }}"
            class="inline-block bg-white text-indigo-700 font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-100 transition">
            Login
        </a>
    </div>

</body>

</html>
