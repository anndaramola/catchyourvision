<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Catch Your Vision') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:200,200i,300,300i,500,500i,600,600i" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="relative bg-[#f9f7f7]">
    <div class="min-h-screen bg-[#f9f7f7] dark:bg-neutral-950 pt-3 md:pt-10 mx-3 md:mx-auto">
        {{ $slot }}
    </div>

    <div class="w-full bg-[#f9f7f7] ">
        <x-application-footer class="fill-current text-gray-500" />
    </div>
</div>
</body>
</html>
