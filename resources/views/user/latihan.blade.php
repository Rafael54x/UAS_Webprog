<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jadwal Latihan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap"
      rel="stylesheet"
    />
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
              white: "#FFFFFF",
              black: "#1E1E1E",
              grey: "#F0F0F0",
              oldgrey: "#737373"
            },
            fontFamily: {
              rethink: ["'Rethink Sans'", "sans-serif"],
              inter: ["'Inter'", "sans-serif"],
            },
          },
        },
      };
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="bg-grey">
    @include('layouts.navbar')
    <h1 class="h-[80px] text-center bg-white shadow-lg"></h1>
    <div>
        <div>
          <img src="/img/header.jpg" alt="Header" class="h-[350px] object-cover w-full">
        </div>
      <h1 class="mt-12 font-inter font-extrabold text-[50px] text-center">Jadwal Latihan</h1>
    </div>

    <div class="flex flex-row gap-8 mx-32 mt-12">
      @foreach($jadwals as $jadwal)
        <div class="relative">
          <img src="{{ asset('storage/app/public/' . $jadwal->image) }}" alt="{{ $jadwal->name }}" class="w-full h-auto hover:scale-95 ease-out duration-200">
          <div class="absolute bottom-4 left-4">
            <p class="font-inter font-bold text-[30px] text-white">{{ $jadwal->name }}</p>
            <p class="font-rethink text-[20px] text-white">{{ $jadwal->description }}</p>
            <p class="font-rethink text-[20px] text-white">{{ $jadwal->place }}</p>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mx-32 mt-12 mb-10">
      <table class="w-full text-left font-rethink shadow-lg overflow-hidden rounded-[25px]">
        <thead class="bg-oldgrey text-white text-lg">
          <tr>
            <th class="py-4 px-6 font-inter font-bold text-lg tracking-wide">Acara</th>
            <th class="py-4 px-6 font-inter font-bold text-lg tracking-wide">Waktu</th>
            <th class="py-4 px-6 font-inter font-bold text-lg tracking-wide">Lokasi</th>
          </tr>
        </thead>
        <tbody class="bg-white rounded-b-lg font-medium">
          @foreach($jadwals as $jadwal)
            <tr class="border-b font-medium">
              <td class="py-4 px-6 font-inter text-black">{{ $jadwal->name }}</td>
              <td class="py-4 px-6 font-inter text-black">{{ $jadwal->description }}</td>
              <td class="py-4 px-6 font-inter text-black">{{ $jadwal->place }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
  @include('layouts.footer')
</html>
