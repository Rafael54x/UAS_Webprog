<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }
    </style>
</head>

<body class="bg-gray-100"
    style="background-image: url('/img/bg-galeri.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    @include('layouts.navbar')

    <!-- Main Content -->
    <main class="mt-[100px]">
        <div class="flex justify-center px-4">
            <div
                class="flex flex-col md:flex-row justify-between items-center rounded-[18px] bg-black h-auto md:h-[70px] w-full max-w-[1250px] text-white text-center mt-[30px] p-4">
                <div class="mb-4 md:mb-0 md:ms-8 font-inter text-center md:text-left">
                    <p class="font-semibold text-base md:text-lg">Ingin melihat selengkapnya?</p>
                </div>
                <div>
                    <a href="https://drive.google.com/drive/folders/10UaNkh9pJckcu2Pdel7TdUALJzDPvY08" target="_blank">
                        <div
                            class="bg-white flex flex-row rounded-[13px] h-[40px] md:h-[45px] p-2 md:me-[10px] font-inter justify-center items-center">
                            <div class="flex items-center">
                                <img class="h-[24px] md:h-[30px] ms-2" src="/img/drive.svg" alt="Google Drive">
                            </div>
                            <div class="flex items-center">
                                <p class="mx-2 me-2 text-sm md:text-base font-semibold text-black">Google Drive</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 max-w-7xl mx-auto mt-8 ">
            @foreach ($images as $image)
                <div class="bg-white rounded-[20px] shadow-md overflow-hidden">
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Image"
                        class="w-full h-[200px] object-cover">
                </div>
            @endforeach
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white py-8 border-t border-gray-300">
        <div
            class="container mx-auto flex flex-col md:flex-row justify-between items-start space-y-6 md:space-y-0 px-6 md:px-12 lg:px-24">
            <!-- Logo and Name -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <img src="/img/logo.png" alt="Logo" class="w-16 h-16 mb-2">
                <h3 class="text-xl font-bold">GBI SION KARAWANG</h3>
                <p class="text-sm text-gray-600">© GBI Sion Karawang, Inc.</p>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-bold mb-2">CONTACT</h4>
                <p class="text-sm text-gray-700">
                    Email: <a href="mailto:rbisionkarawang@gmail.com"
                        class="text-blue-500 hover:underline">rbisionkarawang@gmail.com</a>
                </p>
                <p class="text-sm text-gray-700">
                    Jl. Tuparev No.335, RT.2/RW.31, Nagasari,<br>
                    Kec. Karawang Bar., Karawang, Jawa Barat 41312
                </p>
            </div>

            <!-- Social Media Links -->
            <div>
                <h4 class="text-lg font-bold mb-2">FOLLOW US</h4>
                <div class="flex space-x-4">
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
