<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food</title>
  <style src="../output.css"></style>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<?php
$makanan = [
    [
        'judul' => 'Daftar Makanan Unik Khas Indonesia yang Wajib kamu Ketahui !',
        'deskripsi' => 'Food - Hallo inc selain memiliki banyak sekali suku, budaya, dan bahasa, Indonesia juga memiliki ratusan bahkan ribuan',
        'tanda_berita' => 'tanda berita di sini',
        'kategori' => 'Food',
        'gambar' => 'https://i.ibb.co.com/4f9xZv1/Screenshot-2024-05-24-144154.png'
    ],
    [
        'judul' => 'Makanan Khas Sumatera yang Harus Dicoba',
        'deskripsi' => 'Sumatera memiliki banyak sekali makanan khas yang sangat lezat dan unik, yang wajib dicoba oleh semua orang.',
        'tanda_berita' => 'tanda berita di sini',
        'kategori' => 'Food',
        'gambar' => 'https://i.ibb.co.com/4f9xZv1/Screenshot-2024-05-24-144154.png'
    ],
    [
        'judul' => 'Kuliner Khas Jawa yang Menggugah Selera',
        'deskripsi' => 'Jawa juga memiliki berbagai macam kuliner khas yang sangat nikmat dan tidak boleh dilewatkan.',
        'tanda_berita' => 'tanda berita di sini',
        'kategori' => 'Food',
        'gambar' => 'https://i.ibb.co.com/4f9xZv1/Screenshot-2024-05-24-144154.png'
    ]
    ];

