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
    @include('layouts.navbar')

    <div class="pt-24" data-aos="fade-down">
        <div class="md:mb-12 mb-6 flex justify-center mt-[40px]">
            <div class="md:w-[60%] w-[80%] h-[200px] md:h-[350px] overflow-hidden rounded-3xl">
                <img src="{{ asset('img/faq-page.png') }}" alt="FAQ Hero" class="w-full h-full object-cover grayscale">
            </div>
        </div>

        <div class="container mx-auto px-4">
            <!-- FAQ Title -->
            <div class="text-center mb-8 md:mb-16">
                <h1 class="text-4xl font-extrabold text-[#1E1E1E]">Frequently Asked</h1>
                <h2 class="text-4xl font-extrabold text-[#1E1E1E]">Questions</h2>
            </div>

            <!-- FAQ Items -->
            <div class="max-w-3xl mx-auto space-y-8 mb-20">
                <!-- FAQ Items -->
                <div class="space-y-2" data-aos="fade-right">
                    <h3 class="md:text-2xl text-xl font-extrabold text-[#1E1E1E] font-inter">1. Kegiatan apa saja yang
                        diadakan selain ibadah di RPBI Sion Karawang?</h3>
                    <p class="md:text-lg text-md text-[#1E1E1E] font-rethink">
                        Ada Fellowship RPBI, RPBI Sport, dan Worship night.
                    </p>
                </div>
                <div class="space-y-2" data-aos="fade-right">
                    <h3 class="md:text-2xl text-xl font-extrabold text-[#1E1E1E] font-inter">2. Bagaimana cara terlibat
                        dalam pelayanan di RPBI Sion Karawang?</h3>
                    <p class="md:text-lg text-md text-[#1E1E1E] font-rethink">
                        Aktif mengikuti rangkaian ibadah dan acara RPBI Sion Karawang, serta latihan-latihan yang
                        diselenggarakan sesuai bakat dan minat, serta mengisi formulir atau memberitahu salah satu staff
                        RPBI Sion Karawang.
                    </p>
                </div>
                <div class="space-y-2" data-aos="fade-right">
                    <h3 class="md:text-2xl text-xl font-extrabold text-[#1E1E1E]">3. Apakah tersedia pelayanan doa dan
                        konseling di RPBI Sion Karawang?</h3>
                    <p class="md:text-lg text-md text-[#1E1E1E] font-rethink">
                        Tentu saja ada, bisa memberitahu salah satu staff RPBI Sion Karawang, pasti kami akan mendoakan
                        dan jika diperlukan akan diadakan konseling oleh gembala kami.
                    </p>
                </div>
                <div class="space-y-2" data-aos="fade-right">
                    <h3 class="md:text-2xl text-xl font-extrabold text-[#1E1E1E]">4. Di mana bisa mendapatkan informasi
                        terbaru tentang kegiatan di RPBI Sion Karawang?</h3>
                    <p class="md:text-lg text-md text-[#1E1E1E] font-rethink">
                        Bisa follow Instagram @rbision dan @pbision, juga tentunya dengan cara join grup WhatsApp RBI &
                        PBI Sion yaa. Untuk grup RBI Sion bisa join di <a class="underline hover:text-blue-800"
                            target="_blank" href="https://chat.whatsapp.com/GUqKKhFzY1vJw6QYtxVyzU">link ini</a> ya!
                    </p>
                </div>
                <div class="space-y-2" data-aos="fade-right">
                    <h3 class="md:text-2xl text-xl font-extrabold text-[#1E1E1E]">5. Ada kegiatan apa saja di RPBI Sion
                        Karawang?</h3>
                    <p class="md:text-lg text-md text-[#1E1E1E] font-rethink">
                        1. Latihan Musik – setiap Jumat, jam 16:30-19:00 di Gereja. <br>
                        2. Latihan Choir – setiap Jumat, jam 19:00-20:00 di Gereja. <br>
                        3. Latihan Thamborine – setiap Sabtu, jam 13:00-15:00 di Gedung Serba Guna lantai 2. <br>
                        4. RPBI Sports setiap Sabtu di minggu ke-3 waktu dan tempat di share di Instagram @rbision &
                       @pbision. <br>
                        5. Fellowship RPBI setiap Sabtu di minggu ke-4 jam 18:00 di Gedung Serba Guna lantai 2.
                    </p>
                </div>
                <!-- FAQ seberapa banyak yang diperluin ntar -->
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>