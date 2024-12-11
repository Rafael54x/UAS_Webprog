<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Ensure the body takes up the full viewport height */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Push the footer to the bottom */
        main {
            flex: 1;
        }

        /* Footer is at the bottom and sticks there */
        footer {
            margin-top: auto;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
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

    <main class="mt-20">
        <h1 class="text-3xl font-bold text-center my-6">Admin Panel</h1>

        <!-- Upload Image Form -->
        <div class="max-w-md mx-auto bg-white shadow-md rounded p-4">
            <h2 class="text-xl font-bold mb-4">Upload Image</h2>

            <!-- Display Success or Error Messages -->
            @if(session('success'))
                <div class="text-green-500 mb-4">{{ session('success') }}</div>
            @elseif($errors->any())
                <div class="text-red-500 mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full h-[50px] bg-[rgba(233,233,233,0.65)] border-[2px] border-[#B6B6B6] rounded-[21.6981px] p-6 text-[22px]" placeholder="Your Name" required>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" class="w-full border rounded p-2" required>
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Upload</button>
            </form>
            <div class="container mx-auto py-8">
                <h1 class="text-center text-xl font-bold mb-6">Admin Panel - Kritik & Saran</h1>
        
                <!-- Export Button -->
                <div class="text-center">
                    <a href="{{ route('kritik-saran.export') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        Download Kritik & Saran (Excel)
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white py-8 border-t border-gray-300">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-start space-y-6 md:space-y-0 px-6 md:px-12 lg:px-24">
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
