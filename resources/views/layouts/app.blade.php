<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI Sion Karawang</title>
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..600;1,14..32,100..600&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap');
    </style>
    <style>
        /* Ensure the swiper container fills the width and height */
        .swiper-container {
            width: 100%;
            height: 100%;
        }
    
        /* Responsive slide heights */
        .swiper-slide {
            background-size: cover;
            background-position: center;
            height: calc(50vh - 30px);
        }
    
        @media (min-width: 768px) {
            .swiper-slide {
                height: 60vh; 
            }
        }
    
        @media (min-width: 1024px) {
            .swiper-slide {
                height: 730px;
            }
        }
    
        .swiper-button-next,
        .swiper-button-prev {
            color: #ffffff;
            font-size: 1.5rem;
        }
    
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            color: #33b5e5;
        }
    
        .swiper-pagination-bullet {
            background-color: grey;
            opacity: 0.6;
        }
    
        .swiper-pagination-bullet-active {
            background-color: #ffffff;
            opacity: 1;
        }
    
        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
        }
    </style>
    
        
</head>
@include('layouts.navbar')
<body class="bg-gray-100 ">

    <section class="relative overflow-hidden">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide overflow-hidden" style="background-image: url('/img/main-header.png');">
                </div>
                <div class="swiper-slide overflow-hidden" style="background-image: url('/img/car-2.png');">
                </div>
                <div class="swiper-slide overflow-hidden" style="background-image: url('/img/car-3.png');">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center px-4 md:px-12" style="background-image: url('/img/bg-gbi.png');">
        <div class="absolute inset-0 bg-white opacity-20"></div>
        <div class="relative container lg:ms-[50px] max-sm:mt-[50px] max-w-2xl">
            <p class="text-3xl md:text-4xl font-extrabold text-black mb-4 text-center md:text-left">GBI SION KARAWANG</p>
            <p class="text-black text-base md:text-lg leading-relaxed text-center md:text-left font-rethink">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
            </p>
        </div>
    </section>

    <section class="container mx-auto py-12 px-4 md:px-12">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-4">NOW PLAYING</h2>
        <div class="md:mb-10 mb-6 text-center">
            <a class="text-base md:text-lg font-medium" href="https://youtu.be/YWUTI7fQU8Y?si=dv49QJlxwxI4n9e5" target="_blank" rel="noopener noreferrer">
                JPCC Worship - Kami T'rima
            </a>
        </div>
        <div class="flex justify-center">
            <div class="bg-white drop-shadow-lg rounded-lg overflow-hidden w-full md:w-[500px] relative">
                <iframe 
                    src="https://www.youtube.com/embed/YWUTI7fQU8Y?autoplay=1&mute=0&rel=0&showinfo=0" 
                    title="JPCC Worship - Kami T'rima"
                    allow="autoplay; encrypted-media"
                    allowfullscreen
                    class="w-full h-[200px] md:h-[280px]">
                </iframe>
            </div>
        </div>
    </section>

    <section class="container mx-auto py-12 px-4 md:px-12 md:mt-8 ">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-10 md:mb-[60px]">ACARA MENDATANG</h2>
        <div class="flex flex-col gap-6">
            <div class="flex flex-col md:flex-row overflow-hidden md:mb-[60px]">
                <img src="/img/main-header.png" alt="Event" class="w-full  md:w-[600px] h-48 md:h-[350px] rounded-md object-cover">
                <div class="p-2 md:ms-6 flex-1">
                    <p class="font-semibold text-base md:text-lg">Senin, 2 Desember 2024 - Selasa, 17 Desember 2024</p>
                    <p class="text-gray-700 mt-2 font-black">NAMA EVENT</p>
                    <button class="md:mt-8 mt-4 px-4 py-2 font-bold bg-black border-black border-2 text-white rounded-[25px] hover:bg-white hover:text-black">
                        Lihat Selengkapnya
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row overflow-hidden">
                <img src="/img/main-header.png" alt="Event" class="w-full md:w-[600px] h-48 md:h-[350px] object-cover rounded-md">
                <div class="p-2 flex-1 md:ms-6">
                    <p class="font-semibold text-base md:text-lg">Rabu, 25 Desember 2024</p>
                    <p class="text-gray-700 mt-2 font-black">NAMA EVENT</p>
                    <button class="md:mt-8 mt-4 px-4 py-2 font-bold bg-black border-black border-2 text-white rounded-[25px] hover:bg-white hover:text-black">
                        Lihat Selengkapnya
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-12 bg-cover bg-center h-auto md:h-[500px]" style="background-image: url('/img/join-us.png');">
        <div class="absolute inset-0 bg-white opacity-30"></div> 
        <div class="relative h-full flex flex-col items-center justify-center text-center px-4">
            <h2 class="text-4xl md:text-6xl font-extrabold text-black mb-6">INGIN BERGABUNG?</h2>
            <a href="/daftar" class="px-6 py-3 bg-black border-2 border-black text-white font-bold rounded-[25px] hover:bg-white hover:text-black">
                DAFTAR DISINI
            </a>
        </div>
    </section>
    

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>

    const swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
    },
});

    </script>

</body>
</html>
