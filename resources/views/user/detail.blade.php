<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    @include('template.navbar')

    <div class="container mx-auto flex-grow flex items-center justify-center py-8">
        <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-6 md:p-8 lg:p-12 gap-8">

            <h1 class="text-3xl font-bold text-gray-700 mb-4">Pengajuan Berhasil</h1>
            <p>
                Kami telah menerima masalah atau alasan yang Anda kirimkan. Tim kami akan segera meninjau permintaan
                Anda, dan Anda akan mandapatkan balasan melalui email atau notifikasi kepada Anda.
                Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami
                Tetap tenang, kami di sini untuk membantu Anda
            </p>



            <div class="mt-6">
                <a href="{{ route('home') }}"
                    class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Kembali
                </a>
            </div>
        </div>
    </div>

</body>

</html>
