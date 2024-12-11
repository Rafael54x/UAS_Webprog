<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acara Rutin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap"
      rel="stylesheet"
    />
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
              white: "#FFFFFF",
              black: "#1E1E1E",
              grey: "#F0F0F0",
              oldgrey: "#737373"
            },
            fontFamily: {
              rethink: ["'Rethink Sans'", "sans-serif"],
              inter: ["'Inter'", "sans-serif"],
            },
          },
        },
      };
    </script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body class="bg-grey">
    <nav class="bg-white shadow-md fixed w-full z-10">
      <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center space-x-3">
          <img src="/img/logo.png" alt="GBI Sion Karawang Logo" class="h-10 w-auto">
          <a href="/" class="text-xl font-bold text-gray-800">GBI Sion Karawang</a>
        </div>
        <ul class="flex space-x-6 text-gray-600 font-medium">
          <li><a href="/" class="hover:text-gray-900">Home</a></li>
          <li><a href="/jadwal" class="hover:text-gray-900">Jadwal</a></li>
          <li><a href="/image" class="hover:text-gray-900">Galeri</a></li>
          <li><a href="/daftar" class="hover:text-gray-900">Pendaftaran</a></li>
          <li><a href="/kritik-saran" class="hover:text-gray-900">Kritik & Saran</a></li>
          <li><a href="/faq" class="hover:text-gray-900">FAQ</a></li>
          <li><a href="/about-us" class="hover:text-gray-900">About Us</a></li>
        </ul>
        <div class="flex space-x-4 text-gray-600">
          <a href="#" class="hover:text-gray-900">🔍</a>
          <a href="#" class="hover:text-gray-900">⚙</a>
          <a href="#" class="hover:text-gray-900">📹</a>
        </div>
      </div>
    </nav>
    <h1 class="h-[80px] text-center bg-white shadow-lg"></h1>
    <div>
        <div>
          <img src="/img/header.jpg" alt="Header" class="h-[350px] object-cover w-full">
        </div>
      <h1
        class="mt-12 font-inter font-extrabold text-[50px] text-center"
      >
        Jadwal Latihan
      </h1>
    </div>

    <div class="flex flex-row gap-8 mx-32 mt-12">
        

      <div class="relative">
        <img src="/img/ibadah.png" alt="Ibadah RBI" class="w-full h-auto hover:scale-95 ease-out duration-200">
        <div class="absolute bottom-4 left-4">
          <p class="font-inter font-bold text-[30px] text-white">Ibadah RBI</p>
          <p class="font-rethink text-[20px] text-white">
            Setiap Minggu Pukul 11.00
          </p>
          <p class="font-rethink text-[20px] text-white">Gedung gereja</p>
        </div>
      </div>
      <div class="relative">
        <img src="/img/sport.png" alt="RPB Sport" class="w-full h-auto hover:scale-95 ease-out duration-200">
        <div class="absolute bottom-4 left-4">
          <p class="font-inter font-bold text-[30px] text-white">RPB Sport</p>
          <p class="font-rethink font-normal text-[20px] text-white">
            Sabtu Minggu ke-3 setiap bulan
          </p>
        </div>
      </div>
      <div class="relative">
        <img src="/img/fellow.png" alt="Fellow" class="w-full h-auto hover:scale-95 ease-out duration-200"/>
        <div class="absolute bottom-4 left-4">
          <p class="font-inter font-bold text-[30px] text-white">Fellowship</p>
          <p class="font-rethink text-[20px] text-white">
            Minggu ke-4 setiap bulan
          </p>
        </div>
      </div>
    </div>

    <div class="mx-32 mt-12 mb-10">
      <table class="w-full text-left font-rethink shadow-lg overflow-hidden rounded-[25px]">
        <thead class="bg-oldgrey text-white text-lg">
          <tr>
            <th class="py-4 px-6 font-inter font-bold text-lg tracking-wide">Acara</th>
            <th class="py-4 px-6 font-inter font-bold text-lg tracking-wide">Waktu</th>
            <th class="py-4 px-6 font-inter font-bold text-lg tracking-wide">Lokasi</th>
          </tr>
        </thead>
        <tbody class="bg-white rounded-b-lg font-medium">
          <tr class="border-b font-medium">
            <td class="py-4 px-6 font-inter text-black">Ibadah RBI</td>
            <td class="py-4 px-6 font-inter text-black">
              Setiap Minggu Pukul 11.00
            </td>
            <td class="py-4 px-6 font-inter text-black">Gedung gereja</td>
          </tr>
          <tr class="border-b">
            <td class="py-4 px-6 font-inter text-black">RPB Sport</td>
            <td class="py-4 px-6 font-inter text-black">
              Setiap hari Sabtu, Minggu ke-3
            </td>
            <td class="py-4 px-6 font-inter text-black">Gedung olahraga</td>
          </tr>
          <tr>
            <td class="py-4 px-6 font-inter text-black">Fellowship</td>
            <td class="py-4 px-6 font-inter text-black">
              Setiap Minggu ke-4 Pukul 11.00
            </td>
            <td class="py-4 px-6 font-inter text-black">Gedung gereja</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
  <footer class="bg-white py-8 border-t border-gray-300 w-full">
    <div class="flex flex-col md:flex-row items-center justify-between text-center md:text-left px-6 md:px-12 lg:px-24">
        <!-- Logo and Name -->
        <div class="mb-6 md:mb-0 flex flex-col items-center md:items-start">
            <img src="/img/logo.png" alt="Logo" class="w-16 h-16 mb-2">
            <h3 class="text-xl font-bold">GBI SION KARAWANG</h3>
            <p class="text-sm text-gray-600">© GBI Sion Karawang, Inc.</p>
        </div>

        <!-- Contact Info -->
        <div class="mb-6 md:mb-0">
            <h4 class="text-lg font-bold mb-2">CONTACT</h4>
            <p class="text-sm text-gray-700">
                Email: <a href="mailto:rbisionkarawang@gmail.com" class="text-blue-500 hover:underline">rbisionkarawang@gmail.com</a>
            </p>
            <p class="text-sm text-gray-700">
                Jl. Tuparev No.335, RT.2/RW.31, Nagasari,<br>
                Kec. Karawang Bar., Karawang, Jawa Barat 41312
            </p>
        </div>

        <!-- Social Media Links -->
        <div>
            <h4 class="text-lg font-bold mb-2">FOLLOW US</h4>
            <div class="flex space-x-4 justify-center md:justify-start">
                <a href="#" class="text-gray-600 hover:text-blue-500"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600 hover:text-blue-500"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-600 hover:text-blue-500"><i class="fab fa-spotify"></i></a>
                <a href="#" class="text-gray-600 hover:text-blue-500"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>
</html>
