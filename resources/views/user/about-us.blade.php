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

  <section class="relative mx-auto text-center pt-24 mb-10">
    <h1 class="text-3xl font-bold mb-6">CONTACT US</h1>
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center gap-8">
      <img src="/img/about-us.png" alt="Church" class="w-full md:w-1/2 lg:w-1/3 rounded-lg shadow-md"> 
      <div class="text-left space-y-4">
        <p>📍 Jl. Tuparev No.335, RT.2/RW.31, Nagasari, </br>Kec. Karawang Bar., Karawang, Jawa Barat 41312</p>
        <p>✉️ <a href="mailto:rbisionkarawang@gmail.com" class="hover:underline">rbisionkarawang@gmail.com</a></p>
      </div>
    </div>
  </section>

  <!-- Struktur RBI Section -->
  <section class="py-12 text-center">
    <h2 class="text-2xl font-bold mb-6">STRUKTUR RBI</h2>
    <div class="container mx-auto space-y-4">
      <p class="font-semibold">Ketua</p>
      <p>Kesiea Indah Kartikadewi</p>

      <p class="font-semibold">Wakil Ketua</p>
      <p>Lywinda Chandra</p>

      <p class="font-semibold">Sekretaris</p>
      <p>Michelle Anastasia</p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <p class="font-semibold">Bendahara 1</p>
          <p>Fiana Agnesia</p>
        </div>
        <div>
          <p class="font-semibold">Bendahara 2</p>
          <p>Lywinda Chandra</p>
        </div>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
          <p class="font-semibold">Sie. Acara 1</p>
          <p>Cheryl</p>
        </div>
        <div>
          <p class="font-semibold">Sie. Acara 2</p>
          <p>Stella Lunarinta Fidela</p>
        </div>
        <div>
          <p class="font-semibold">Sie. Program 1</p>
          <p>Ken Budiarjo</p>
        </div>
        <div>
          <p class="font-semibold">Sie. Program 2</p>
          <p>Tatiana Lunaris Fidela</p>
        </div>
        <div>
          <p class="font-semibold">Sie. Multi Media 1</p>
          <p>Joanna Natasya Tampubolon</p>
        </div>
        <div>
          <p class="font-semibold">Sie. Multi Media 2</p>
          <p>Cammy Budiarjo</p>
        </div>
      </div>

      <p class="font-semibold">Sie. Doa dan Pemerhati</p>
      <p>Rexsa Cintya Sandy</p>
    </div>
  </section>

  <!-- Struktur PBI Section -->
  <section class="py-12 text-center">
    <h2 class="text-2xl font-bold mb-6">STRUKTUR PBI</h2>
    <div class="container mx-auto space-y-4">
      <p class="font-semibold">Koordinator</p>
      <p>Lifia Anastasia Herdianto</p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <p class="font-semibold">Bendahara 1</p>
          <p>Fiana Agnesia</p>
        </div>
        <div>
          <p class="font-semibold">Bendahara 2</p>
          <p>Lywinda Chandra</p>
        </div>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
          <p class="font-semibold">Sie. Program 1</p>
          <p>Hany Elvina Sembiring</p>
        </div>
        <div>
          <p class="font-semibold">Sie. Program 2</p>
          <p>Joey Paskah Emmanuel</p>
        </div>
        <div>
          <p class="font-semibold">Sie. Acara</p>
          <p>Christian Yakub John</p>
        </div>
        <div>
          <p class="font-semibold">Sie. Multi Media</p>
          <p>Erika Elisabeth Karenina</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Jenis Pelayanan Section -->
  <section class="py-12 text-center">
    <h2 class="text-2xl font-bold mb-6">JENIS PELAYANAN</h2>
    <div class="container mx-auto space-y-4">
      <p>Pelayanan Altar <span class="italic">(Worship Leader Singer)</span></p>
      <p>Pemusik <span class="italic">(Bassist, Guitarist, Keyboardist, Drummer)</span></p>
      <p>Usher Persembahan</p>
      <p>Tambourine</p>
      <p>Multimedia</p>
      <p>Mixer</p>
    </div>
  </section>

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
