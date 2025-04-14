{{-- @extends('layouts.app')

@section('title', 'login')

@section('content')
@vite('resources/css/app.css')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
        <form method="POST" action="">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="flex items-center justify-between mb-4">
                <div>
                    <input type="checkbox" id="remember" name="remember" class="mr-2">
                    <label for="remember" class="text-gray-700">Remember Me</label>
                </div>
                <a href="" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
            </div>
            <a href="{{ route('home') }}">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">Login</button>
        </a>
        </form>
        <p class="text-center text-gray-600 mt-4">
            Don't have an account? <a href="" class="text-blue-500 hover:underline">Register</a>
        </p>
    </div>
</div>


@endsection

 --}}

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

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
            <form method="POST" action="">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <input type="checkbox" id="remember" name="remember" class="mr-2">
                        <label for="remember" class="text-gray-700">Remember Me</label>
                    </div>
                    <a href="" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
                </div>
                <a href="{{ route('home') }}">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">Login</button>
            </a>
            </form>
            <p class="text-center text-gray-600 mt-4">
                Don't have an account? <a href="" class="text-blue-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
    <script src="{{ asset('storage/js/script.js')}}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>


</body>
</html>
