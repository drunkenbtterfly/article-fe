<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel</title>
  <style src="../output.css"></style>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>

  <!-- Navbar -->
  <nav class="bg-white p-4 text-black mx-[70px]">
    <div class="p-4 flex justify-between items-center">
      <!-- Bagian Kiri dengan 5 Icons -->
      <div class="flex items-end space-x-4">
        <!-- Ganti URL gambar sesuai dengan ikon yang diinginkan -->
        <img src="https://i.ibb.co/9vryN6W/Screenshot-2024-03-09-125459.png" alt="Icon 1" class="h-6 w-6 rounded-[30px]" />
        <img src="https://i.ibb.co/FVMXs8K/Screenshot-2024-03-09-125604.png" alt="Icon 2" class="h-6 w-6 rounded-[30px]" />
        <img src="https://i.ibb.co/bbV3cfD/Screenshot-2024-03-09-125719.png" alt="Icon 3" class="h-6 w-6 rounded-[30px]" />
        <img src="https://i.ibb.co/C9xCXkn/Screenshot-2024-03-09-125739.png" alt="Icon 4" class="h-6 w-6 rounded-[30px]" />
        <img src="https://i.ibb.co/SXSX8QG/Screenshot-2024-03-09-125840.png" alt="Icon 5" class="h-6 w-6 rounded-[30px]" />
      </div>
    
      <!-- Bagian Tengah dengan Logo -->
      <div class="flex-shrink-0">
        <!-- Ganti URL gambar sesuai dengan logo yang diinginkan -->
        <img src="https://i.ibb.co/kBVssdS/youtzmedia-1-removebg-preview.png" alt="Logo" class="h-20 w-20" />
      </div>
    
      <!-- Bagian Kanan dengan Tombol Search -->
      <div class="flex items-center relative">
        <input type="text" name="q" class="w-full border h-12 shadow p-4 rounded-full pl-12 placeholder-gray-500" placeholder="Search">
        <button type="submit" class="absolute left-0 flex items-center justify-center h-full w-12">
          <svg class="text-black h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
          </svg>
        </button>
      </div>
      
    </div>      
  </nav>
    <nav class="p-2 bg-[#96E9C6]">
      <div class="flex justify-center items-center">
        <ul class="flex space-x-[70px] text-2xl text-white font-bold">
          <li class="hover:text-blue-600"><a href="/latest">Latest</a></li>
          <li class="hover:text-blue-600"><a href="/news">News</a></li>
          <li class="hover:text-blue-600"><a href="/entertaiment">Entertaiment</a></li>
          <li class="hover:text-blue-600"><a href="/healt">Healt</a></li>
          <li class="hover:text-blue-600"><a href="/finance">Finance</a></li>
          <li class="hover:text-blue-600"><a href="/tech">Tech</a></li>
          <li class="text-blue-600 hover:text-blue-600"><a href="/travel">Travel</a></li>
          <li class="hover:text-blue-600"><a href="/automotive">Automotive</a></li>
          <li class="hover:text-blue-600"><button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-black md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">More <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                          </li>
                        </ul>
                        <div class="py-1">
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>
            </li>
        </ul>
      </div>
    </nav>

  <div class="container mx-auto flex flex-col lg:flex-row p-20 gap-20">

    <!-- Bagian Kiri (Text) -->
    <div class="lg:w-2/3 lg:order-first flex flex-col lg:flex-row justify-center my-5">
      <div class="bg-[#EDEDED] h-[587px] rounded-l-[25px] shadow-xl overflow-hidden lg:w-2/3">
          <div class="relative h-full w-full bg-black">
              <img src="https://i.ibb.co/zxvzTcr/Screenshot-2024-03-13-222847.png" alt="" class="h-full w-full object-cover">
              <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#96E9C6] to-transparent p-4 h-96">
                  <!-- Additional content inside the gradient overlay if needed -->
                  <p class="bg-black p-4 text-white text-lg font-semibold absolute bottom-36 left-4 py-5 px-5 rounded-xl">Travel</p>
                  <p class="text-white text-3xl font-semibold absolute bottom-4 left-4 py-5 px-5">Lorem ipsum dolor sit amet consectetur. Venenatis pharetra nulla lobortis risus praesent</p>
              </div>
          </div>
      </div>        
      <div class="bg-[#EDEDED] h-[587px] rounded-r-[25px] shadow-xl overflow-hidden lg:w-1/3">
          <div class="grid grid-rows-3 h-full">
            <div class="relative h-full w-full bg-black">
              <img src="https://i.ibb.co/vB6rkD3/Screenshot-2024-03-13-223012.png" alt="" class="h-full w-full object-cover">
              <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#96E9C6] to-transparent p-4 h-40">
                  <!-- Additional content inside the gradient overlay if needed -->
                  <p class="bg-black text-white text-sm font-semibold absolute bottom-20 left-4 py-5 px-5 rounded-xl">Travel</p>
                  <p class="text-white text-sm absolute bottom-4 left-4 ">Lorem ipsum dolor sit amet consectetur. Venenatis pharetra nulla lobortis risus praesent</p>
              </div>
            </div>
            <div class="relative h-full w-full bg-black">
              <img src="https://i.ibb.co/GcCn4sr/Screenshot-2024-03-13-223056.png" alt="" class="h-full w-full object-cover">
              <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#96E9C6] to-transparent p-4 h-40">
                <!-- Additional content inside the gradient overlay if needed -->
                <p class="bg-black text-white text-sm font-semibold absolute bottom-20 left-4 py-5 px-5 rounded-xl">Travel</p>
                  <p class="text-white text-sm absolute bottom-4 left-4 ">Lorem ipsum dolor sit amet consectetur. Venenatis pharetra nulla lobortis risus praesent</p>
              </div>
            </div>
            <div class="relative h-full w-full bg-black">
              <img src="https://i.ibb.co/yk1rsHQ/Screenshot-2024-03-13-223148.png" alt="" class="h-full w-full object-cover">
              <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#96E9C6] to-transparent p-4 h-40">
              <!-- Additional content inside the gradient overlay if needed -->
              <p class="bg-black text-white text-sm font-semibold absolute bottom-20 left-4 py-5 px-5 rounded-xl">Travel</p>
                  <p class="text-white text-sm absolute bottom-4 left-4 ">Lorem ipsum dolor sit amet consectetur. Venenatis pharetra nulla lobortis risus praesent</p>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- Bagian Ranan (Gambar) -->
    <div class="lg:w-1/3">
        <div class="bg-[#EDEDED] h-auto shadow-xl border-2 border-gray-200 rounded-[20px]">
          <div class="bg-[#96E9C6] flex justify-center items-center text-white font-bold text-2xl h-20 rounded-t-[20px] p-2">Terpopuler</div>
          <div class="grid grid-rows-5 grid-flow-col gap-4">
            <div class="flex justify-start items-start font-semibold p-5 mt-2"><span class="font-bold text-3xl mr-5">#1</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#2</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#3</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#4</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-center items-center text-xl text-[#96E9C6] font-bold">Terpopuler lainnya</div>
          </div>
        </div>
      </div> 
  </div>

  <!-- Rekomendasi -->
  <div class="flex justify-start items-start p-10">
    <div class="bg-[#96E9C6] h-10 w-5"></div>
    <h1 class="text-4xl">Rekomendasi</h1>
  </div>

  <div class="grid grid-cols-4 gap-10 p-20">

      <div class="flex flex-row relative">
        <div class="bg-black h-[364px] w-full rounded-[15px] relative overflow-hidden">
          <img src="https://i.ibb.co/HBy1wq5/Screenshot-2024-03-04-160759.png" alt="Deskripsi Gambar" class="w-full h-full object-cover rounded-[15px]">
          <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-black rounded-[15px]"></div>
          <div class="absolute top-0 left-0 w-full h-full flex items-end justify-start p-5 text-white">
              <p>Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024</p>
          </div>
        </div>      
      </div>

      <div class="flex flex-row relative">
        <div class="bg-black h-[364px] w-full rounded-[15px] relative overflow-hidden">
          <img src="https://i.ibb.co/346ZkK2/Screenshot-2024-03-05-135737.png" alt="Deskripsi Gambar" class="w-full h-full object-cover rounded-[15px]">
          <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-black rounded-[15px]"></div>
          <div class="absolute top-0 left-0 w-full h-full flex items-end justify-start p-5 text-white">
              <p>Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024</p>
          </div>
        </div>      
      </div>

      <div class="flex flex-row relative">
        <div class="bg-black h-[364px] w-full rounded-[15px] relative overflow-hidden">
          <img src="https://i.ibb.co/NVrxkjn/Screenshot-2024-03-05-135834.png" alt="Deskripsi Gambar" class="w-full h-full object-cover rounded-[15px]">
          <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-black rounded-[15px]"></div>
          <div class="absolute top-0 left-0 w-full h-full flex items-end justify-start p-5 text-white">
              <p>Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024</p>
          </div>
        </div>      
      </div>

      <div class="flex flex-row relative">
        <div class="bg-black h-[364px] w-full rounded-[15px] relative overflow-hidden">
          <img src="https://i.ibb.co/V3F1vKS/Screenshot-2024-03-05-135923.png" alt="Deskripsi Gambar" class="w-full h-full object-cover rounded-[15px]">
          <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-black rounded-[15px]"></div>
          <div class="absolute top-0 left-0 w-full h-full flex items-end justify-start p-5 text-white">
              <p>Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024</p>
          </div>
        </div>      
      </div>
  </div>

  <div class="py-5 px-20">
    <div class="h-60 bg-gray-300 flex justify-center items-center">
      <h1 class="text-4xl font-semibold">Ads/iklan</h1>
    </div>
  </div>

  <!-- Berita -->
  <div class="flex justify-start items-start p-10">
    <div class="bg-[#96E9C6] h-10 w-5"></div>
    <h1 class="text-4xl">Berita Baru</h1>
  </div>

  <div class="flex flex-col md:flex-row">

    <!-- Bagian Kiri -->
    <div class="md:w-2/3 mb-4 md:mb-0 md:order-1 p-20">
      <div class="bg-white p-4">
        <div class="flex flex-col gap-10">
          <div class="flex items-start">
            <img src="https://i.ibb.co/DYYXm48/Screenshot-2024-03-05-130327.png" alt="" class="rounded-xl">
            <div class="flex flex-col p-2">
              <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
              <span class="mt-2 mb-2 font-bold text-orange-300">Food</span>
              <span class="text-sm">Senin 15 November 2023</span>
            </div>
          </div>
          <div class="flex items-start">
            <img src="https://i.ibb.co/C9w1SbL/Screenshot-2024-03-05-132040.png" alt="" class="rounded-xl">
            <div class="flex flex-col p-2">
              <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
              <span class="mt-2 mb-2 font-bold text-orange-300">Food</span>
              <span class="text-sm">Senin 15 November 2023</span>
            </div>
          </div>
          <div class="flex items-start">
            <img src="https://i.ibb.co/1ZN340c/Screenshot-2024-03-05-132127.png" alt="" class="rounded-xl">
            <div class="flex flex-col p-2">
              <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
              <span class="mt-2 mb-2 font-bold text-orange-300">Food</span>
              <span class="text-sm">Senin 15 November 2023</span>
            </div>
          </div>
          <div class="flex items-start">
            <img src="https://i.ibb.co/s1Sj0QT/Screenshot-2024-03-05-132203.png" alt="" class="rounded-xl">
            <div class="flex flex-col p-2">
              <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
              <span class="mt-2 mb-2 font-bold text-orange-300">Food</span>
              <span class="text-sm">Senin 15 November 2023</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bagian Kanan -->
    <div class="md:w-1/3 md:order-2 p-20">
      <div class="bg-white p-4">
        <div class="bg-[#E4E4E4] p-20 h-[550px] w-">
          <h1 class="flex justify-center items-center text-3xl font-bold p-10">Ads / iklan posisi  tidak fixed</h1>
        </div>
      </div>
    </div>

  </div>
  
  <div class="py-5 px-20">
    <div class="h-60 bg-gray-300 flex justify-center items-center">
      <h1 class="text-4xl font-semibold">Ads/iklan</h1>
    </div>
  </div>

  <footer class="mt-20 bg-gradient-to-br from-slate-50 to-[#96E9C6]">
    <div class="mx-auto w-full max-w-screen-xl p-2 py-6 lg:py-8">
      <div class="md:flex md:justify-between ml-[55px]">
        <div class="mt-1 grid grid-cols-4 gap-20 sm:grid-cols-4 sm:gap-60">
          <div>
            <ul class="font-bold text-black">
              <p>Entertaiment</p>
              <p>Food</p>
              <p>Inpirational</p>
            </ul>
          </div>
          <div>
            <ul class="font-medium text-black">
              <p>Entertaiment</p>
              <p>Food</p>
              <p>Inpirational</p>
            </ul>
          </div>
          <div>
            <ul class="font-medium text-black">
              <p>Entertaiment</p>
              <p>Food</p>
              <p>Inpirational</p>
            </ul>
          </div>
          <div>
            <ul class="font-medium text-black">
              <p>Entertaiment</p>
              <p>Food</p>
              <p>Inpirational</p>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8 dark:border-gray-700" />
      <div class="mt-1 grid grid-cols-3 gap-20 sm:grid-cols-3 sm:gap-60">
        <div>
          <img src="https://i.ibb.co/kBVssdS/youtzmedia-1-removebg-preview.png" alt="" class="h-24 w-24">
        <span class="mt-2 ml-1 text-sm text-black sm:text-start text-center">Hak Cipta © 2024 <a href="https://flowbite.com/" class="hover:underline">Youtz Media</a>All Rights Reserved. </span>
        </div>
        <div>
          <ul class="text-black">
            <p class="font-bold">Entertaiment</p>
            <p>FAQ</p>
            <p>Kontak</p>
            <p>Connect With Us</p>
            <div class="mt-5 flex sm:mt-0">
              <a href="#" class="ms-5 text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                  <polyline points="22,6 12,13 2,6" />
                </svg>
                <span class="sr-only">Email page</span>
              </a>
              <a href="#" class="ms-5 text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
                <span class="sr-only">Instagram page</span>
              </a>
              <a href="#" class="ms-5 text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                </svg>
                <span class="sr-only">Youtube account</span>
              </a>
              <a href="#" class="ms-5 text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                </svg>
                <span class="sr-only">LinkedIn account</span>
              </a>
      
              <a href="#" class="ms-5 text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                  <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                </svg>
                <span class="sr-only">Tiktok account</span>
              </a>
            </div>
          </ul>
        </div>
        <div>
          <ul class="text-black">
            <p class="font-bold">Location</p>
            <p>Jl. Lengkong Gudang Timur Raya No.79 A, Lengkong Gudang Timur, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</p>
          </ul>
        </div>
      </div>
    </div>
  
  <script>
    // Toggle Responsive Menu
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('responsive-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>