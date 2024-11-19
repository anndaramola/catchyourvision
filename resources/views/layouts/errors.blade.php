<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:200,200i,300,300i,500,500i,600,600i" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen bg-[#f9f7f7] dark:bg-neutral-950 p-6 md:p-10">
    <div class="w-full max-w-[1100px] min-h-[90vh] mx-auto bg-white px-2 md:px-5 rounded-2xl shadow">
        <section id="thanks" class="px-5 py-10 max-w-[1000px] mx-auto border-t-[1px] border-t-indigo-100 flex flex-col">
            <a href="{{ route('home') }}" class="w-full mx-auto max-w-[400px] block">
                <x-logos.full-logo />
            </a>
            <div class="w-4/5 max-w-[600px] md:max-w-[400px] mx-auto flex flex-col py-10 space-y-3 md:px-4 order-2 items-center">
                <h1 class="text-center text-5xl">@yield('code')</h1>
                <p class="text-base"> @yield('message')</p>
            </div>
        </section>
    </div>
    <div>
        <x-application-footer class="w-20 h-20 fill-current text-gray-500" />
    </div>
</div>
</body>
</html>
