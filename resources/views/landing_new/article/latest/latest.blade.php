<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latest</title>
  <style src="../output.css"></style>
  <style>
    .menu {
      display: none;
    }

    .menu.active {
      display: block;
    }
  </style>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
<header>
  <nav class="bg-white p-4 mx-2 md:mx-20 my-4">
        <div class="flex items-center justify-between">
            <!-- logo youtz -->
            <div class="font-bold text-lg flex items-center">
                <a href="#">
                    <img src="{{ asset('images/youtzmedia.png') }}" alt="Logo" class="h-[80px]">
                </a>
            </div>
        
            <!-- Tombol hamburger untuk mobile -->
            <div class="md:hidden">
                <button id="hamburger" class="text-black focus:outline-none">
                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        
            <!-- Menu di bagian kanan -->
            <div id="menu" class="hidden md:flex md:items-center md:space-x-4">
                <a href="#" class="text-2xl font-bold">Home</a>
                <a href="#" class="text-2xl font-bold">Incubator</a>
                <a href="#" class="text-2xl font-bold">FAQ</a>
                <a href="#" class="text-2xl font-bold ml-10">Contact</a>
                <a href="#" class="text-black">
                    <svg class="h-8 w-8 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35"/>
                        <circle cx="11" cy="11" r="8"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Menu untuk mobile -->
        <div id="mobile-menu" class="menu md:hidden mt-5">
            <a href="/latest" class="block text-2xl font-bold py-2 hover:underline">Home</a>
            <a href="/incubator" class="block text-2xl font-bold py-2 hover:underline">Incubator</a>
            <a href="/faq" class="block text-2xl font-bold py-2 hover:underline">FAQ</a>
            <a href="#" class="block text-2xl font-bold py-2 hover:underline">Contact</a>
        </div>
    </nav>
    <hr class="border-black">
    <nav class="p-2">
      <div class="flex justify-center items-center">
        <ul class="flex space-x-[30px] ml-2 md:ml-0 md:space-x-[70px] text-xl md:text-2xl font-bold overflow-x-auto overflow-y-hidden">
          <li class="text-blue-600 hover:text-blue-600"><a href="/latest">Latest</a></li>
          <li class="hover:text-blue-600"><a href="/news">News</a></li>
          <li class="hover:text-blue-600"><a href="/entertaiment">Entertaiment</a></li>
          <li class="hover:text-blue-600"><a href="/healt">Healt</a></li>
          <li class="hover:text-blue-600"><a href="/finance">Finance</a></li>
          <li class="hover:text-blue-600"><a href="/tech">Tech</a></li>
          <li class="hover:text-blue-600"><a href="/travel">Travel</a></li>
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
    <hr class="border-black">
  </header>

  <!-- 1 -->
  <div class="flex flex-col sm:flex-row">

    <div class="w-full sm:w-2/3 p-10 md:p-20">
      <div class="relative bg-black h-[348px] rounded-xl overflow-hidden transition-transform duration-300 transform hover:scale-105">
        <img src="{{ asset('images/latest1.png') }}" alt="" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
        <div class="absolute bottom-0 left-0 flex flex-col justify-end p-5 text-white">
            <span class="relative z-10 bg-black p-2 w-20 text-center rounded-[60px]">Travel</span>    
            <p class="font-bold text-3xl text-white p-2">5 Rekomendasi Pantai Indah di Wilayah Bali, Wajib Kamu Kunjungi!</p>
        </div>    
      </div>    
      <div class="hidden sm:grid grid-cols-3 gap-4 my-10">
        <div class="relative bg-black mr-5 h-60 rounded-xl overflow-hidden transition-transform duration-300 transform hover:scale-105">
          <img src="{{ asset('images/latest3.png') }}" alt="" class="h-full w-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
          <div class="absolute bottom-0 left-0 p-4 text-white">
            <span class="relative z-10 bg-black p-2 w-20 text-center rounded-[60px]">Tech</span>
            <p class="text-sm font-bold p-2">Apakah Apple Vision Pro Lebih Bagus dari Buatan Mark Zuckerberg?</p>
          </div>
        </div>
        <div class="col-span-2 h-60 bg-black rounded-xl relative overflow-hidden transition-transform duration-300 transform hover:scale-105">
          <img src="{{ asset('images/latest.png') }}" alt="" class="h-full w-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black"></div>
          <div class="absolute bottom-0 left-0 p-4 text-white">
              <span class="relative z-10 bg-black p-2 w-20 text-center rounded-full">News</span>
              <p class="text-lg font-bold p-2">Apakah Apple Vision Pro Lebih Bagus dari Buatan Mark Zuckerberg?</p>
          </div>
        </div>    
      </div>
    </div>
  
    <div class="hidden lg:block w-full lg:w-1/3 mt-4 sm:ml-4 py-20 mr-7">
      <div class="flex flex-col gap-9">
        <a href="/articlefood">
        <div class="flex items-start md:h-30 h-44 rounded-xl overflow-hidden md:px-5 lg:p-0">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="rounded-xl sm:h-20 md:h-40 lg:h-36 xl:h-44 w-[220px] md:ml-10 lg:m-0">
          <div class="flex flex-col mx-2 gap-2">
            <span class="font-bold text-orange-300">Food</span>
            <span class="text-sm">Senin 15 November 2023</span>
            <p class="font-semibold md:text-xs">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
          </div>
        </div>
      </a>
        <div class="flex items-start h-44 rounded-xl overflow-hidden">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="rounded-xl h-full w-[220px]">
          <div class="flex flex-col mx-2 gap-2">
            <span class=" font-bold text-[#00A9FF]">Health</span>
            <span class="text-sm">Senin 15 November 2023</span>
            <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
          </div>
        </div>
        <div class="flex items-start h-44 rounded-xl overflow-hidden">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="rounded-xl h-full w-[220px]">
          <div class="flex flex-col mx-2 gap-2">
            <span class=" font-bold text-[#EE463C]">Sport</span>
            <span class="text-sm">Senin 15 November 2023</span>
            <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Highlights -->
  <div class="flex justify-start items-start px-20 py-5">
    <div class="bg-[#00A9FF] h-10 w-5"></div>
    <h1 class="text-4xl">Highlights</h1>
  </div>
  <hr class="border-black mx-20">
    <div class="flex justify-between flex-row gap-10 overflow-x-auto px-20 py-10">
    <div class="relative">
      <div class="h-80 w-80 overflow-hidden rounded-2xl transition-transform duration-300 transform hover:scale-105">
        <img src="{{ asset('images/latest1.png') }}" alt="" class="h-full w-auto object-fill">
      </div>
      <div class="absolute bottom-[-40px] left-1/2 transform -translate-x-1/2 w-full text-center">
        <p class="bg-[#D9D9D9] rounded-2xl h-[100px] w-60 flex justify-center items-center shadow-xl font-semibold mx-auto">Mendalaminya bagaimana komputer kuantum akan</p>
      </div>
    </div>
    <div class="relative">
      <div class="h-80 w-80 overflow-hidden rounded-2xl transition-transform duration-300 transform hover:scale-105">
        <img src="{{ asset('images/latest1.png') }}" alt="" class="h-full w-auto object-fill">
      </div>
      <div class="absolute bottom-[-40px] left-1/2 transform -translate-x-1/2 w-full text-center">
        <p class="bg-[#D9D9D9] rounded-2xl h-[100px] w-60 flex justify-center items-center shadow-xl font-semibold mx-auto">Mendalaminya bagaimana komputer kuantum akan</p>
      </div>
    </div>
    <div class="relative">
      <div class="h-80 w-80 overflow-hidden rounded-2xl transition-transform duration-300 transform hover:scale-105">
        <img src="{{ asset('images/latest1.png') }}" alt="" class="h-full w-auto object-cover">
      </div>
      <div class="absolute bottom-[-40px] left-1/2 transform -translate-x-1/2 w-full text-center">
        <p class="bg-[#D9D9D9] rounded-2xl h-[100px] w-60 flex justify-center items-center shadow-xl font-semibold mx-auto">Mendalaminya bagaimana komputer kuantum akan</p>
      </div>
    </div>
    <div class="relative">
      <div class="h-80 w-80 overflow-hidden rounded-2xl transition-transform duration-300 transform hover:scale-105">
        <img src="{{ asset('images/latest1.png') }}" alt="" class="h-full w-auto object-fill">
      </div>
      <div class="absolute bottom-[-40px] left-1/2 transform -translate-x-1/2 w-full text-center">
        <p class="bg-[#D9D9D9] rounded-2xl h-[100px] w-60 flex justify-center items-center shadow-xl font-semibold mx-auto">Mendalaminya bagaimana komputer kuantum akan</p>
      </div>
    </div>
  </div>
  <hr class="border-black mx-20 my-10">

  <!-- Rekomendasi -->
  <div class="flex flex-col md:flex-row px-10">

    <div class="md:w-2/3 md:order-1 sm:px-10 hidden lg:block">
      <div class="flex justify-start items-start">
        <div class="bg-[#00A9FF] h-10 w-5"></div>
        <h1 class="text-4xl">Rekomendasi</h1>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 px-3 sm:my-10">  
        <div class="relative bg-black h-[262px] border-1 border-black w-full rounded-xl shadow-3xl inset overflow-hidden">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="w-full h-full object-cover">
          <div class="absolute inset-0 flex items-end justify-start">
            <div class="w-full bg-gradient-to-b from-transparent to-black text-white p-4 rounded-b-xl">
              <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
            </div>
          </div>    
        </div>
        <div class="relative bg-black h-[262px] border-1 border-black w-full rounded-xl shadow-3xl inset overflow-hidden">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="w-full h-full object-cover">   
          <div class="absolute inset-0 flex items-end justify-start">
            <div class="w-full bg-gradient-to-b from-transparent to-black text-white p-4 rounded-b-xl">
              <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
            </div>
          </div> 
        </div>
        <div class="relative bg-black h-[262px] border-1 border-black w-full rounded-xl shadow-3xl inset overflow-hidden">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="w-full h-full object-cover">  
          <div class="absolute inset-0 flex items-end justify-start">
            <div class="w-full bg-gradient-to-b from-transparent to-black text-white p-4 rounded-b-xl">
              <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
            </div>
          </div>  
        </div>
        <div class="relative bg-black h-[262px] border-1 border-black w-full rounded-xl shadow-3xl inset overflow-hidden">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="w-full h-full object-cover">    
          <div class="absolute inset-0 flex items-end justify-start">
            <div class="w-full bg-gradient-to-b from-transparent to-black text-white p-4 rounded-b-xl">
              <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="relative bg-black h-[262px] border-1 border-black w-full rounded-xl shadow-3xl inset overflow-hidden">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="w-full h-full object-cover">    
          <div class="absolute inset-0 flex items-end justify-start">
            <div class="w-full bg-gradient-to-b from-transparent to-black text-white p-4 rounded-b-xl">
              <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="relative bg-black h-[262px] border-1 border-black w-full rounded-xl shadow-3xl inset overflow-hidden">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="w-full h-full object-cover">    
          <div class="absolute inset-0 flex items-end justify-start">
            <div class="w-full bg-gradient-to-b from-transparent to-black text-white p-4 rounded-b-xl">
              <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="md:w-1/3 md:order-2 py-20 px-10">
      <div class="flex justify-start items-start p-3">
        <div class="bg-[#00A9FF] h-10 w-5"></div>
        <h1 class="text-4xl">Berita Terpopuler</h1>
      </div>
      <hr class="border-black">
      <div class="grid grid-rows-5 grid-flow-col gap-4">
        <div class="flex justify-start items-start font-semibold p-5 mt-2"><span class="font-bold text-3xl mr-5">#1</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
        <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#2</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
        <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#3</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
        <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#4</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
        <div class="flex justify-center items-center text-xl text-[#00A9FF] font-bold">Terpopuler lainnya</div>
      </div>
    </div>

  </div>

  <div class="flex flex-col md:flex-row">

  <div class="md:w-2/3 mb-4 md:mb-0 p-4 md:p-20 order-2 md:order-1">
    <div class="flex justify-start items-start p-4 md:p-10">
      <div class="bg-[#00A9FF] h-10 w-5"></div>
      <h1 class="text-4xl ml-2">Berita Baru</h1>
    </div>
    <hr class="border-black">
    <div class="bg-white px-4 py-10">
      <div class="flex flex-col gap-10">
        <div class="flex items-start">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="rounded-xl h-24 w-24 md:h-auto md:w-auto">
          <div class="flex flex-col p-2 justify-center items-start py-5">
            <p class="font-bold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
            <span class="mt-2 mb-2 font-bold text-orange-300">Food</span>
            <span class="text-sm">Senin 15 November 2023</span>
          </div>
        </div>
        <div class="flex items-start">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="rounded-xl h-24 w-24 md:h-auto md:w-auto">
          <div class="flex flex-col p-2">
            <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
            <span class="mt-2 mb-2 font-bold text-orange-300">Food</span>
            <span class="text-sm">Senin 15 November 2023</span>
          </div>
        </div>
        <div class="flex items-start">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="rounded-xl h-24 w-24 md:h-auto md:w-auto">
          <div class="flex flex-col p-2">
            <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
            <span class="mt-2 mb-2 font-bold text-orange-300">Food</span>
            <span class="text-sm">Senin 15 November 2023</span>
          </div>
        </div>
        <div class="flex items-start">
          <img src="{{ asset('images/latest1.png') }}" alt="" class="rounded-xl h-24 w-24 md:h-auto md:w-auto">
          <div class="flex flex-col p-2">
            <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
            <span class="mt-2 mb-2 font-bold text-orange-300">Food</span>
            <span class="text-sm">Senin 15 November 2023</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="md:w-1/3 p-4 md:p-20 order-1 md:order-2">
    <div class="flex justify-start items-start p-4 md:p-10">
      <div class="bg-[#00A9FF] h-10 w-5"></div>
      <h1 class="text-4xl ml-2">Follow Us :</h1>
    </div>
    <hr class="border-black">
    <div class="bg-white p-4">
      <div class="bg-[#E4E4E4] p-10 md:p-20 h-auto md:h-[550px]">
        <h1 class="flex justify-center items-center text-3xl font-bold p-10">Ads / iklan posisi tidak fixed</h1>
      </div>
    </div>
  </div>

