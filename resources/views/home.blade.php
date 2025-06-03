@extends('layouts.hotel')

@section('content')

{{-- HERO SECTION --}}
<div class="relative bg-cover bg-center h-[450px]" style="background-image: url('/images/hero-hotel.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-4xl sm:text-5xl font-bold mb-4">Find Your Perfect Stay</h1>
            <p class="text-lg mb-6">Discover top-rated hotels and book your next trip with ease</p>
            <a href="{{ route('hotels.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-xl">
                Browse Hotels
            </a>
        </div>
    </div>
</div>


{{-- CTA SECTION --}}
<div class="bg-blue-50 py-12">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Need a getaway?</h2>
        <p class="text-gray-600 mb-6">Browse our growing selection of hotels and plan your next trip in minutes.</p>
        <a href="{{ route('hotels.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-xl">
            Start Exploring
        </a>
    </div>
</div>

@endsection
