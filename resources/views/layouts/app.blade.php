<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Visit Sabang')</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}" type="image/png">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#fbfbfb] text-gray-900">

    @include('partials.header')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')
    <script src="{{ asset('storage/js/script.js')}}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>


</body>
</html>
