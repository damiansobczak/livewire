<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Laravel</title>
    @livewireStyles
</head>

<body class="antialiased bg-gray-100">
    <div class="w-full h-full flex items-center justify-center flex-col my-16">
        @livewire('materials', ['colors' => $colors, 'collections' => $collections, 'materials' => $materials])
    </div>
    @livewireScripts
</body>

</html>