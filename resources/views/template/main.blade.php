<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-200">
    <div class="block sm:flex">
        <aside id="sidebar"
            class="fixed z-20 h-screen w-[20rem] transform bg-blue-900 p-6 text-white transition-all duration-500 -translate-x-full  sm:translate-x-0 sm:relative">
            <div id="title" class="mb-8 text-center transition-all duration-500">
                <h1 class="text-2xl font-bold">Clinic UAD</h1>
                <p id="keter" class="text-sm">Your Health, Our Priority</p>
            </div>
            <nav id="sideNav" class="flex transition-all duration-500">
                <ul class="w-[50rem]">
                    <li class="mb-3 itemList">
                        <a href="#" class="flex items-center p-3 justify-between hover:bg-blue-700 transition-all duration-300 rounded">
                            <div class="flex items-center">
                                <i class="icon transition-transform duration-500 fas fa-home text-[20px]"></i>
                                <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Dashboard</span>
                            </div>
                        </a>
                    </li>
                    {{-- @if(auth()->check() && auth()->user()->role === 'admin') --}}
                    <li class="mb-3 itemList">
                        <a href="#" id="linkMenu-1" class="menuLink flex items-center p-3 justify-between hover:bg-blue-700 transition-all duration-300 rounded" id="linkMenu-1" onclick="listMenu(1)">
                            <div class="flex items-center transition-all duration-700">
                                <i class="icon transition-transform duration-500 fa-solid fa-user-pen text-[20px]"></i>
                                <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Pengguna</span>
                            </div>
                            <i class="menuList fas fa-chevron-down text-white w-5 h-5"></i>
                        </a>
                        <div id="listMenu-1" class="submenu listMenu bg-blue-950 rounded-b transition-all hidden duration-200">
                            <ul>
                                <li class="itemList ml-4 menuList">
                                    <a href="#" class="flex items-center p-2 justify-between hover:text-slate-300 transition-all duration-300 rounded">
                                        <div class="flex items-center">
                                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Kelola Admin</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" itemList ml-4 menuList">
                                    <a href="#" class="flex items-center p-2 justify-between hover:text-slate-300 transition-all duration-300 rounded">
                                        <div class="flex items-center">
                                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Civitas</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" itemList ml-4 menuList">
                                    <a href="#" class="flex items-center p-2 justify-between hover:text-slate-300 transition-all duration-300 rounded">
                                        <div class="flex items-center">
                                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Dokter</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" itemList ml-4 menuList">
                                    <a href="#" class="flex items-center p-2 justify-between hover:text-slate-300 transition-all duration-300 rounded">
                                        <div class="flex items-center">
                                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Perawat</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- @endif --}}
                    {{-- @if(auth()->check() && auth()->user()->role === 'admin') --}}
                    <li class="mb-3 itemList">
                        <a href="#" id="linkMenu-2" class="menuLink flex items-center p-3 justify-between hover:bg-blue-700 transition-all duration-300 rounded" id="linkMenu-2" onclick="listMenu(2)">
                            <div class="flex items-center transition-all duration-700">
                                <i class="icon transition-transform duration-500 fa-solid fa-toolbox text-[20px]"></i>
                                <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Master</span>
                            </div>
                            <i class="menuList fas fa-chevron-down text-white w-5 h-5"></i>
                        </a>
                        <div id="listMenu-2" class="submenu listMenu bg-blue-950 rounded-b transition-all hidden duration-200">
                            <ul>
                                <li class="itemList ml-4 menuList">
                                    <a href="#" class="flex items-center p-2 justify-between hover:text-slate-300 transition-all duration-300 rounded">
                                        <div class="flex items-center">
                                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">ICD</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" itemList ml-4 menuList">
                                    <a href="#" class="flex items-center p-2 justify-between hover:text-slate-300 transition-all duration-300 rounded">
                                        <div class="flex items-center">
                                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Klinik</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- @endif --}}
                    <li class="mb-3 itemList">
                        <a href="#" id="jadwal" class="flex items-center p-3 justify-between hover:bg-blue-700 transition-all duration-300 rounded" onclick="itemJadwal()">
                            <div class="flex items-center transition-all duration-700">
                                <i class="icon transition-transform duration-500 fa-solid fa-calendar-days text-[20px]"></i>
                                <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Jadwal</span>
                            </div>
                            <i class="menuList fas fa-chevron-down text-white w-5 h-5"></i>
                        </a>
                        <div id="listJadwal" class="listJadwal bg-blue-950 rounded-b transition-all hidden duration-200">
                            <ul>
                                <li class=" itemList ml-4 menuList">
                                    <a href="#" class="flex items-center p-2 justify-between hover:text-slate-300 transition-all duration-300 rounded">
                                        <div class="flex items-center">
                                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Item</span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" itemList ml-4 menuList">
                                    <a href="#" class="flex items-center p-2 justify-between hover:text-slate-300 transition-all duration-300 rounded">
                                        <div class="flex items-center">
                                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Item</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-3 itemList">
                        <a href="#" class="flex items-center p-3 justify-between hover:bg-blue-700 transition-all duration-300 rounded">
                            <div class="flex items-center">
                                <i class="icon transition-transform duration-500 fa-solid fa-user-injured text-[20px]"></i>
                                <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Medical Checkup</span>
                            </div>
                        </a>
                    </li>
                    <li class="mb-3 itemList">
                        <a href="#" class="flex items-center p-3 justify-between hover:bg-blue-700 transition-all duration-300 rounded">
                            <div class="flex items-center">
                                <i class="icon transition-transform duration-500 fa-solid fa-file-lines text-[20px]"></i>
                                <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Surat Dokter</span>
                            </div>
                        </a>
                    </li>
                    <li class="mb-3 itemList">
                        <a href="#" class="flex items-center p-3 justify-between hover:bg-blue-700 transition-all duration-300 rounded">
                            <div class="flex items-center">
                                <i class="icon transition-transform duration-500 fa-solid fa-store text-[20px]"></i>
                                <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Riwayat Pemeriksaan</span>
                            </div>
                        </a>
                    </li>
                    <li class="mb-3 itemList">
                        <a href="#" class="flex items-center p-3 justify-between hover:bg-blue-700 transition-all duration-300 rounded">
                            <div class="flex items-center">
                                <i class="icon transition-transform duration-500 fa-solid fa-clock text-[20px]"></i>
                                <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Event</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <div id="overlay" class="fixed z-10 hidden h-screen w-full bg-[#0000004f]" onclick="closeSide()"></div>
        <div id="navbar"  class="block w-full transition-all duration-500">
            <nav class="flex items-center justify-between bg-white drop-shadow-lg p-4 text-slate-900">
                <button id="burgerButton" class="rounded p-2 focus:outline-none focus:bg-[#00000056] focus:ring-white sm:hidden" onclick="openSide()">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <button id="smButton" class="rounded p-2 focus:outline-none focus:bg-[#00000056] focus:ring-white hidden sm:block">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
    
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 rounded-full bg-black"></div>
                    {{-- <img src="https://via.placeholder.com/40" alt="User Avatar" class="w-10 h-10 rounded-full"> --}}
                </div>
            </nav>
            
            <main class="p-4 text-slate-800">
                <div class="flex items-center justify-between">
                    <h1 class="font-semibold text-4xl">@yield('title-page')</h1>
                    <h1>@yield('main-title-page')</h1>
                </div>
                <div class="mt-6">
                    @yield('main-content')
                </div>
            </main>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

