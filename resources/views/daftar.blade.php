<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar - Visit Sabang</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}" type="image/png">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#fbfbfb] text-gray-900">
    <div class="min-h-screen flex items-center justify-center py-6 px-4">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Daftar</h2>
            <form method="POST" action="">

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700">Daftar Sebagai</label>
                    <select id="role" name="role" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        <option value="user">Pengguna</option>
                        <option value="provider">Penyedia Layanan</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-amber-400 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">Daftar</button>
            </form>
            <p class="text-center text-gray-600 mt-4">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Masuk</a>
            </p>
        </div>
    </div>
    <script src="{{ asset('storage/js/script.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
