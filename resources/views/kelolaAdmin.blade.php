@extends('template.main')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-4xl font-bold text-gray-800">User Admin</h2>
    </div>

    <div class="bg-white shadow rounded-lg">
        <div class="border-b p-4">
            <div class="flex justify-between items-center">
                <div>
                    <h6 class="text-lg font-semibold">Data Administrasi</h6>
                    <p class="text-sm text-gray-500">See information about all members</p>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('admin.createAdmin') }}" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-800 rounded-md hover:bg-blue-900">
                        <i class="fas fa-user-plus mr-2"></i>
                        Tambah Admin
                    </a>
                </div>
            </div>
        </div>

        <div class="p-4">
            <div class="flex justify-between items-center mb-4">
                <div class="relative">
                    <input type="text" placeholder="Search" class="w-64 px-4 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-300">
                    <i class="fas fa-search absolute w-5 h-5 text-gray-400 top-3 right-3"></i>

                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">No</th>
                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Nama</th>
                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Email</th>
                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600">Klinik</th>
                            <th class="px-4 py-2 text-center text-xs font-semibold text-gray-600">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-3">
                                <div class="flex items-center">
                                    <p>1</p>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <p class="text-sm font-semibold text-gray-700">nama admin</p>
                                    
                                </div>
                            </td>
                            <td class="px-4 py-3 text-left">
                                <div class="flex items-center">
                                    <p>email@gmail.com</p>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-left">
                                <div class="flex items-center">
                                    <p>Klinik kampus uad 4</p>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <a href="#" class="text-blue-800 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex items-center justify-between border-t p-4">
                <p class="text-sm text-gray-500">Page 1 of 10</p>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Previous</button>
                    <button class="px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


@endsection