<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    @include('template.navbar')

    <div class="container mx-auto flex-grow flex items-center justify-center py-8">
        <div class="w-full max-w-4xl flex flex-col md:flex-row bg-white rounded-lg shadow-lg p-6 md:p-8 lg:p-12 gap-8">

            <div class="w-full md:w-1/2">
                <h1 class="text-3xl font-bold text-gray-700 mb-4">Formulir Pengajuan</h1>
                <form action="{{ route('pengajuan.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="no_telp" class="block text-sm font-medium text-gray-700 mb-1">No Telepon</label>
                        <input type="text" id="no_telp" name="no_telp" required
                            class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @error('no_telp')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div>
                        <label for="masalah" class="block text-sm font-medium text-gray-700 mb-1">Ceritakan Masalah
                            Anda</label>
                        <textarea id="masalah" name="masalah" rows="4" required
                            class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                        @error('masalah')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Submit
                        </button>
                    </div>
                </form>
            </div>


            <div class="w-full md:w-1/2 flex items-center justify-center bg-gray-100 rounded-lg p-4">
                <img src="/img/gambar1.jpeg" alt="Form Illustration" class="max-w-full rounded-lg">
            </div>

        </div>
    </div>

</body>

</html>
