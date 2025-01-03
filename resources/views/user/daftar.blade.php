<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join Us Section</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .modal-content {
      background: white;
      padding: 2rem;
      border-radius: 15px;
      text-align: center;
      max-width: 450px;
      width: 90%;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
      animation: slide-down 0.3s ease-out;
    }

    @keyframes slide-down {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .modal h2 {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .modal button {
      transition: transform 0.2s;
    }

    .modal button:hover {
      transform: scale(1.05);
    }

    .close-btn {
      margin-top: 1rem;
      color: red;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body class="bg-gray-50">
  @include('layouts.navbar')

  <section class="container mx-auto px-6 py-24">
    <div class="flex flex-col md:flex-row items-center justify-between p-8 rounded-lg">
      
      <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12" data-aos="fade-down">
        <h2 class="text-4xl font-extrabold mb-4 text-gray-900">Join Us Today!</h2>
        <p class="text-black mb-6 leading-relaxed">
          Ayo, jangan lewatkan kesempatan untuk menjadi bagian dari komunitas yang penuh kasih dan pengajaran yang mendalam. Daftarkan diri Anda sebagai jemaat di RPBI dan PBI Sion Karawang, dan bersama-sama kita akan tumbuh dalam iman, saling mendukung, serta bersekutu dalam kasih Tuhan!
        </p>
        <div class="flex space-x-4">
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfi_uBOyEJiVTYqyLWHUkfgqy7DlIMaD_kAt4mGoB8JHqLDQQ/viewform" target="_blank">
            <button class="bg-black text-white font-bold py-3 px-6 rounded-full hover:bg-gray-800 flex items-center">
              <span class="text-lg">DAFTAR RPBI</span>
            </button>
          </a>
          <button id="open-modal" class="bg-black text-white font-bold py-3 px-6 rounded-full hover:bg-gray-800 flex items-center">
            <span class="text-lg">DAFTAR PBI</span>
          </button>
        </div>
      </div>
      
      <!-- Image Content -->
      <div class="md:w-1/2 flex justify-center" data-aos="fade-down">
        <img src="/img/daftar-page.png" alt="Group Photo" class="w-full max-w-md rounded-lg shadow-lg">
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <h2 class="text-2xl font-bold mb-4">Pilih Kontak WhatsApp</h2>
      <div class="flex flex-col space-y-4">
        <a href="https://wa.me/6281315373443" target="_blank">
          <button class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600">
            Karen
          </button>
        </a>
        <a href="https://wa.me/6281324361734" target="_blank">
          <button class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600">
            Lifia
          </button>
        </a>
      </div>
      <div id="close-modal" class="close-btn">Close</div>
    </div>
  </div>

  @include('layouts.footer')

  <script>
    // JavaScript for modal
    const modal = document.getElementById('modal');
    const openModal = document.getElementById('open-modal');
    const closeModal = document.getElementById('close-modal');

    openModal.addEventListener('click', () => {
      modal.style.display = 'flex';
    });

    closeModal.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>
</body>
</html>
