<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h1 class="text-2xl font-bold text-center mb-6">Login sebagai User</h1>
        <form action="{{ route('login.user') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama</label>
                <input type="text" name="name" id="name" class="border border-gray-300 rounded-md w-full p-2"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="border border-gray-300 rounded-md w-full p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md w-full">Login</button>
            {{-- <a href="{{ route('') }}"
            class="bg-gray-600 px-6 py-3 text-white font-semibold rounded-full shadow-lg hover:bg-gray-800 transition duration-200">
            Register Admin
        </a> --}}
            <div class="text-center mt-4">
                <a href="welcome.blade.php  "
                    class="bg-gray-600 px-4 py-2 text-white font-semibold rounded-md shadow-lg hover:bg-gray-800 transition duration-200 inline-block w-full text-center">
                    Kembali ke Halaman Utama
                </a>
            </div>
        </form>
    </div>

</body>

</html>