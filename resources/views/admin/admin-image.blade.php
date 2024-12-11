<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

<h1 class="text-3xl font-bold text-center my-6">Admin Panel</h1>

<!-- Upload Image -->
<div class="max-w-md mx-auto bg-white shadow-md rounded p-4">
    <h2 class="text-xl font-bold mb-4">Upload Image</h2>
    <form action="/admin/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" class="w-full border rounded p-2" required>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Upload</button>
    </form>
</div>

</body>
</html>