</div>

  <div class="mt-4 grid md:gird-cols-1 lg:grid-cols-3 gap-20 p-10 md:p-20">
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#00A9FF] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">Entertaiment</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/entertaiment.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div>    
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#5375F0] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">Health</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/health.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div> 
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#F3B95F] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">Food</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/food.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div> 
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#CC7EE4] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">News</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/news.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div> 
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#5375F0] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">Travel</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/travel.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div> 
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#E180FF] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">Finance</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/finance.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div> 
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#FFB84C] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">Sport</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/sports.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div> 
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#FB88B4] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">Education</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/education.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div> 
    <div class="">
      <div class="flex mb-5">
        <div class="bg-[#FF7DE2] h-10 w-5"></div>
        <h1 class="text-4xl font-semibold ml-3">Tech</h1>
      </div>
      <div class="relative h-[270px]">
        <img src="{{ asset('images/tech.png') }}" alt="Deskripsi gambar" class="h-full w-full rounded-xl" />
        <div class="absolute inset-0 flex items-end justify-start">
          <div class="w-full bg-gradient-to-b from-transparent to-[#4F4D4D] text-white p-4 rounded-b-xl">
            <p class="text-lg font-semibold">Lorem ipsum dolor sit amet</p>
          </div>
        </div>
      </div>
    </div> 
  </div>

  <div class="py-5 px-20">
    <div class="h-60 bg-gray-300 flex justify-center items-center">
      <h1 class="text-4xl font-semibold">Ads/iklan</h1>
    </div>
  </div>

  <footer class="mt-20 bg-gradient-to-tr from-[#9B4BB7] to-[#3E87C3] text-white font-montserrat">
    <div class="mx-auto w-full max-w-screen-xl p-2 py-6 lg:py-8">
      <div class="md:flex md:justify-between ml-[55px]">
        <div class="mt-1 grid grid-cols-4 gap-20 sm:grid-cols-4 sm:gap-60">
          <div class="hidden lg:block">
            <ul class="font-bold text-black">
              <p>Entertaiment</p>
              <p>Food</p>
              <p>Inpirational</p>
            </ul>
          </div>
          <div class="hidden lg:block">
            <ul class="font-medium text-black">
              <p>Entertaiment</p>
              <p>Food</p>
              <p>Inpirational</p>
            </ul>
          </div>
          <div class="hidden lg:block">
            <ul class="font-medium text-black">
              <p>Entertaiment</p>
              <p>Food</p>
              <p>Inpirational</p>
            </ul>
          </div>
          <div class="hidden lg:block">
            <ul class="font-medium text-black">
              <p>Entertaiment</p>
              <p>Food</p>
              <p>Inpirational</p>
            </ul>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8 dark:border-gray-700 hidden lg:block" />
      <div class="mt-1 grid grid-cols-3 gap-20 sm:grid-cols-3 sm:gap-60">
        <div class="flex flex-col items-center sm:items-start sm:flex-row">
          <img src="{{ asset('images/youtzmedia.png') }}" alt="" class="h-24 w-24">
        <span class="mt-2 ml-1 text-sm text-black sm:text-start text-center">Hak Cipta © 2024 <a href="https://flowbite.com/" class="hover:underline">Youtz Media</a>All Rights Reserved. </span>
        </div>
        <div class="">
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
        <div class="hidden lg:block">
          <ul class="text-black">
            <p class="font-bold">Location</p>
            <p>Jl. Lengkong Gudang Timur Raya No.79 A, Lengkong Gudang Timur, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</p>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>
    document.getElementById('hamburger').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('active');
    });
  </script>

</body>
</html>