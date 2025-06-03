@extends('layouts.hotel')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-2xl shadow-lg p-6 mt-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $hotel->name }}</h1>
        <p class="text-gray-600 text-lg mb-6">
            {{ $hotel->description ?? 'No description available.' }}
        </p>

        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Available Rooms</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($hotel->rooms as $room)
                <div class="bg-gray-50 border border-gray-200 rounded-xl shadow-sm p-4 hover:shadow-md transition">
                    <span class="text-2xl">🛏️</span>
                    <h3 class="text-xl font-bold text-gray-700">{{ $room->name }}</h3>
                    <p class="text-gray-500">Type: <span class="font-semibold text-gray-700">{{ $room->room_type->name ?? 'N/A' }}</span></p>
                </div>
            @empty
                <div class="col-span-full">
                    <p class="text-gray-500 italic">No rooms available at this moment.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-6">
            <a href="{{ route('hotels.index') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition">
                ← Back to hotels
            </a>
        </div>
    </div>
</div>
@endsection
