<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{ $title ?? 'Portofolio FruHafizd' }}</title>
        <style>[x-cloak]{display:none}</style>
        @vite('resources/css/app.css')
    </head>
    <body class="flex flex-col min-h-screen antialiased bg-gradient-to-br from-gray-900 via-black to-gray-800">
        @livewire('partials.navbar')
        <main class="flex-grow">
            {{ $slot }}
        </main>
        @livewireScripts
        @livewire('partials.footer')
    </body>
    
    
</html>
