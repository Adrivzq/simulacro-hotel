<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CSS via CDN (for development, use Laravel Mix or Vite in production) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Optional: Customize Tailwind (fonts, colors, etc.) --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#1e40af',
                        secondary: '#64748b',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    {{-- Navigation --}}
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">🏨 Hotel Booking</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="{{ route('hotels.index') }}" class="text-gray-700 hover:text-blue-600">Hotels</a>
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="py-8">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t mt-10 py-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Hotel Booking. All rights reserved.
    </footer>

</body>
</html>
