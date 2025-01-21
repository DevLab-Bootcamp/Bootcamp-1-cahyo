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
            <h1 class="text-2xl font-bold mb-6">Tambah User ICD</h1>

            @if (session('success'))
                <div class="mb-4 text-green-600 font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <form class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-1 gap-4">
                @csrf
                
                <div class="mb-2">
                    <label for="kode" class="block text-sm font-medium text-gray-700 mb-2" >Kode</label>
                    <input type="text" id="username" name="username" placeholder="Ex: A001" class="border p-2 w-full rounded" required>
                </div>
                <div class="mb-2">
                    <label for="klinik" class="block text-sm font-medium text-gray-700 mb-2">Name (EN) (Dalam Bahasa Inggris)</label>
                    <input type="text" id="nameEN" name="namaEN" placeholder="EX: Salmonella infection, unspecifed" class="border p-2 w-full rounded" required>
                </div>
                <div class="mb-2">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Name (ID) (Dalam Bahasa Indonesia)</label>
                    <input type="text" id="nameID" name="nameID" placeholder="Ex: Infeksi Salmonella, tidak spesifik" class="border p-2 w-full rounded" required>
                </div>
                <div>
                    <button type="submit" class=" bg-blue-800 text-white  px-4 py-2 rounded hover:bg-blue-700">
                        Tambah Kode ICD
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

@endsection