?>
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
  <nav class="p-2 bg-[#F3B95F]">
  <div class="flex justify-center items-center">
        <ul class="flex space-x-[70px] text-2xl text-white font-bold">
          <li class="hover:text-blue-600"><a href="/latest">Latest</a></li>
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
  

    <!-- Text -->
    <div class="p-10 my-2 mx-20">
      <h1 class="font-bold text-2xl">Hasil Pencarian</h1>
      <div class="my-2 relative inline-block text-left">
      <div class="inline-block relative text-left">
      <div>
        <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button-1" aria-expanded="true" aria-haspopup="true" onclick="toggleMenu('dropdown-menu-1')">
          Terbaru
          <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
      <div id="dropdown-menu-1" class="absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button-1" tabindex="-1">
        <div class="py-1" role="none">
          <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Edit</a>
          <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Duplicate</a>
        </div>
      </div>
    </div>

    <div class="inline-block relative text-left">
    <div>
      <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button-2" aria-expanded="true" aria-haspopup="true" onclick="toggleMenu('dropdown-menu-2')">
        Semua Tanggal
        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      </div>
      <div id="dropdown-menu-2" class="absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button-2" tabindex="-1">
        <div class="py-1" role="none">
          <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Edit</a>
          <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Duplicate</a>
        </div>
      </div>
      </div>
    </div>

    </div>

    <!-- hasil pencarian -->
    <?php foreach ($makanan as $item) : ?>
    <div class="py-5 px-10 mx-20 h-60 flex">
        <div class="flex justify-start flex-col gap-2">
            <h1 class="font-bold text-3xl"><?= htmlspecialchars($item['judul']); ?></h1>
            <p class="text-xl"><?= htmlspecialchars($item['deskripsi']); ?></p>
            <span class="text-red font-bold"><?= htmlspecialchars($item['tanda_berita']); ?></span>
            <span class="text-orange-400 font-bold"><?= htmlspecialchars($item['kategori']); ?></span>
        </div>
        <img src="<?= htmlspecialchars($item['gambar']); ?>" alt="Deskripsi gambar" class="ml-auto rounded-3xl">
    </div>
    <?php endforeach; ?>

    <div class="py-5 px-10 my-10 mx-20 h-80 rounded-2xl flex overflow-hidden relative">
        <div class="h-full w-full relative">
            <img src="https://i.ibb.co/4f9xZv1/Screenshot-2024-05-24-144154.png" alt="makanan" class="object-cover w-full h-full rounded-xl">
            <span class="absolute bottom-2 left-0 font-semibold text-white text-lg px-4 py-2 rounded-bl-xl">Rendang Makanan yang Populer</span>
        </div>
    </div>

    <?php foreach ($makanan as $item) : ?>
    <div class="py-5 px-10 mx-20 h-60 flex">
        <div class="flex justify-start flex-col gap-2">
            <h1 class="font-bold text-3xl"><?= htmlspecialchars($item['judul']); ?></h1>
            <p class="text-xl"><?= htmlspecialchars($item['deskripsi']); ?></p>
            <span class="text-red font-bold"><?= htmlspecialchars($item['tanda_berita']); ?></span>
            <span class="text-orange-400 font-bold"><?= htmlspecialchars($item['kategori']); ?></span>
        </div>
        <img src="<?= htmlspecialchars($item['gambar']); ?>" alt="Deskripsi gambar" class="ml-auto rounded-3xl">
    </div>
    <?php endforeach; ?>

    <div class="py-5 px-10 my-10 mx-20 h-auto rounded-t-2xl flex flex-col overflow-hidden relative">
        <div class="h-96 w-full relative">
            <img src="https://i.ibb.co/4f9xZv1/Screenshot-2024-05-24-144154.png" alt="makanan" class="object-cover w-full h-full rounded-t-xl">
            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-b from-transparent to-[#F3B95F] h-1/3"></div>
            <span class="absolute bottom-2 left-0 font-semibold text-white text-lg px-4 py-2 bg-black bg-opacity-50 rounded-bl-xl">Rendang Makanan yang Populer</span>
        </div>
        <div class="flex flex-row">
            <div class="h-72 w-1/3 flex items-center justify-center rounded-bl-xl relative">
              <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#F3B95F] opacity-50 rounded-bl-xl"></div>
              <img src="https://i.ibb.co/4f9xZv1/Screenshot-2024-05-24-144154.png" alt="Gambar 1" class="h-full w-full rounded-bl-xl">
            </div>
            <div class="h-72 w-1/3 flex items-center justify-center relative">
              <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#F3B95F] opacity-50 rounded-bl-xl"></div>
              <img src="https://i.ibb.co/4f9xZv1/Screenshot-2024-05-24-144154.png" alt="Gambar 1" class="h-full w-full">
            </div>
            <div class="h-72 w-1/3 flex items-center justify-center rounded-br-xl relative">
              <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#F3B95F] opacity-50 rounded-bl-xl"></div>
              <img src="https://i.ibb.co/4f9xZv1/Screenshot-2024-05-24-144154.png" alt="Gambar 1" class="h-full w-full rounded-br-xl">
            </div>
        </div>
    </div>

    <?php foreach ($makanan as $item) : ?>
    <div class="py-5 px-10 mx-20 h-60 flex">
        <div class="flex justify-start flex-col gap-2">
            <h1 class="font-bold text-3xl"><?= htmlspecialchars($item['judul']); ?></h1>
            <p class="text-xl"><?= htmlspecialchars($item['deskripsi']); ?></p>
            <span class="text-red font-bold"><?= htmlspecialchars($item['tanda_berita']); ?></span>
            <span class="text-orange-400 font-bold"><?= htmlspecialchars($item['kategori']); ?></span>
        </div>
        <img src="<?= htmlspecialchars($item['gambar']); ?>" alt="Deskripsi gambar" class="ml-auto rounded-3xl">
    </div>
    <?php endforeach; ?>

    <div class="flex justify-center my-4">
      <div aria-label="Page navigation example">
        <ul class="flex items-center -space-x-px h-10 text-base">
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
            <span class="sr-only">Previous</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
          </a>
        </li>
        <li>
          <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">1</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
            <span class="sr-only">Next</span>
            <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
          </a>
        </li>
        </ul>
      </div>
    </div>

  <footer class="mt-20 bg-gradient-to-br from-slate-50 to-[#F3B95F]">
    <div class="mx-auto w-full max-w-screen-xl p-2 py-6 lg:py-8">
      <div class="lg:flex md:hidden sm:hidden ml-[55px]">
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
      <hr class="my-6 border-gray-200 hidden sm:block mx-auto lg:my-8 dark:border-gray-700" />
      <div class="mt-1 grid grid-cols-1 sm:grid-cols-1 sm:justify-center lg:grid-cols-3 gap-6">
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
    function toggleMenu(menuId) {
      const menu = document.getElementById(menuId);
      menu.classList.toggle('hidden');
      menu.classList.toggle('transform');
      menu.classList.toggle('opacity-0');
      menu.classList.toggle('scale-95');
      menu.classList.toggle('opacity-100');
      menu.classList.toggle('scale-100');
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('[id^="menu-button"]') && !event.target.closest('[id^="dropdown-menu"]')) {
        const dropdowns = document.querySelectorAll('[id^="dropdown-menu"]');
        dropdowns.forEach(dropdown => {
          if (!dropdown.classList.contains('hidden')) {
            dropdown.classList.add('hidden');
            dropdown.classList.remove('opacity-100', 'scale-100');
            dropdown.classList.add('opacity-0', 'scale-95');
          }
        });
      }
    }
  </script>
</body>
</html>