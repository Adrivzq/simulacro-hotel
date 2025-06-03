@extends('layouts.hotel')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">All Hotels</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($hotels as $hotel)
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
                {{-- Image from local resource based on index --}}
                @php
                    //$imageNumber = $loop->iteration;
                    $imagePath = asset("images/hotels/{$hotel->id}.png");
                @endphp

                <img 
                    src="{{ $imagePath }}" 
                    alt="Image of {{ $hotel->name }}" 
                    class="w-full h-48 object-cover"
                    onerror="this.src='{{ asset('images/hotels/default.png') }}';"
                >

                {{-- Content --}}
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $hotel->name }}</h2>
                    <p class="text-gray-500 text-sm mb-3">
                        {{ Str::limit($hotel->description, 80) ?? 'No description available.' }}
                    </p>
                    <a href="{{ route('hotels.show', $hotel->id) }}"
                       class="inline-block mt-auto text-blue-600 hover:underline font-medium">
                        View details →
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Empty state --}}
    @if($hotels->isEmpty())
        <p class="text-gray-500 italic mt-6">No hotels found.</p>
    @endif
</div>
@endsection
