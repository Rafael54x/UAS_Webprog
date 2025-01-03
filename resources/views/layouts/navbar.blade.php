<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI Sion Karawang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..600;1,14..32,100..600&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap');

        li {
            font-weight: 900;
        }
    </style>
    <script src="https://kit.fontawesome.com/f62928dd38.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="bg-white shadow-lg fixed w-full z-10 font-inter">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <a href="/"><img src="/img/logo.png" alt="GBI Sion Karawang Logo" class="h-[65px] max-sm:h-[50px] w-auto"></a>
            </div>

            <button id="menu-toggle" class="block lg:hidden text-black focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>

            <ul id="menu" class="hidden lg:flex lg:space-x-14 text-black font-extrabold">
                <li><a href="/" class="hover:text-gray-600">Home</a></li>
                <li><a href="/jadwal" class="hover:text-gray-600">Jadwal</a></li>
                <li><a href="/image" class="hover:text-gray-600">Galeri</a></li>
                <li><a href="/daftar" class="hover:text-gray-600">Pendaftaran</a></li>
                <li><a href="/kritik-saran" class="hover:text-gray-600">Kritik & Saran</a></li>
                <li><a href="/faq" class="hover:text-gray-600">FAQ</a></li>
                <li><a href="/about-us" class="hover:text-gray-600">About Us</a></li>
            </ul>

            <div class="hidden lg:flex space-x-4 text-black">
                <a href="https://www.instagram.com/gbision/" class="text-black hover:text-blue-500"><i class="fab fa-instagram text-2xl"></i></a>
                <a href="#" class="text-black hover:text-blue-500"><i class="fa-brands fa-x-twitter text-2xl"></i></a>
                <a href="#" class="text-black hover:text-blue-500"><i class="fab fa-spotify text-2xl"></i></a>
                <a href="https://www.youtube.com/c/GbiSion_KRW" class="text-black hover:text-blue-500"><i class="fab fa-youtube text-2xl"></i></a>
            </div>
        </div>

        <div id="dropdown-menu" class="hidden lg:hidden bg-white shadow-lg">
            <ul class="flex flex-col space-y-4 py-4 px-6 text-black font-extrabold">
                <li><a href="/" class="hover:text-gray-600">Home</a></li>
                <li><a href="/jadwal" class="hover:text-gray-600">Jadwal</a></li>
                <li><a href="/image" class="hover:text-gray-600">Galeri</a></li>
                <li><a href="/daftar" class="hover:text-gray-600">Pendaftaran</a></li>
                <li><a href="/kritik-saran" class="hover:text-gray-600">Kritik & Saran</a></li>
                <li><a href="/faq" class="hover:text-gray-600">FAQ</a></li>
                <li><a href="/about-us" class="hover:text-gray-600">About Us</a></li>
                <div class="flex space-x-4 text-black mt-4">
                    <a href="https://www.instagram.com/gbision/" class="text-black hover:text-blue-500"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="#" class="text-black hover:text-blue-500"><i class="fa-brands fa-x-twitter text-2xl"></i></a>
                    <a href="#" class="text-black hover:text-blue-500"><i class="fab fa-spotify text-2xl"></i></a>
                    <a href="https://www.youtube.com/c/GbiSion_KRW" class="text-black hover:text-blue-500"><i class="fab fa-youtube text-2xl"></i></a>
                </div>
            </ul>
        </div>
    </nav>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const dropdownMenu = document.getElementById('dropdown-menu');

        menuToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
