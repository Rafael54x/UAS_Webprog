<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Carousel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('layouts.navbaradmin')

<body class="bg-gray-50 min-h-screen flex flex-col">
    <main class="container mx-auto px-6 lg:px-24 flex-grow">
        <h2 class="text-2xl font-bold mb-6 mt-[130px]">Manage Carousel Images</h2>
        
        <!-- Success Message -->
        @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
            {{ session('success') }}
        </div>
        @endif

        <!-- Upload Form -->
        <form action="{{ route('carousell.store') }}" method="POST" enctype="multipart/form-data" class="mb-6">
            @csrf
            <label for="carousell" class="block text-sm font-medium mb-2">Upload New Carousel Image</label>
            <input type="file" id="carousell" name="carousell" required
                class="block w-full text-sm text-gray-900 border rounded-lg p-2 mb-4">
            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">
                Add Image
            </button>
        </form>

        <!-- List of Carousel Images -->
        @if ($images->count() > 0)
        <table class="w-full border-collapse border border-gray-200 bg-white rounded-lg overflow-hidden shadow mb-10">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-200 px-4 py-2 text-left font-medium text-gray-600">Image</th>
                    <th class="border border-gray-200 px-4 py-2 text-left font-medium text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($images as $image)
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-200 px-4 py-2">
                        <img src="{{ asset('storage/app/public/' . $image->carousell) }}" alt="Carousel Image" class="w-32 h-auto rounded">
                    </td>
                    <td class="border border-gray-200 px-4 py-2">
                        <form action="{{ route('carousell.destroy', $image->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600"
                                onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-gray-600 mt-6">No images uploaded yet. Add a new image using the form above.</p>
        @endif
    </main>

    @include('layouts.footer')
</body>

</html>
