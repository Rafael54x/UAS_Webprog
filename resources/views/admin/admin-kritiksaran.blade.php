<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Kritik & Saran</title>
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
</head>
<body class="bg-gray-100 font-sans">
    @include('layouts.navbaradmin')

    <main class="container mx-auto py-8 px-4 lg:px-8">
        <h1 class="text-center text-3xl font-extrabold text-gray-800 mb-8 mt-20">
            Admin Panel - Kritik & Saran
        </h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table -->
        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full bg-white rounded-lg">
                <thead>
                    <tr class="bg-gradient-to-r from-gray-200 to-gray-300 text-gray-700 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Kritik</th>
                        <th class="py-3 px-6 text-left">Saran</th>
                        <th class="py-3 px-6 text-left">Timestamp</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach($data as $item)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $item->id }}</td>
                            <td class="py-3 px-6">{{ $item->kritik }}</td>
                            <td class="py-3 px-6">{{ $item->saran }}</td>
                            <td class="py-3 px-6">{{ $item->timestamp }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4 mt-8">
            <!-- Clear Button -->
            <form action="{{ route('kritik-saran.clear') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-medium px-5 py-2 rounded-lg shadow-md">
                    Clear All Data
                </button>
            </form>

            <!-- Export Button -->
            <a href="{{ route('kritik-saran.export') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-5 py-2 rounded-lg shadow-md">
                Download Kritik & Saran (Excel)
            </a>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
