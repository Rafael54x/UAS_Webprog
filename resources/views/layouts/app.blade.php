<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI Sion Karawang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
          <div class="flex items-center space-x-3">
            <img src="/img/logo.png" alt="GBI Sion Karawang Logo" class="h-10 w-auto">
            <a href="/" class="text-xl font-bold text-gray-800">GBI Sion Karawang</a>
          </div>
          <ul class="flex space-x-6 text-gray-600 font-medium">
            <li><a href="/" class="hover:text-gray-900">Home</a></li>
            <li><a href="/acara" class="hover:text-gray-900">Jadwal</a></li>
            <li><a href="#" class="hover:text-gray-900">Galeri</a></li>
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
      </nav>    <nav class="bg-white shadow-md fixed w-full z-10">
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
      
    <section class="relative">
        <div class="bg-cover bg-center h-[730px] w-full" style="background-image: url('/img/main-header.png');">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h1 class="text-white text-6xl font-bold">GBI Sion Karawang</h1>
            </div>
        </div>
    </section>

    <section class="relative h-[500px] bg-cover bg-center flex items-center" style="background-image: url('/img/join-us.png');">
        <div class="absolute inset-0 bg-white opacity-20"></div>
        <div class="relative container mx-auto px-6 md:px-12 max-w-2xl">
          <h2 class="text-4xl font-extrabold text-black mb-4">GBI SION KARAWANG</h2>
          <p class="text-gray-700 text-lg leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
          </p>
        </div>
      </section>
      

    <!-- Now Playing -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold text-center mb-6">NOW PLAYING</h2>
        <div class="mb-4 text-center">
            <a class="text-lg font-medium" href="https://youtu.be/YWUTI7fQU8Y?si=dv49QJlxwxI4n9e5">JPCC Worship - Kami T'rima</a>   
        </div>
        <div class="flex justify-center">
            <a href="https://youtu.be/YWUTI7fQU8Y?si=dv49QJlxwxI4n9e5" class="block">
                <div class="bg-white drop-shadow-lg rounded-lg overflow-hidden w-[500px] relative transform transition-transform duration-300 hover:scale-105 hover:shadow-xl">
                    <img src="/img/yt.png" alt="Album" class="w-full">
            </div>
        </a>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold text-center mb-6">ACARA MENDATANG</h2>
        <div class="flex flex-col gap-6">
            <div class="flex rounded-md overflow-hidden">
                <img src="/img/main-header.png" alt="Event" class="w-1/4 h-auto object-cover">
                <div class="p-4 flex-1">
                    <p class="font-semibold text-lg">Senin, 2 Desember 2024 - Selasa, 17 Desember 2024</p>
                    <p class="text-gray-700 mt-2 font-black">NAMA EVENT</p>
                    <button class="mt-4 px-4 py-2 bg-gray-900 text-white rounded-2xl hover:bg-gray-800">
                        Lihat Selengkapnya
                    </button>
                </div>
            </div>
            <div class="flex rounded-md overflow-hidden">
                <img src="/img/main-header.png" alt="Event" class="w-1/4 h-auto object-cover">
                <div class="p-4 flex-1">
                    <p class="font-semibold text-lg">Rabu, 25 Desember 2024</p>
                    <p class="text-gray-700 mt-2 font-black">NAMA EVENT</p>
                    <button class="mt-4 px-4 py-2 bg-gray-900 text-white rounded-2xl hover:bg-gray-800">
                        Lihat Selengkapnya
                    </button>
                </div>
            </div>
        </div>
    </section>
    


    <!-- Join Us Section with Background Image -->
<section class="relative py-20 bg-cover bg-center h-[1000px]" style="background-image: url('/img/join-us.png');">
    <div class="absolute inset-0 bg-white opacity-30"></div> 
    <div class="relative h-full flex flex-col items-center justify-center text-center">
      <h2 class="text-8xl font-extrabold text-black mb-6">INGIN BERGABUNG?</h2>
      <a href="/daftar" class="px-8 py-4 bg-black text-white font-bold rounded-2xl hover:bg-gray-800">
        DAFTAR DISINI
      </a>      
    </div>
  </section>
  

<!-- Footer -->
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