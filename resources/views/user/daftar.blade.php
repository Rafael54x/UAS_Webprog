<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join Us Section</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
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

  <section class="container mx-auto px-6 py-24">
    <div class="flex flex-col md:flex-row items-center justify-between p-8 rounded-lg">
      
      <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12">
        <h2 class="text-4xl font-extrabold mb-4 text-gray-900">Join Us Today!</h2>
        <p class="text-black mb-6 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
        </p>
        <button class="bg-black text-white font-bold py-3 px-6 rounded-full hover:bg-gray-800 flex items-center">
          <span class="text-lg">DAFTAR DISINI</span>
        </button>
      </div>
      
      <!-- Image Content -->
      <div class="md:w-1/2 flex justify-center">
        <img src="/img/daftar-page.png" alt="Group Photo" class="w-full max-w-md rounded-lg shadow-lg">
      </div>
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
