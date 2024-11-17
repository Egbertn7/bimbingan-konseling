<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Bimbingan Konseling</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white rounded-lg shadow-lg p-8 md:p-12 lg:p-16 w-full max-w-3xl mx-4">
        <h1 class="text-4xl font-bold text-center mb-8 text-gray-700">Bimbingan Konseling</h1>
        <p class="text-center text-gray-500 mb-10">
            Selamat datang di platform bimbingan konseling kami. Silakan register sebagai User atau Admin.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="text-center">
                <img src="{{ asset('img/user.png') }}" alt="User Image"
                    class="mx-auto w-48 h-48 md:w-64 md:h-64 mb-4 rounded-full shadow-md">
                <h2 class="text-2xl font-semibold mb-2 text-gray-800">User</h2>
                <div class="flex justify-around mt-4">

                    <a href="{{ route('register.user') }}"
                        class="bg-gray-600 px-6 py-3 text-white font-semibold rounded-full shadow-lg hover:bg-gray-800 transition duration-200">
                        Register User
                    </a>
                </div>
            </div>


            <div class="text-center">
                <img src="{{ asset('img/admin.jpg') }}" alt="Admin Image"
                    class="mx-auto w-48 h-48 md:w-64 md:h-64 mb-4 rounded-full shadow-md">
                <h2 class="text-2xl font-semibold mb-2 text-gray-800">Admin</h2>
                <div class="flex justify-around mt-4">

                    <a href="{{ route('register.admin') }}"
                        class="bg-gray-600 px-6 py-3 text-white font-semibold rounded-full shadow-lg hover:bg-gray-800 transition duration-200">
                        Register Admin
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
