<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])  
  <title>About Us</title>
</head>
<body class="bg-gray-100 text-gray-900">
  @include('layouts.navbar')

  <section class="relative mx-auto text-center pt-24 mb-10 p-4">
    <h1 class="text-3xl font-bold mb-6 mt-10" data-aos="fade-down">CONTACT US</h1>
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center gap-8">
      <img src="/img/about-us.png" alt="Church" class="w-full md:w-1/2 lg:w-1/3 rounded-lg shadow-md" data-aos="fade-right"> 
      <div class="text-left space-y-4" data-aos="fade-down">
        <p>📍 Jl. Tuparev No.335, RT.2/RW.31, Nagasari, </br>Kec. Karawang Bar., Karawang, Jawa Barat 41312</p>
        <p>✉️ <a href="mailto:rbisionkarawang@gmail.com" class="hover:underline">rbisionkarawang@gmail.com</a></p>
      </div>
    </div>
  </section>

  <!-- Struktur RBI Section -->
  <section class="py-12 text-center">
    <h2 class="text-2xl font-bold mb-6" data-aos="fade-down">STRUKTUR RBI</h2>
    <div class="container mx-auto space-y-4">
      <p class="font-semibold" data-aos="fade-down">Ketua</p>
      <p data-aos="fade-down">Kesiea Indah Kartikadewi</p>

      <p class="font-semibold" data-aos="fade-down">Wakil Ketua</p>
      <p data-aos="fade-down">Lywinda Chandra</p>

      <p class="font-semibold" data-aos="fade-down">Sekretaris</p>
      <p data-aos="fade-down">Michelle Anastasia</p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div data-aos="fade-down">
          <p class="font-semibold">Bendahara 1</p>
          <p>Fiana Agnesia</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Bendahara 2</p>
          <p data-aos="fade-down">Lywinda Chandra</p>
        </div>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Acara 1</p>
          <p>Cheryl</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Acara 2</p>
          <p>Stella Lunarinta Fidela</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Program 1</p>
          <p>Ken Budiarjo</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Program 2</p>
          <p>Tatiana Lunaris Fidela</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Multi Media 1</p>
          <p>Joanna Natasya Tampubolon</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Multi Media 2</p>
          <p>Cammy Budiarjo</p>
        </div>
      </div>

      <p class="font-semibold" data-aos="fade-down">Sie. Doa dan Pemerhati</p>
      <p  data-aos="fade-down">Rexsa Cintya Sandy</p>
    </div>
  </section>

  <!-- Struktur PBI Section -->
  <section class="py-12 text-center">
    <h2 class="text-2xl font-bold mb-6" data-aos="fade-down">STRUKTUR PBI</h2>
    <div class="container mx-auto space-y-4">
      <p class="font-semibold" data-aos="fade-down">Koordinator</p>
      <p data-aos="fade-down">Lifia Anastasia Herdianto</p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div  data-aos="fade-down">
          <p class="font-semibold">Bendahara 1</p>
          <p>Fiana Agnesia</p>
        </div>
        <div  data-aos="fade-down">
          <p class="font-semibold">Bendahara 2</p>
          <p>Lywinda Chandra</p>
        </div>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Program 1</p>
          <p>Hany Elvina Sembiring</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Program 2</p>
          <p>Joey Paskah Emmanuel</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Acara</p>
          <p>Christian Yakub John</p>
        </div>
        <div data-aos="fade-down">
          <p class="font-semibold">Sie. Multi Media</p>
          <p>Erika Elisabeth Karenina</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Jenis Pelayanan Section -->
  <section class="py-12 text-center">
    <h2 class="text-2xl font-bold mb-6"  data-aos="fade-down">JENIS PELAYANAN</h2>
    <div class="container mx-auto space-y-4"  data-aos="fade-down">
      <p>Pelayanan Altar <span class="italic">(Worship Leader Singer)</span></p>
      <p>Pemusik <span class="italic">(Bassist, Guitarist, Keyboardist, Drummer)</span></p>
      <p>Usher Persembahan</p>
      <p>Tambourine</p>
      <p>Multimedia</p>
      <p>Mixer</p>
    </div>
  </section>

  @include('layouts.footer')


</body>
</html>
