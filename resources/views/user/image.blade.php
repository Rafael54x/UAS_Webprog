<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
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
<!-- Header Bar -->
<div class="bg-gray-800 text-white text-center py-2">
    <p>Ingin melihat selengkapnya? 
        <a href="#" class="font-bold text-blue-400 hover:underline">Google Drive</a>
    </p>
</div>

<!-- Title -->
<h1 class="text-3xl font-bold text-center text-gray-800 mt-6">Gallery</h1>

<!-- Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 max-w-7xl mx-auto">
    @foreach ($images as $image)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->name }}" class="w-full h-48 object-cover">
            <div class="p-4 text-center">
                <p class="text-gray-700 font-medium">{{ $image->category }}</p>
            </div>
        </div>
    @endforeach
</div>
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
