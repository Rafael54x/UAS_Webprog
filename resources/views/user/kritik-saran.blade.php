<!-- resources/views/kritik-saran.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik & Saran - GBI Sion Karawang</title>
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
    @include('layouts.navbar')
    <!-- Main Content -->
    <div class="relative min-h-screen pt-24">
        <div class="absolute inset-0 bg-image opacity-80 z-0">
            <img src="/img/bg-kritiksaran.png" class="w-full h-[108%] object-cover" alt="Background">
        </div>

        <div class="relative z-1 container mx-auto px-4 py-8">
            <h1 class="text-center font-extrabold text-[60px] leading-[73px] text-[#1E1E1E] max-w-[890px] mx-auto mb-16">
                "Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit."
            </h1>

            
            <form method="POST" action="{{ route('kritik-saran.store') }}">
                @csrf
            <div class="flex flex-col lg:flex-row gap-20">
                <div class="flex-1">
                    <div class="mb-16">
                        <h2 class="font-extrabold text-[34.717px] text-[#1E1E1E] mb-4">Kritik:</h2>
                        <div class="relative">
                            <textarea 
                            name="kritik"
                                class="w-full h-[213.73px] bg-[rgba(233,233,233,0.65)] border-[2.16981px] border-[#B6B6B6] rounded-[21.6981px] p-6 text-[22px] leading-[29px] resize-none"
                                placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                            ></textarea>
                        </div>
                    </div>

                    <!-- Saran Section -->
                    <div>
                        <h2 class="font-extrabold text-[34.717px] text-[#1E1E1E] mb-4">Saran:</h2>
                        <div class="relative">
                            <textarea 
                            name="saran"
                                class="w-full h-[213.73px] bg-[rgba(233,233,233,0.65)] border-[2.16981px] border-[#B6B6B6] rounded-[21.6981px] p-6 text-[22px] leading-[29px] resize-none"
                                placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                            ></textarea>
                        </div>
                        <button type="submit" class="w-[146px] h-[51px] bg-[#1E1E1E] rounded-[32.5472px] text-white font-extrabold text-[23px] mt-8">
                            Kirim
                        </button>
                    </div>
                </div>
            </form>

                <!-- Decorative Images -->
                <div class="flex-1 relative hidden lg:block">
                    <div class="absolute w-[563px] h-[349px] top-[300px] transform rotate-[0.98deg] drop-shadow-lg ml-24">
                        <img src="{{ asset('/img/deko2.png') }}" alt="Decorative 2" class="w-full h-full object-cover rounded-[30px]">
                    </div>
                    <div class="absolute w-[533.53px] h-[343.02px] transform -rotate-[3.65deg] drop-shadow-lg">
                        <img src="{{ asset('/img/deko1.png') }}" alt="Decorative 1" class="w-full h-full object-cover rounded-[30px]">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white py-8 border-t border-gray-300 w-full mt-20">
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
                    Jl. Tuparev No.78, RT.2/RW.31, Nagasari,<br>
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