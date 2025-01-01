<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])  <title>Schedule Page</title>
</head>
<body class="bg-gray-100">
  @include('layouts.navbar')
  <!-- Top Section with People in Church -->
  <section class="relative">
    <div class="bg-cover bg-center h-[400px] w-full" style="background-image: url('/img/jadwal-header.png');">
        <div class="absolute inset-0 flex items-center justify-center">
        </div>
    </div>
</section>

  <!-- Schedule Section -->
  <div class="text-center py-8 mt-16 mb-12">
    <h2 class="text-2xl font-bold mb-6">JADWAL</h2>
    <div class="flex justify-center gap-12">
      <!-- Card 1 -->
      <div class="bg-white drop-shadow-lg rounded-lg overflow-hidden w-60 relative transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
        <a href="/acara" class="block">
          <img src="/img/acara-rutin.png" alt="Acara Rutin" class="h-40 w-full object-cover">
          <div class="absolute inset-0 flex items-center justify-center text-white">
            <h3 class="text-lg font-semibold">Acara Rutin</h3>
          </div>
        </a>
      </div>
      <!-- Card 2 -->
      <div class="bg-white drop-shadow-lg rounded-lg overflow-hidden w-60 relative transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
        <a href="/acara-mendatang" class="block">
          <img src="/img/acara-mendatang.png" alt="Acara Mendatang" class="h-40 w-full object-cover">
          <div class="absolute inset-0 flex items-center justify-center text-white">
            <h3 class="text-lg font-semibold">Acara Mendatang</h3>
          </div>
        </a>
      </div>
      <!-- Card 3 -->
      <div class="bg-white drop-shadow-lg rounded-lg overflow-hidden w-60 relative transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
        <a href="/latihan" class="block">
          <img src="/img/jadwal-latihan.png" alt="Jadwal Latihan" class="h-40 w-full object-cover">
          <div class="absolute inset-0 flex items-center justify-center text-white">
            <h3 class="text-lg font-semibold">Jadwal Latihan</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
  
  
  <section class="relative h-[550px] w-full">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/img/jadwal-bottom.png');">
      <div class="absolute inset-0 bg-gradient-to-b from-white/100 via-grey/10 to-transparent"></div>
    </div>
        <div class="absolute inset-0 flex items-center justify-center">
        </div>
    </div>
</section>
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
</body>
</html>
