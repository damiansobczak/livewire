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
    <div class="w-full h-full flex items-center justify-center flex-col mt-24 space-y-4">
        @foreach ($posts as $post)
        <div class="shadow-sm rounded bg-white p-8 w-full max-w-xl flex items-start justify-between flex-col">
            <div>
                <div class="font-semibold text-gray-800 mb-2">{{ $post->title }}</div>
                <p class="text-sm text-gray-500">{{ $post->description }}</p>
            </div>
            @livewire('counter', ['post' => $post])
        </div>
        @endforeach
    </div>
    @livewireScripts
</body>

</html>