@extends('template.main')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KlinikKampus</title>
    <style>
        .blue-icon {
          color: rgb(30, 64, 175);
        }
      </style>
</head>

<body class="">
    
<div class="">
<div class="flex justify-between space-x-1 mb-8">
    <div class="flex ">
        <h2 class="text-4xl font-bold text-gray-800">Dashboard</h2>    
    </div>
</div>

<div class="grid grid-cols-3 gap-6">
    <div class="row-span-3">
        <div class="bg-white shadow-lg rounded-lg p-4 border border-gray-300">
            <h2 class="text-xl font-bold mb-4">Appointment Saya</h2>
            <div class="border-t">
                <div class="py-2">
                    <p class="text-lg font-bold ">Mon, 13 Jan 2025</p>
                    <div class="bg-blue-800 w-28  rounded-md p-1 item-center  border border-transparent text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">      
                        <i class="fa fa-clock"></i>
                        <span class=" text-sm text-bold text-white ml-1">07:00 - 10:00</span>
                    </div>
                    <div class="flex mt-2">
                        <i class="fa fa-map-marker blue-icon "></i>
                        <span class="text-sm ml-3">Klinik UAD Kampus 4</span>
                    </div>
                    <div class="flex mt-2">
                        <i class="fa fa-user-circle blue-icon"></i>
                        <span class="text-sm ml-2">Dr Yusuf Maulana Sarif</span>
                    </div>
                </div>
                
                
            </div>
            <button class="mt-6 w-full text-white py-2 rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none" >
                Hapus
            </button>
        </div>
    </div>
    <div class="row-span-3">
        <div class=" bg-white shadow-lg rounded-lg p-4 border border-gray-300">
            <h2 class="text-xl font-bold text-gray-800 pb-4">Jadwal Event</h2>
            <div class="border-t py-2">
                <p class="text-lg font-bold ">Event Besar UAD</p>
                <p class="text-sm ">13 Jan 2025  09.30 WIB - 15 Jan 2025 09.35 WIB </p>
                <p class="text-sm ">Kuota : 200</p>
            </div>
            <div class="border-t border-blue-300 pt-4"></div>
            <!-- Modal toggle -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="w-9 h-9 text-white text-xl rounded-lg bg-blue-800  hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium   dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                +
            </button>


  <!-- Main modal -->
 <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                      Ajukan Janji dengan Dokter
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                      <i class="fa fa-close"></i>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form class="p-4 md:p-5">
                  <div class="grid gap-4 mb-4 grid-cols-2">
                      <div class="col-span-2">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dokter</label>
                          <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Dokter" required="">
                      </div>
                      <div class="col-span-2 ">
                          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jadwal</label>
                          <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan jadwal" required="">
                      </div>
                      <div class="col-span-2 ">
                          <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Layanan</label>
                          <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              <option selected="">Pemeriksaan</option>
                              <option value="abc">abc</option>
                              <option value="abc">abc</option>
                              <option value="abc">abc</option>
                              <option value="abc">abc</option>
                          </select>
                      </div>
                      <div class="col-span-2">
                          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluhan Anda</label>
                          <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ceritakan keluhan anda"></textarea>                    
                      </div>
                  </div>
                  <button type="submit" class="text-white inline-flex items-center bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                      Buat Janji
                  </button>
              </form>
          </div>
      </div>
  </div> 





        </div>
    </div>

    <div class="row-span-6 justify-content">
        <div class="bg-white shadow-lg rounded-lg p-4 border border-gray-300 md:row-span-2">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Jadwal Klinik Minggu Ini</h3>
          <div class="border-t pt-6 space-y-4">
            <!-- Klinik UAD Kampus 4 -->
            <div class="border p-4 rounded-lg shadow-sm mb-8">
                <i class="fas fa-map-marker-alt blue-icon"></i>
              <span class="text-lg font-bold text-blue-800 mb-4">Klinik UAD Kampus 4</span>
              <div class="py-4"> 
                <p class="text-lg text-gray-600 mr-4 ">Mon, 13 Jan 2025
                    <span class="bg-blue-800 rounded-md py-1 px-2 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                     <span>2</span>
                     <i class="fa fa-clock "></i> 
                   </span>
                </p>
              </div>
              <div class="border-t pt-6 space-y-4"> 
                <p class="text-lg text-gray-600 mr-6 ">Tue, 14 Jan 2025
                    <span class="bg-blue-800 rounded-md  py-1 px-2 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                     2<i class=" ml-1 fa fa-clock "></i> 
                   </span>
                </p>
              </div>
            </div>
        
            <div class="border p-4 rounded-lg shadow-sm ">
                <i class="fas fa-map-marker-alt blue-icon"></i>
              <span class="text-lg font-bold text-blue-800 mb-4">Klinik UAD Kampus 4</span>
              <div class="py-4"> 
                <p class="text-lg text-gray-600 mr-6 ">Mon, 13 Jan 2025
                    <span class="bg-blue-800 rounded-md  py-1 px-2 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                     2<i class=" ml-1 fa fa-clock "></i> 
                   </span>
                </p>
              </div>

            </div>
      
           
            <div class="border p-4 rounded-lg shadow-sm ">
                <i class="fas fa-map-marker-alt blue-icon"></i>
              <span class="text-lg font-bold text-blue-800 mb-4">Klinik UAD Kampus 1</span>
              <div class="py-4"> 
                <p class="text-lg text-gray-600 mr-4">Mon, 13 Jan 2025
                    <span class="bg-blue-800 rounded-md  py-1 px-2 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                     2<i class=" ml-1 fa fa-clock "></i> 
                   </span>
                </p>
              </div>
            </div>
      
            <div class="border p-4 rounded-lg shadow-sm ">
                <i class="fas fa-map-marker-alt blue-icon"></i>
              <span class="text-lg font-bold text-blue-800 mb-4">Klinik UAD Kampus 2</span>
              <div class="py-4"> 
                <p class="text-lg text-gray-600 mr-6 ">Mon, 13 Jan 2025
                    <span class=" item-center bg-blue-800 rounded-md  py-1 px-2 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                     2<i class=" ml-1 fa fa-clock "></i> 
                   </span>
                </p>
              </div>

            </div>
          <button type="" class="mt-1 w-full text-gray-700 bg-white py-2 border rounded-lg hover:bg-gray-100">
            Lihat Lebih Lengkap
          </button>
        </div>
      </div>      
</div>
</div>
</body>
</html>

@endsection
