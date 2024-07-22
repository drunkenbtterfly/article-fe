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
  </style>
</head>
<body>
<nav class="bg-gradient-to-r from-[#b18de4] to-[#6db4e2] px-4 py-4 md:px-20">
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
                <a href="#" class="text-2xl font-bold">Incubator</a>
                <a href="#" class="text-2xl font-bold">FAQ</a>
                <a href="#" class="text-2xl font-bold">Contact</a>
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
    <nav class="p-2 bg-gradient-to-r from-[#cc7ee4] to-[#66c2e7]">
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


    <div class="content">
        @yield('content')
    </div>
        



    <footer class="p-2">
      <main class="flex justify-start items-start flex-col gap-3">
        <section class="flex flex-col">
          <img src="{{ asset('images/youtzmedia.png') }}" alt="ym" class="h-20 w-auto">
        </section>
        <section class="flex flex-col gap-2">
          <div>
            <p>SUPPORT</p>
          </div>
          <div class="flex flex-col">
            <span>FAQ</span>
            <span>Contact</span>
          </div>
        </section>
        <section class="flex flex-col gap-2">
        <div>
            <span>LOCATION</span>
          </div>
          <div>
            <span>Jl. Lengkong Gudang Timur Raya No.79 A, Lengkong Gudang Timur, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</span>
          </div>
        </section>
      </main>
      <hr class="m-8">
      <span class="ml-5">Hak Cipta © 2023 Youtz Media</span>
    </footer>


    <script>
      document.getElementById('hamburger').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('active');
    });
  </script>
</body>
</html>