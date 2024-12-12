<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-tracking />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Catch Your Vision') }}</title>

    <meta name="title" content="Catch Your Vision | A KABUVU Program" />
    <meta name="description" content="Let’s find out what happens when you get clear about who you are and who you want to be." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://catchyourvision.org/" />
    <meta property="og:title" content="Catch Your Vision | A KABUVU Program" />
    <meta property="og:description" content="Let’s find out what happens when you get clear about who you are and who you want to be." />
    <meta property="og:image" content="https://catchyourvision.org/assets/images/catch-your-vision.png" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://catchyourvision.org/" />
    <meta property="twitter:title" content="Catch Your Vision | A KABUVU Program" />
    <meta property="twitter:description" content="Let’s find out what happens when you get clear about who you are and who you want to be." />
    <meta property="twitter:image" content="https://catchyourvision.org/assets/images/catch-your-vision.png" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/assets/images/cyv.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/assets/images/cyv.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/assets/images/cyv.png') }}">
    <link rel="shortcut icon" href="{{ url('/assets/images/cyv.png') }}">
    <meta name="msapplication-TileColor" content="#9385c9">
    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:200,200i,300,300i,500,500i,600,600i" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="relative bg-[#f9f7f7]">
        {{ $slot }}
</div>
</body>
</html>
