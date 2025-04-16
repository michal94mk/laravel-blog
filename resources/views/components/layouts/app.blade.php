<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>
        
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="min-h-screen bg-gray-100">
        {{ $slot }}
        
        @livewireScripts
    </body>
</html> 