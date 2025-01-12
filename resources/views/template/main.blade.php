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

<body>
    <div class="block sm:flex">
        <aside id="sidebar"
            class="fixed z-20 h-screen w-64 transform bg-blue-900 p-6 text-white transition-all duration-500 -translate-x-full  sm:translate-x-0 sm:relative">
            <div id="title" class="mb-8 text-center transition-all duration-500">
                <h1 class="text-2xl font-bold">Clinic UAD</h1>
                <p id="keter" class="text-sm">Your Health, Our Priority</p>
            </div>
            <nav id="sideNav" class="flex transition-all duration-500">
                <ul>
                    <li class="mb-4 itemList">
                        <a href="#" class="block rounded p-3 hover:bg-blue-700">
                            <i class="icon transition-transform duration-500 fas fa-home"></i>
                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-4 itemList">
                        <a href="#" class="block rounded p-3 hover:bg-blue-700">
                            <i class="icon transition-transform duration-500 fas fa-user-md"></i>
                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Doctors</span>
                        </a>
                    </li>
                    <li class="mb-4 itemList">
                        <a href="#" class="block rounded p-3 hover:bg-blue-700">
                            <i class="icon transition-transform duration-500 fas fa-procedures"></i>
                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Patients</span>
                        </a>
                    </li>
                    <li class="mb-4 itemList">
                        <a href="#" class="block rounded p-3 hover:bg-blue-700">
                            <i class="icon transition-transform duration-500 fas fa-calendar-alt"></i>
                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Appointments</span>
                        </a>
                    </li>
                    <li class="mb-4 itemList">
                        <a href="#" class="block rounded p-3 hover:bg-blue-700">
                            <i class="icon transition-transform duration-500 fas fa-file-alt"></i>
                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Reports</span>
                        </a>
                    </li>
                    <li class="mb-4 itemList">
                        <a href="#" class="block rounded p-3 hover:bg-blue-700">
                            <i class="icon transition-transform duration-500 fas fa-cogs"></i>
                            <span id="menuList" class="ml-2 menuList transition-all duration-500 relative">Settings</span>
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
        document.getElementById('sidebar').classList.toggle('w-28');
        document.getElementById('title').classList.toggle('-ml-[10rem]');
        document.getElementById('title').classList.toggle('opacity-0');
        document.querySelectorAll('.menuList').forEach(function(item){
            item.classList.toggle('hidden');
            item.classList.toggle('opacity-0');
        })
        document.querySelectorAll('.icon').forEach(function(item){
            item.classList.toggle('text-[20px]');
        })
        document.querySelectorAll('.itemList').forEach(function(item){
            item.classList.toggle('flex');
            item.classList.toggle('justify-center');
        })
    });
    
    function openSide() {
        document.getElementById('sidebar').classList.remove('-translate-x-full');
        document.getElementById('overlay').classList.remove('hidden');
    }
    function closeSide() {
        document.getElementById('sidebar').classList.add('-translate-x-full');
        document.getElementById('overlay').classList.add('hidden');
    }
</script>

</html>
