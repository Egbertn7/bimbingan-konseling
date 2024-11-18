<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    @include('template.navbar_admin')

    <div class="container mx-auto p-8">

        <div class="overflow-x-auto mt-4">
            <!-- Tabel untuk Menampilkan Pengguna -->
            <h2 class="text-2xl font-semibold mb-4">Daftar Pengguna</h2>
            <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg mb-8">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    @foreach ($users as $index => $user)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">{{ $index + 1 }}</td>
                            <td class="py-3 px-6 text-left">{{ $user->nama_user }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <!-- Tabel untuk Menampilkan Pengajuan -->
            <h2 class="text-2xl font-semibold mb-4">Daftar Pengajuan</h2>
            <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Masalah</th>
                        <th class="py-3 px-6 text-left">No Telepon</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    @foreach ($pengajuans as $index => $pengajuan)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">{{ $index + 1 }}</td>
                            <td class="py-3 px-6 text-left">{{ $pengajuan->masalah }}</td>
                            <td class="py-3 px-6 text-left">{{ $pengajuan->no_telp }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</body>

</html>
