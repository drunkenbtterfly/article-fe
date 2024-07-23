<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Youtz Media</title>
    @vite('resources/css/app.css')
    <style>
      .menu {
        display: none;
      }

      .menu.active {
        display: block;
      }

      .group:hover .group-hover\\:block {
        display: block;
      }

      .group:hover .group-hover\\:hidden {
          display: none;
      }

      .group .group-hover\\:block {
          display: none;
      }

      .group .group-hover\\:hidden {
          display: block;
      }
  </style>
</head>
<body>
<nav class="bg-gradient-to-r from-[#b18de4] to-[#6db4e2] px-4 py-4 lg:px-40">
        <div class="flex items-center justify-between">
            <!-- logo youtz -->
            <div class="font-bold text-lg flex items-center">
                <a href="#">
                    <img src="{{ asset('images/youtzmedia.png') }}" alt="Logo" class="h-[80px]">
                </a>
            </div>
        
            <!-- Tombol hamburger untuk mobile -->
            <div class="md:hidden">
                <button id="hamburger" class="text-white focus:outline-none">
                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        
            <!-- Menu di bagian kanan -->
            <div id="menu" class="hidden md:flex md:items-center md:space-x-4">
                <a href="#" class="text-xl text-white font-semibold">Incubator</a>
                <a href="#" class="text-xl text-white font-semibold">FAQ</a>
                <a href="#" class="text-xl text-white font-semibold">Contact</a>
                <a href="#" class="text-xl text-white font-semibold ml-10">Contact</a>
                <a href="#" class="text-white">
                    <svg class="h-8 w-8 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35"/>
                        <circle cx="11" cy="11" r="8"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Menu untuk mobile -->
        <div id="mobile-menu" class="menu md:hidden mt-5">
            <a href="/latest" class="block text-xl font-semibold text-whiste py-2 text-white hover:text-[#cd3171]">Home</a>
            <a href="/faq" class="block text-xl font-semibold text-white py-2 hover:text-[#cd3171]">FAQ</a>
            <a href="#" class="block text-xl font-semibold text-white py-2 hover:text-[#cd3171]">Contact</a>
            <a href=""></a>
        </div>
    </nav>
    <nav class="p-2 bg-gradient-to-r from-[#cc7ee4] to-[#66c2e7]">
      <div class="flex justify-center items-center">
        <ul class="flex space-x-[30px] ml-2 md:ml-0 md:gap-5 text-xl md:text-xl font-semibold text-white overflow-x-auto overflow-y-hidden">
          <li class="hover:text-blue-600"><a href="/latest">Latest</a></li>
          <li class="hover:text-blue-600"><a href="/news">News</a></li>
          <li class="hover:text-blue-600"><a href="/entertaiment">Entertaiment</a></li>
          <li class="hover:text-blue-600"><a href="/healt">Healt</a></li>
          <li class="hover:text-blue-600"><a href="/finance">Finance</a></li>
          <li class="hover:text-blue-600"><a href="/tech">Tech</a></li>
          <li class="hover:text-blue-600"><a href="/travel">Travel</a></li>
          <li class="hover:text-blue-600"><a href="/automotive">Automotive</a></li>
          <li class="relative group">
            <a href="#" class="hover:text-blue-600 flex items-center">
                More
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </a>
            <ul class="absolute hidden text-gray-700 pt-1 group-hover:block">
                <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/submenu1">Submenu 1</a></li>
                <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/submenu2">Submenu 2</a></li>
                <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/submenu3">Submenu 3</a></li>
            </ul>
        </li>
        </ul>
      </div>
    </nav>


    <div class="content">
        @yield('content')
    </div>
        



    <footer class="p-5 lg:px-40">
      <main class="flex justify-start lg:justify-center items-start flex-col lg:flex-row gap-3 lg:gap-[100px]">
        <section class="flex flex-col">
          <img src="{{ asset('images/youtzmedia.png') }}" alt="ym" class="h-20 w-auto">
        </section>
        <section class="flex flex-col gap-2">
          <div>
            <p>SUPPORT</p>
          </div>
          <div class="flex flex-col">
            <a href="" class="text-gray-600">FAQ</a>
            <a href="" class="text-gray-600">Contact</a>
          </div>
        </section>
        <section class="flex flex-col gap-2">
        <div>
            <span>LOCATION</span>
          </div>
          <div>
            <span class="text-gray-600">Jl. Lengkong Gudang Timur Raya No.79 A, Lengkong Gudang Timur, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</span>
          </div>
        </section>
      </main>
      <hr class="my-8 bg-gray-500">
      <span class="ml-5">Hak Cipta © 2023 Youtz Media</span>
    </footer>


    <script>
      document.getElementById('hamburger').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('active');
      });

      document.addEventListener('click', function (event) {
      var dropdown = document.querySelector('.group');
      if (!dropdown.contains(event.target)) {
          dropdown.querySelector('ul').classList.add('hidden');
        }
      });

  </script>
</body>
</html>