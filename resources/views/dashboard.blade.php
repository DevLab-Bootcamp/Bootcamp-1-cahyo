@extends('template.main')
@section('title-page', "Dashboard")
@section('main-content')
    <div class="sm:flex sm:justify-between">
        <div class="main-Appoint">
            <div class="bg-white rounded-md drop-shadow p-4 sm:w-[23rem] font-semibold text-blue-900">
                <div class="flex justify-between">
                    <h1>Appointment Saya</h1>
                    <button>Hapus</button>
                </div>
                <div class="block m-4 mt-7">

                </div>
            </div>
        </div>
            <div class="main-event mt-3 sm:mt-0">
                <div class="bg-white rounded-md drop-shadow p-4 sm:w-[23rem] font-semibold text-blue-900">
                    <h1>Jadwal Event</h1>
                </div>
            </div>
        <div class="main-jadwal mt-3 sm:mt-0">
            <div class="bg-white rounded-md drop-shadow p-4 sm:w-[23rem] font-semibold text-blue-900">
                <h1>Jadwal Klinik Minggu Ini</h1>
                <div class="block m-4 mt-7">
                    <div class="flex items-center mt-4">
                        <i class="fa-solid fa-location-dot"></i>
                        <span class="mx-4 font-bold">Kampus 4</span>
                    </div>
                    <ul class="mt-3 border border-slate-600 rounded">
                        {{-- FOREACH DATA KAMPUS--}}
                        <li class="p-2 border-b border-slate-600">
                            <a href="#" onclick="openDetail(1)">
                                <div class="flex items-center justify-between text-slate-500">
                                    <span>Mon, 13 Jan 2025</span>
                                    <div class="bg-blue-900 text-white p-1 px-3 mx-2 rounded">
                                        <span class="px-1">2</span>
                                        <i class="fa-solid fa-clock "></i>
                                    </div>
                                    <i class="fas fa-chevron-down text-blue-900 w-5 h-5"></i>
                                </div>
                            </a>
                            <div class="detail-1 m-4 divide-y divide-slate-700 hidden">
                                {{-- FOREACH DATA JADWAL --}}
                                <ul class="mt-2">
                                    <li class="flex items-center mb-3">
                                        <i class="fa-solid fa-clock"></i>
                                        <span class="mx-3">07:00 - 10:00</span>
                                     </li>
                                    <li class="flex items-center justify-between mb-3">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-user-nurse"></i>
                                            <span class="mx-3">dr. Ali Baba</span>
                                        </div>
                                        <button class="grid bg-blue-900 rounded-full w-9 h-9 justify-items-center items-center hover:bg-blue-800 text-white p-2">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </li>
                                    <li class="flex items-center justify-between mb-3">
                                        <div class="flex items-center">
                                            <i class="fa-solid fa-pills"></i>
                                            <span class="mx-3">MEDICINE</span>
                                        </div>
                                    </li>
                                </ul>
                                {{-- FOREACH --}}
                            </div>
                        </li>
                        {{-- FOREACH --}}
                    </ul>
                </div>
                <div class="m-4">
                    <a href="#" class="grid justify-items-center w-full border border-sky-900 p-2 rounded">Lihat Data Lengkap</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openDetail(id) {
            document.querySelector(`.detail-${id}`).classList.toggle('hidden');
        }
    </script>
@endsection