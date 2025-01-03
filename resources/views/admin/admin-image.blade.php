<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Gallery</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    @include('layouts.navbaradmin')

    <main class="container mx-auto px-6 py-10">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-8 text-center">Admin Image Management</h1>

        <!-- Upload Form -->
        <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-lg mb-12">
            @csrf
            <h2 class="text-2xl font-bold text-gray-700 mb-6">Upload New Image</h2>
            <div class="mb-6">
                <label for="name" class="block text-lg font-medium text-gray-700">Image Name</label>
                <input type="text" name="name" id="name" required
                       class="mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="image" class="block text-lg font-medium text-gray-700">Upload Image</label>
                <input type="file" name="image" id="image" required
                       class="mt-2 w-full text-sm text-gray-500 focus:outline-none">
            </div>
            <button type="submit"
                    class="w-full py-3 bg-blue-500 text-white text-lg font-bold rounded-lg shadow-md hover:bg-blue-600 focus:ring focus:ring-blue-300">
                Upload
            </button>
        </form>

        <!-- Image List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($images as $image)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('storage/app/public/' . $image->path) }}" alt="Image" class="w-full h-48 object-cover">
                    <div class="p-4 flex justify-between items-center">
                        <p class="font-semibold text-gray-800 truncate" title="{{ $image->name }}">{{ $image->name }}</p>
                        <form action="{{ route('image.delete', $image->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-1 bg-red-500 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-red-600 focus:ring focus:ring-red-300">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
