@extends('template.main')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6">Tambah User Klinik</h1>

            @if (session('success'))
                <div class="mb-4 text-green-600 font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <form class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-1 gap-4">
                @csrf
                <div class="mb-2">
                    <label for="namaKlinik" class="block text-sm font-medium text-gray-700 mb-2" >Nama Klinik</label>
                    <input type="text" id="klinik" name="klinik" placeholder="Ex: Klinik UAD Kampus 4" class="border p-2 w-full rounded" required>
                </div>
                <div class="mb-2">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" placeholder="Klinik UAD yang berada di kampus 4 UAD Lantai 5" class="border p-2 w-full rounded" required>
                </div>
                
                <div>
                    <button type="submit" class=" bg-blue-800 text-white  px-4 py-2 rounded hover:bg-blue-700">
                        Tambah Klinik
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

@endsection