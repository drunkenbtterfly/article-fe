<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Artikel</title>
    <style src="../output.css"></style>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body">

    <?php
// Data berita
$berita = array(
    array(
        'judul' => 'Daftar Makanan Unik Khas Indonesia yang Wajib kamu Ketahui !',
        'penulis' => 'Irpan Raharja',
        'tanggal' => 'Selasa, 12 Maret 2024',
        'isi' => 'Lorem ipsum - dolor sit amet consectetur. Risus mattis varius nisi sem cursus nec. Tortor semper lorem dictumst elit enim. Venenatis egestas rhoncus quam amet eleifend id iaculis ut donec. Velit gravida sit tortor aliquet. Condimentum nunc mattis felis felis.
        Sem viverra amet odio tempor cursus nibh ultricies sed. Bibendum rutrum facilisis volutpat porttitor tortor neque. Mauris montes eget dis egestas. Nunc tincidunt dui massa magnis sagittis ornare. Ut nisi ut commodo vel dolor dignissim rhoncus ullamcorper aliquam. Vel at tellus eu praesent. Sit id pellentesque mattis dolor tincidunt maecenas auctor laoreet aliquam. Massa volutpat odio duis risus elit. Adipiscing senectus quisque phasellus mi viverra odio nam. Tortor blandit tincidunt quis sit. Aliquam augue quis porta nulla auctor. Libero massa malesuada eget vulputate lorem.
        
        
        Lorem ipsum - dolor sit amet consectetur. Risus mattis varius nisi sem cursus nec. Tortor semper lorem dictumst elit enim. Venenatis egestas rhoncus quam amet eleifend id iaculis ut donec. Velit gravida sit tortor aliquet. Condimentum nunc mattis felis felis.
Sem viverra amet odio tempor cursus nibh ultricies sed. Bibendum rutrum facilisis volutpat porttitor tortor neque. Mauris montes eget dis egestas. Nunc tincidunt dui massa magnis sagittis ornare. Ut nisi ut commodo vel dolor dignissim rhoncus ullamcorper aliquam. Vel at tellus eu praesent. Sit id pellentesque mattis dolor tincidunt maecenas auctor laoreet aliquam. Massa volutpat odio duis risus elit. Adipiscing senectus quisque phasellus mi viverra odio nam. Tortor blandit tincidunt quis sit. Aliquam augue quis porta nulla auctor. Libero massa malesuada eget vulputate lorem.Lorem ipsum - dolor sit amet consectetur. Risus mattis varius nisi sem cursus nec. Tortor semper lorem dictumst elit enim. Venenatis egestas rhoncus quam amet eleifend id iaculis ut donec. Velit gravida sit tortor aliquet. Condimentum nunc mattis felis felis.
Sem viverra amet odio tempor cursus nibh ultricies sed. Bibendum rutrum facilisis volutpat porttitor tortor neque. Mauris montes eget dis egestas. Nunc tincidunt dui massa magnis sagittis ornare. Ut nisi ut commodo vel dolor dignissim rhoncus ullamcorper aliquam. Vel at tellus eu praesent. Sit id pellentesque mattis dolor tincidunt maecenas auctor laoreet aliquam. Massa volutpat odio duis risus elit. Adipiscing senectus quisque phasellus mi viverra odio nam. Tortor blandit tincidunt quis sit. Aliquam augue quis porta nulla auctor. Libero massa malesuada eget vulputate lorem.


Lorem ipsum - dolor sit amet consectetur. Risus mattis varius nisi sem cursus nec. Tortor semper lorem dictumst elit enim. Venenatis egestas rhoncus quam amet eleifend id iaculis ut donec. Velit gravida sit tortor aliquet. Condimentum nunc mattis felis felis.
Sem viverra amet odio tempor cursus nibh ultricies sed. Bibendum rutrum facilisis volutpat porttitor tortor neque. Mauris montes eget dis egestas. Nunc tincidunt dui massa magnis sagittis ornare. Ut nisi ut commodo vel dolor dignissim rhoncus ullamcorper aliquam. Vel at tellus eu praesent. Sit id pellentesque mattis dolor tincidunt maecenas auctor laoreet aliquam. Massa volutpat odio duis risus elit. Adipiscing senectus quisque phasellus mi viverra odio nam. Tortor blandit tincidunt quis sit. Aliquam augue quis porta nulla auctor. Libero massa malesuada eget vulputate lorem.


',
        'gambar' => 'https://i.ibb.co/30H3Tv9/Screenshot-2024-03-12-145032.png' // Ganti dengan URL gambar sesuai kebutuhan
    ),
    // Tambahkan berita lainnya sesuai kebutuhan
);
?>
<header>
    <nav class="bg-white p-4 mx-20 my-4">
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
    <hr class="border-black">
    <nav class="p-2">
      <div class="flex justify-center items-center">
        <ul class="flex space-x-[70px] text-2xl font-bold">
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
    <hr class="border-black">
  </header>


  <main class="mx-10 my-5">  
  <div class="container flex flex-wrap">

        <!-- Bagian Kiri -->
        <div class="w-full md:w-2/3 p-4 mb-4 md:mb-0 pl-20">
        <?php foreach ($berita as $item) : ?>
            <h2 class="flex justify-center text-2xl font-bold mb-4"><?php echo $item['judul']; ?></h2>
            <span class="flex justify-center text-[#FB88B4] font-bold"><?php echo $item['penulis']; ?></span>
            <span class="flex justify-center"><?php echo $item['tanggal']; ?></span>
    
            <div class="h-100 overflow-hidden rounded-xl bg-black my-5">
                <img src="<?php echo $item['gambar']; ?>" alt="" class="w-full object-cover">
            </div>
            <p><?php echo $item['isi']; ?></p>
            <div class="h-20 w-full bg-[#D9D9D9] rounded-xl overflow-hidden my-2">
              <div class="flex flex-col justify-center p-4">
                <h2 class="text-[#FB88B4] font-bold">Baca juga</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Lacus nisl ut est ac netus amet.</p>
              </div>
            </div>
            <!-- Isi konten bagian kiri di sini -->
        <?php endforeach; ?>
        <div class="py-5">
            <p class="font-bold">Jangan Lupa Ikuti Update Berita Lainnya dan Follow <br>
            Telegram Channel Kita  <span class="text-[#00A9FF]"><a href="">Youtz Media Channel</a></span></p>
        </div>

        <div>
            <p class="font-semibold">Tags</p>
            <div class="flex gap-5 py-2">
                <div class="bg-[#FB88B4] text-white rounded-lg shadow-xl p-1">#Automotive</div>
                <div class="bg-[#FB88B4] text-white rounded-lg shadow-xl p-1">#Tesla</div>
                <div class="bg-[#FB88B4] text-white rounded-lg shadow-xl p-1">#Formula 1</div>
            </div>
        </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="w-full md:w-1/3 p-4 px-10">
        <div class="bg-[#EDEDED] h-auto shadow-xl border-2 border-gray-200 rounded-[20px]">
          <div class="bg-[#FB88B4] flex justify-center items-center text-white font-bold text-2xl h-20 rounded-t-[20px] p-2">Terpopuler</div>
          <div class="grid grid-rows-8 grid-flow-col gap-4">
            <div class="flex justify-start items-start font-semibold p-5 mt-2"><span class="font-bold text-3xl mr-5">#1</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#2</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#3</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#4</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#5</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#6</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-start items-start font-semibold p-5"><span class="font-bold text-3xl mr-5">#7</span>Pertumbuhan Ekonomi Amerika Melesat 6,9% pada 2021 Meski ada Omicron</div>
            <div class="flex justify-center items-start text-xl text-[#FB88B4] font-bold mb-10">Terpopuler lainnya</div>
          </div>
        </div>
        <div class="bg-[#EDEDED] h-[600px] my-10"></div>
        </div>
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
              <span class="mt-2 mb-2 font-bold text-[#FB88B4]">Automotive</span>
              <span class="text-sm">Senin 15 November 2023</span>
            </div>
          </div>
          <div class="flex items-start">
            <img src="https://i.ibb.co/C9w1SbL/Screenshot-2024-03-05-132040.png" alt="" class="rounded-xl">
            <div class="flex flex-col p-2">
              <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
              <span class="mt-2 mb-2 font-bold text-[#FB88B4]">Automotive</span>
              <span class="text-sm">Senin 15 November 2023</span>
            </div>
          </div>
          <div class="flex items-start">
            <img src="https://i.ibb.co/1ZN340c/Screenshot-2024-03-05-132127.png" alt="" class="rounded-xl">
            <div class="flex flex-col p-2">
              <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
              <span class="mt-2 mb-2 font-bold text-[#FB88B4]">Automotive</span>
              <span class="text-sm">Senin 15 November 2023</span>
            </div>
          </div>
          <div class="flex items-start">
            <img src="https://i.ibb.co/s1Sj0QT/Screenshot-2024-03-05-132203.png" alt="" class="rounded-xl">
            <div class="flex flex-col p-2">
              <p class="font-semibold">Mendalaminya bagaimana komputer kuantum akan mengubah paradigma komputasi saat ini.</p>
              <span class="mt-2 mb-2 font-bold text-[#FB88B4]">Automotive</span>
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
  </main>
</body>

</html>
