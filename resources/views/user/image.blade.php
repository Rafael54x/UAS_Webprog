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
    </style>
    <!-- Add Fancybox CSS for image zooming -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans ">
    <!-- Navbar -->
    @include('layouts.navbar')

    <main class="mt-20">
        <div class="bg-gray-800 text-white text-center py-2 mt-4" data-aos="fade-right">
            <p>Ingin melihat selengkapnya? 
                <a href="#" class="font-bold text-blue-400 hover:underline">Google Drive</a>
            </p>
        </div>
        <h1 class="text-3xl font-bold text-center text-gray-800 mt-6" data-aos="fade-right">Gallery</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 max-w-7xl mx-auto" data-aos="fade-down">
            @foreach ($images as $image)
                <div class="relative bg-white rounded-lg shadow-md overflow-hidden group">
                    <!-- Image -->
                    <img 
                        src="{{ asset('storage/app/public/' . $image->path) }}" 
                        alt="{{ $image->name }}" 
                        class="w-full h-48 object-cover">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white font-bold text-lg">{{ $image->name }}</p>
                    </div>

                    <!-- Icons (Zoom and Download) -->
                    <div class="absolute bottom-4 left-4 flex space-x-4">
                        <!-- Zoom (fancybox) -->
                        <a 
                            class="view-gallery text-white"
                            data-fancybox="gallery" 
                            href="{{ asset('storage/app/public/' . $image->path) }}"
                            aria-label="View Image"
                        >
                            <i class="fas fa-expand-alt text-xl"></i>
                        </a>
                        <!-- Download -->
                        <a 
                            class="view-gallery text-white"
                            href="{{ asset('storage/app/public/' . $image->path) }}" 
                            download 
                            aria-label="Download Image"
                        >
                            <i class="fas fa-file-download text-xl"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
    </main>

    @include('layouts.footer')

    <!-- Add Fancybox Script for image zooming -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
</body>
</html>
