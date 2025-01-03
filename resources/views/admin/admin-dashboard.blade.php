<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white fixed top-0 w-full shadow-md z-50">
        @include('layouts.navbaradmin')
    </header>

    <!-- Main Content -->
    <main class="flex-1 mt-[12%] px-4 py-8">
        <div class="bg-gradient-to-r from-gray-600 via-gray-500 to-gray-400 text-white p-6 rounded-xl shadow-lg max-w-2xl mx-auto text-center">
            <h1 class="text-3xl font-semibold mb-4">Welcome to the Dashboard, Admin!</h1>
            <p class="text-lg mb-2">You're doing a fantastic job! Keep up the great work.</p>
            <p class="text-lg">Here’s a place to manage all the magic!</p>
        </div>
    </main>

    <!-- Footer -->
    @include('layouts.footer')

</body>

</html>
