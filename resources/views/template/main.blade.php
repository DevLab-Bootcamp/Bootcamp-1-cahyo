<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KlinikKampus</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="block sm:flex ">
        <aside id="sidebar"
            class="fixed z-20 h-screen w-72 transform bg-blue-900 p-6 text-white transition-all duration-500 translate-x-full sm:translate-x-0 sm:relative">
            <div id="title" class="mb-8 text-start transition-all duration-500">
                <h1 class="text-2xl font-bold">Clinic UAD</h1>
                <p id="keter" class="text-sm">Your Health, Our Priority</p>
            </div>
            <div class="border-t border-white p-4">
            </div>
              
            <nav id="sideNav" class="flex transition-all duration-500 p-2">
                <ul>
                    <li class="mb-4 itemList">
                        <a href="/" class="block rounded p-4  hover:bg-blue-700">
                            <i class="icon transition-transform duration-500 fas fa-home"></i>
                            <span id="menuList" class="ml-1 menuList transition-all duration-500 relative">Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-4 itemList">
                        <a 
                          href="#"
                          class="rounded p-3 hover:bg-blue-700 flex items-center justify-between mb-4"
                          onclick="toggleDropdown(event)"
                        >
                          <div class="flex items-center">
                            <i class="icon transition-transform duration-500 fas fa-user-md"></i>
                            <span id="menuList" class="ml-4 menuList transition-all duration-500 relative">User</span>
                          </div>
                          <span class="text-sm transition-transform duration-300" id="arrow">
                            <i class="fas fa-chevron-down"></i>
                          </span>
                        </a>
                        <ul id="submenu" class="hidden ml-10 space-y-4">
                                <li class="">
                                    <a href="/admin" class="block text-white hover:text-blue-700">Kelola Admin</a>
                                  </li>
                                <li class="mb-4">
                                    <a href="/doctor" class="block text-white hover:text-blue-700">Dokter</a>
                                  </li>
                                <li class="mb-4">
                                    <a href="/nurse" class="block text-white hover:text-blue-700">Civitas</a>
                                  </li>
                                <li class="mb-4">
                                    <a href="/nurse" class="block text-white hover:text-blue-700">Perawat</a>
                                </li>
                        </ul>
                      </li>

                      <li class="mb-4 itemList">
                        <a 
                          href="#"
                          class="rounded p-3 hover:bg-blue-700 flex items-center justify-between mb-4"
                          onclick="toggleDropdown(event)"
                        >
                          <div class="flex items-center">
                            <i class="icon transition-transform duration-500 fas fa-laptop-medical"></i>
                            <span id="menuList" class="ml-3 menuList transition-all duration-500 relative">Master</span>
                          </div>
                          <span class="text-sm transition-transform duration-300" id="arrow">
                            <i class="fas fa-chevron-down"></i>
                          </span>
                        </a>
                        <ul id="submenu" class="hidden ml-10 space-y-4">
                                <li class="mb-4">
                                    <a href="{{ route('icd') }}"  class="menu-link text-white hover:text-blue-700">ICD</a>
                                  </li>
                                  <li class="mb-4">
                                    <a href="{{ route('klinik') }}" class="block text-white hover:text-blue-700">Klinik</a>
                                  </li>
                                
                        </ul>
                      </li>
                    <li class="mb-4 itemList">
                        <a 
                          href="#"
                          class="rounded p-3 hover:bg-blue-700 flex items-center justify-between mb-4"
                          onclick="toggleDropdown(event)"
                        >
                          <div class="flex items-center">
                            <i class="icon transition-transform duration-500 fas far fa-calendar-alt"></i>
                            <span id="menuList" class="ml-4 menuList transition-all duration-500 relative">Jadwal</span>
                          </div>
                          <span class="text-sm transition-transform duration-300" id="arrow">
                            <i class="fas fa-chevron-down"></i>
                          </span>
                        </a>
                        <ul id="submenu" class="hidden ml-10 space-y-4">
                                <li class="">
                                    <a href="/admin" class="block text-white hover:text-blue-700">Dokter</a>
                                  </li>
                                
                        </ul>
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
                <div class="flex items-center space-x-4 ">
                    <div class="flex items-center justify-between w-full ">
                        <div class="flex flex-col">
                          <span class="text-base font-semibold">Nama Akunasdada</span>
                          <span class="text-sm font-normal ">Mahasiswa</span>
                        </div>
                        <div class="w-10 h-10 ml-6 rounded-full bg-black"></div>
                      </div>
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

    // handle toggle dropdown sidebar
    function toggleDropdown(event) {
    event.preventDefault();
    const submenu = event.currentTarget.nextElementSibling;
    const arrow = event.currentTarget.querySelector("#arrow i");

    if (submenu.classList.contains("hidden")) {
      submenu.classList.remove("hidden");
      arrow.classList.add("rotate-180");
    } else {
      submenu.classList.add("hidden");
      arrow.classList.remove("rotate-180");
    }
  }

</script>

</html>