<script>
    const btnToggle = document.getElementById('smButton');
    btnToggle.addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('w-[6rem]');
        document.getElementById('title').classList.toggle('-ml-[10rem]');
        document.getElementById('title').classList.toggle('opacity-0');
        document.querySelectorAll('.menuList').forEach(function(item){
            item.classList.toggle('hidden');
            item.classList.toggle('opacity-0');
        })
        document.querySelectorAll('.icon').forEach(function(item){
            item.classList.toggle('text-[25px]');
        })
        document.querySelectorAll('.itemList').forEach(function(item){
            item.classList.toggle('flex');
            item.classList.toggle('justify-center');
            item.classList.toggle('w-10');
        })
    });
    
    function itemJadwal () {
        // Menutup semua menu yang terbuka sebelumnya
        const allMenus = document.querySelectorAll('.submenu'); // Menggunakan class untuk semua submenu
        allMenus.forEach(function(menu) {
            menu.classList.add('hidden');  // Menyembunyikan semua submenu
        });

        // Menghapus styling dari semua menu sebelumnya
        const allLinks = document.querySelectorAll('.menuLink');
        allLinks.forEach(function(link) {
            link.classList.remove('bg-blue-950', 'rounded-t', 'rounded');  // Menghapus styling
        });
        document.getElementById('listJadwal').classList.toggle('hidden')
        document.getElementById('jadwal').classList.toggle('bg-blue-950')
        document.getElementById('jadwal').classList.toggle('rounded-t')
        document.getElementById('jadwal').classList.toggle('rounded')

        document.getElementById('sidebar').classList.remove('w-[6rem]');
        document.getElementById('title').classList.remove('-ml-[10rem]');
        document.getElementById('title').classList.remove('opacity-0');
        document.querySelectorAll('.menuList').forEach(function(item){
            item.classList.remove('hidden');
            item.classList.remove('opacity-0');
        })
        document.querySelectorAll('.icon').forEach(function(item){
            item.classList.remove('text-[25px]');
        })
        document.querySelectorAll('.itemList').forEach(function(item){
            item.classList.remove('flex');
            item.classList.remove('justify-center');
            item.classList.remove('w-10');
        })
    }

    function listMenu(id) {
        // Tutup semua menu terlebih dahulu
        const allMenus = document.querySelectorAll('.submenu');
        allMenus.forEach(function(menu) {
            if (menu.id !== `listMenu-${id}`) {  // Menutup semua kecuali yang sedang dibuka
                menu.classList.add('hidden');
            }
        });

        // Hapus styling dari semua link menu kecuali yang sedang dibuka
        const allLinks = document.querySelectorAll('.menuLink');
        allLinks.forEach(function(link) {
            if (link.id !== `linkMenu-${id}`) {  // Menghapus styling kecuali yang sedang dibuka
                link.classList.remove('bg-blue-950', 'rounded-t', 'rounded');
            }
        });
        
        document.getElementById(`listMenu-${id}`).classList.toggle('hidden')
        document.getElementById(`linkMenu-${id}`).classList.toggle('bg-blue-950')
        document.getElementById(`linkMenu-${id}`).classList.toggle('rounded-t')
        document.getElementById(`linkMenu-${id}`).classList.toggle('rounded')
        
        document.getElementById('listJadwal').classList.add('hidden')
        document.getElementById('jadwal').classList.remove('bg-blue-950')
        document.getElementById('jadwal').classList.remove('rounded-t')
        document.getElementById('jadwal').classList.remove('rounded')
        document.getElementById('sidebar').classList.remove('w-[6rem]');
        document.getElementById('title').classList.remove('-ml-[10rem]');
        document.getElementById('title').classList.remove('opacity-0');
        document.querySelectorAll('.menuList').forEach(function(item){
            item.classList.remove('hidden');
            item.classList.remove('opacity-0');
        })
        document.querySelectorAll('.icon').forEach(function(item){
            item.classList.remove('text-[25px]');
        })
        document.querySelectorAll('.itemList').forEach(function(item){
            item.classList.remove('flex');
            item.classList.remove('justify-center');
            item.classList.remove('w-10');
        })
    }

    function openSide() {
        document.getElementById('sidebar').classList.remove('-translate-x-full');
        document.getElementById('overlay').classList.remove('hidden');
    }
    function closeSide() {
        document.getElementById('sidebar').classList.add('-translate-x-full');
        document.getElementById('overlay').classList.add('hidden');
        document.getElementById('jadwal').classList.remove('bg-blue-950')
    }
</script>

</html>
