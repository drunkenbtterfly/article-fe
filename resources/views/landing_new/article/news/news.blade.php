<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News</title>
  <style src="../output.css"></style>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
<?php
$articles = [
    [
        "img" => "images/latest1.png",
        "desc" => "Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024"
    ],
    [
        "img" => "images/latest1.png",
        "desc" => "Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024"
    ],
    [
        "img" => "images/latest1.png",
        "desc" => "Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024"
    ],
    [
        "img" => "images/latest1.png",
        "desc" => "Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024"
    ]
];
$articles2 = [
  [
      "img" => "images/latest1.png",
      "title" => "Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.",
      "category" => "Food",
      "date" => "Senin 15 November 2023"
  ],
  [
      "img" => "images/latest1.png",
      "title" => "Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.",
      "category" => "Food",
      "date" => "Senin 15 November 2023"
  ],
  [
      "img" => "images/latest1.png",
      "title" => "Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.",
      "category" => "Food",
      "date" => "Senin 15 November 2023"
  ],
  [
      "img" => "images/latest1.png",
      "title" => "Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.",
      "category" => "Food",
      "date" => "Senin 15 November 2023"
  ]
];
?>

<!-- Navbar 1 -->
<nav class="bg-white p-4 text-black mx-2 md:mx-20 my-4">
  <div class="flex justify-between items-center">
    <div class="flex items-end space-x-4 hidden md:flex">
      <a href="https://www.instagram.com/mhdirfaan__/"><img src="{{ asset('images/ig.png') }}" alt="Icon 1" class="h-6 w-6 rounded-[30px]" /></a>
      <a href="#"><img src="{{ asset('images/tele.png') }}" alt="Icon 2" class="h-6 w-6 rounded-[30px]" /></a>
      <a href="#"><img src="{{ asset('images/yt.png') }}" alt="Icon 3" class="h-6 w-6 rounded-[30px]" /></a>
      <a href="#"><img src="{{ asset('images/tt.png') }}" alt="Icon 4" class="h-6 w-6 rounded-[30px]" /></a>
      <a href="#"><img src="{{ asset('images/wa.png') }}" alt="Icon 5" class="h-6 w-6 rounded-[30px]" /></a>
    </div>

    <!-- Logo -->
    <div class="flex-shrink-0">
      <img src="{{ asset('images/youtz.png') }}" alt="Logo" class="h-[80px]">
    </div>

    <!-- Search -->
    <div class="flex items-center relative hidden md:flex">
      <input type="text" name="q" class="w-full border h-12 shadow p-4 rounded-full pl-12 placeholder-gray-500" placeholder="Search">
      <button type="submit" class="absolute left-0 flex items-center justify-center h-full w-12">
        <svg class="text-black h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
          <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
        </svg>
      </button>
    </div>

    <!-- Hamburger Menu -->
    <div class="md:hidden">
      <button id="hamburger-button" class="text-black focus:outline-none">
        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile -->
  <div id="mobile-menu" class="md:hidden hidden">
    <div class="p-4">
      <!-- Mobile Icons -->
      <div class="flex justify-center items-center space-x-4 mb-4">
        <a href="https://www.instagram.com/mhdirfaan__/"><img src="{{ asset('images/ig.png') }}" alt="Icon 1" class="h-6 w-6 rounded-[30px]" /></a>
        <a href="#"><img src="{{ asset('images/tele.png') }}" alt="Icon 2" class="h-6 w-6 rounded-[30px]" /></a>
        <a href="#"><img src="{{ asset('images/yt.png') }}" alt="Icon 3" class="h-6 w-6 rounded-[30px]" /></a>
        <a href="#"><img src="{{ asset('images/tt.png') }}" alt="Icon 4" class="h-6 w-6 rounded-[30px]" /></a>
        <a href="#"><img src="{{ asset('images/wa.png') }}" alt="Icon 5" class="h-6 w-6 rounded-[30px]" /></a>
      </div>
      <!-- Mobile Search -->
      <div class="flex items-center relative">
        <input type="text" name="q" class="w-full border h-12 shadow p-4 rounded-full pl-12 placeholder-gray-500" placeholder="Search">
        <button type="submit" class="absolute left-0 flex items-center justify-center h-full w-12">
          <svg class="text-black h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</nav>
  <nav class="p-2 bg-[#00A9FF]">
    <div class="flex justify-center items-center">
      <ul class="flex space-x-[70px] text-2xl text-white font-bold overflow-x-auto overflow-y-hidden">
        <li class="hover:text-blue-600"><a href="/latest">Latest</a></li>
        <li class="text-blue-600 hover:text-blue-600"><a href="/news">News</a></li>
        <li class="hover:text-blue-600"><a href="/entertaiment">Entertainment</a></li>
        <li class="hover:text-blue-600"><a href="/healt">Health</a></li>
        <li class="hover:text-blue-600"><a href="/finance">Finance</a></li>
        <li class="hover:text-blue-600"><a href="/tech">Tech</a></li>
        <li class="hover:text-blue-600"><a href="/travel">Travel</a></li>
        <li class="hover:text-blue-600"><a href="/automotive">Automotive</a></li>
        <li class="hover:text-blue-600 relative">
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white hover:text-blue-800 text-center inline-flex items-center" type="button">More <svg class="w-3 h-2.5 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
          </button>
  
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
      </div>
      </li>
      </ul>
    </div>
  </nav>

  <div class="container mx-auto flex flex-col lg:flex-row p-6 md:p-20 gap-20">

    <!-- Bagian Kiri (Text) -->
    <div class="lg:w-2/3 lg:order-first mb-10 lg:mb-0 flex flex-col justify-center">
      <div class="h-[319px] md:h-[587px] rounded-[25px] shadow-xl">
        <div class="flex flex-row relative">
          <div class="bg-black h-[314px] w-full rounded-t-[15px] relative">
              <img src="{{ asset('images/latest1.png') }}" alt="Deskripsi Gambar" class="w-full h-full object-cover rounded-[15px] md:rounded-t-[15px]">
              <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-[#00A9FF]"></div>
            <div class="absolute top-0 left-0 w-full h-full flex items-end justify-start p-5 text-white">
              <p>Ngeri! Resesi Amerika Bakal Terjadi Mulai Kuartal I/2024</p>
            </div>
          </div>
        </div>
      
      <div class="hidden md:block">
        <div class="flex">
        <div class="h-[273px] rounded-bl-[15px] w-1/3 overflow-hidden">
            <div class="h-full w-full relative">
                <img src="{{ asset('images/latest1.png') }}" alt="Deskripsi Gambar" class="w-full h-full rounded-bl-[15px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-[#00A9FF]"></div>
                <div class="absolute top-0 left-0 w-full h-full flex items-end justify-start p-5 text-white">
                    <p>Top 3 Berita Bola: Pesaing Mundur Teratur,</p>
                </div>
            </div>
        </div>
        <div class=" h-[273px] bg-green-300 w-1/3 overflow-hidden">
            <div class="h-full w-full relative">
                <img src="{{ asset('images/latest1.png') }}" alt="Deskripsi Gambar" class="w-full h-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-[#00A9FF]"></div>
                <div class="absolute top-0 left-0 w-full h-full flex items-end justify-start p-5 text-white">
                    <p>Top 3 Berita Bola: Pesaing Mundur Teratur,</p>
                </div>
            </div>
        </div>
        <div class="bg-red-300 rounded-br-[15px] h-full w-1/3 overflow-hidden">
            <div class="h-[273px] w-full relative">
                <img src="{{ asset('images/latest1.png') }}" alt="Deskripsi Gambar" class="w-full h-full rounded-br-[15px] object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-[#00A9FF]"></div>
                <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-end p-5 text-white">
                  <span class="bg-black p-2 w-[55px]  rounded-xl mb-2 items-start">News</span>  
                  <p class="items-end">Tidak Ada yang Tidak Mungkin untuk Menjadi Sukses</p>
                </div>
            </div>
        </div>
      </div>\
      </div>
    

      </div>
    </div>

    <!-- Bagian Ranan (Gambar) -->
    <div class="lg:w-1/3">
        <div class="bg-[#EDEDED] h-auto shadow-xl border-2 border-gray-200 rounded-[20px]">
          <div class="bg-[#00A9FF] flex justify-center items-center text-white font-bold text-2xl h-20 rounded-t-[20px] p-2">Terpopuler</div>
            <div class="m-2 md:hidden block">
              <div class="h-40 bg-gray-300 flex justify-center items-center">
                <h1 class="text-4xl font-semibold">Ads/iklan</h1>
              </div>
            </div>
          <div class="grid md:grid-rows-5 grid-rows-8 gap-4">
            <a href="#"><div class="flex justify-start items-start font-semibold p-5 mt-2 hover:underline"><span class="font-bold text-3xl mr-5">#1</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div></a>
            <a href="#"><div class="flex justify-start items-start font-semibold p-5 hover:underline"><span class="font-bold text-3xl mr-5">#2</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div></a>
            <a href="#"><div class="flex justify-start items-start font-semibold p-5 hover:underline"><span class="font-bold text-3xl mr-5">#3</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div></a>
            <a href="#"><div class="flex justify-start items-start font-semibold p-5 hover:underline"><span class="font-bold text-3xl mr-5">#4</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div></a>
            <div class="md:hidden block"><a href="#"><div class="flex justify-start items-start font-semibold p-5 hover:underline"><span class="font-bold text-3xl mr-5">#5</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div></a></div>
            <div class="md:hidden block"><a href="#"><div class="flex justify-start items-start font-semibold p-5 hover:underline"><span class="font-bold text-3xl mr-5">#6</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div></a></div>
            <div class="md:hidden block"><a href="#"><div class="flex justify-start items-start font-semibold p-5 hover:underline"><span class="font-bold text-3xl mr-5">#7</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div></a></div>
            <div class="md:hidden block"><a href="#"><div class="flex justify-start items-start font-semibold p-5 hover:underline"><span class="font-bold text-3xl mr-5">#8</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div></a></div>
            <a href="#"><div class="flex justify-center items-center text-xl text-[#00A9FF] font-bold hover:underline mb-10 md:mb-0">Terpopuler lainnya < </div></a>
          </div>
        </div>
      </div> 
  </div>

  <!-- Rekomendasi -->
  <div class="flex justify-start items-start p-10">
    <div class="bg-[#00A9FF] h-10 w-5"></div>
    <h1 class="text-4xl">Rekomendasi</h1>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 p-5 sm:p-10 lg:p-20">
    <?php foreach ($articles as $article): ?>
        <div class="flex flex-row relative">
            <div class="bg-black h-64 sm:h-[364px] w-full rounded-[15px] relative overflow-hidden">
                <img src="<?php echo asset($article['img']); ?>" alt="Deskripsi Gambar" class="w-full h-full object-cover rounded-[15px]">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-black rounded-[15px]"></div>
                <div class="absolute top-0 left-0 w-full h-full flex items-end justify-start p-5 text-white">
                    <p><?php echo $article['desc']; ?></p>
                </div>
            </div>      
        </div>
    <?php endforeach; ?>
  </div>

  <div class="py-5 px-20">
    <div class="h-60 bg-gray-300 flex justify-center items-center">
      <h1 class="text-4xl font-semibold">Ads/iklan</h1>
    </div>
  </div>

  <div class="flex flex-col md:flex-row">

    <!-- Berita Baru -->
    <div class="md:w-2/3 mb-4 md:mb-0 p-4 md:p-20 order-2 md:order-1">
        <div class="flex justify-start items-start p-4 md:p-10">
            <div class="bg-[#00A9FF] h-10 w-5"></div>
            <h1 class="text-4xl ml-2">Berita Baru</h1>
        </div>
        <hr class="border-black">
        <div class="bg-white px-4 py-10">
            <div class="flex flex-col gap-10">
                <?php foreach ($articles2 as $article2): ?>
                    <div class="flex items-start">
                        <img src="<?php echo asset($article2['img']); ?>" alt="Deskripsi Gambar" class="rounded-xl h-24 w-24 md:h-auto md:w-auto">
                        <div class="flex flex-col p-2 justify-center items-start py-5">
                            <p class="font-bold"><?php echo $article2['title']; ?></p>
                            <span class="mt-2 mb-2 font-bold text-orange-300"><?php echo $article2['category']; ?></span>
                            <span class="text-sm"><?php echo $article2['date']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Ads -->
    <div class="md:w-1/3 md:order-2 p-4 md:p-20 order-1">
        <div class="bg-white p-4">
            <div class="bg-[#E4E4E4] p-20 h-[550px] w-full">
                <h1 class="flex justify-center items-center text-3xl font-bold p-10">Ads / iklan posisi tidak fixed</h1>
            </div>
        </div>
    </div>

  </div>


  <div class="py-5 px-20">
    <div class="h-60 bg-gray-300 flex justify-center items-center">
      <h1 class="text-4xl font-semibold">Ads/iklan</h1>
    </div>
  </div>

  <footer class="mt-20 bg-gradient-to-br from-slate-50 to-[#00A9FF]">
    <div class="mx-auto w-full max-w-screen-xl p-2 py-6 lg:py-8">
        <div class="md:flex md:justify-between ml-[55px]">
            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-20 sm:grid-cols-2 sm:gap-10 hidden md:block">
                <div class="mb-6 md:mb-0">
                    <ul class="font-bold text-black">
                        <li>Entertainment</li>
                        <li>Food</li>
                        <li>Inspirational</li>
                    </ul>
                </div>
                <div class="mb-6 md:mb-0">
                    <ul class="font-medium text-black">
                        <li>Entertainment</li>
                        <li>Food</li>
                        <li>Inspirational</li>
                    </ul>
                </div>
                <div class="mb-6 md:mb-0">
                    <ul class="font-medium text-black">
                        <li>Entertainment</li>
                        <li>Food</li>
                        <li>Inspirational</li>
                    </ul>
                </div>
                <div>
                    <ul class="font-medium text-black">
                        <li>Entertainment</li>
                        <li>Food</li>
                        <li>Inspirational</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8 dark:border-gray-700 hidden md:block" />
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3 sm:gap-10">
            <div>
                <img src="{{ asset('images/youtz.png') }}" alt="" class="h-24 w-24 mx-auto sm:mx-0">
                <span class="block mt-2 text-sm text-center text-black sm:text-left">Hak Cipta © 2024 <a href="https://flowbite.com/" class="hover:underline">Youtz Media</a> All Rights Reserved.</span>
            </div>
            <div class="text-black">
                <p class="font-bold">Entertainment</p>
                <ul>
                    <li>FAQ</li>
                    <li>Kontak</li>
                    <li>Connect With Us</li>
                </ul>
                <div class="mt-5 flex justify-center sm:justify-start">
                    <a href="#" class="ml-5 text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                        <span class="sr-only">Email page</span>
                    </a>
                    <!-- Add other social media icons here -->
                </div>
            </div>
            <div class="text-black">
                <p class="font-bold">Location</p>
                <p>Jl. Lengkong Gudang Timur Raya No.79 A, Lengkong Gudang Timur, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</p>
            </div>
        </div>
    </div>
</footer>

  
    <script>
      // dropdown menu
      const dropdownButton = document.getElementById('dropdownDefaultButton');
      const dropdownMenu = document.getElementById('dropdown');
      dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
      });
    
      document.addEventListener('click', function(event) {
        const isClickInsideDropdown = dropdownButton.contains(event.target) || dropdownMenu.contains(event.target);
        if (!isClickInsideDropdown) {
          dropdownMenu.classList.add('hidden');
        }
      });

      // navbar 1
      document.getElementById('hamburger-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
      });

    </script>
    
</body>
</html>