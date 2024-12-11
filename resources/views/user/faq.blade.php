<!-- resources/views/faq.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - GBI Sion Karawang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F0F0F0]">
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

    <!-- Main Content -->
    <div class="pt-24">
        <!-- Hero Image Section -->
        <div class="mb-12 flex justify-center">
            <div class="w-[60%] h-[300px] overflow-hidden rounded-3xl">
              <img 
                src="{{ asset('img/faq-page.png') }}" 
                alt="FAQ Hero" 
                class="w-full h-full object-cover grayscale"
              >
            </div>
          </div>          

        <div class="container mx-auto px-4">
            <!-- FAQ Title -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-extrabold text-[#1E1E1E]">Frequently Asked</h1>
                <h2 class="text-4xl font-extrabold text-[#1E1E1E]">Questions</h2>
            </div>

            <!-- FAQ Items -->
            <div class="max-w-3xl mx-auto space-y-8 mb-20">
                <!-- FAQ Items -->
                <div class="space-y-2">
                    <h3 class="text-xl font-extrabold text-[#1E1E1E]">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h3>
                    <p class="text-base text-[#1E1E1E]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.
                    </p>
                </div>
                <!-- FAQ seberapa banyak yang diperluin ntar -->
            </div>
        </div>
    </div>

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