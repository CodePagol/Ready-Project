<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ImpexPharma') }}</title>

        <link rel="shortcut icon" href="#" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])

        <!-- Styles -->

        <style>

        </style>
        @stack('styles')
        @livewireStyles
    </head>
    <body class="font-sans antialiased"></body>
    
        @include('layouts.partials.sidenav')
        {{-- @livewire('navigation-menu') --}}
        
        @include('layouts.partials.topnav')
        
        @include('layouts.partials.mobile-button-nav')

        <div id="content" class="content pt-5 mt-5">
            <main>
                {{ $slot }}
            </main>
        </div>
        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
