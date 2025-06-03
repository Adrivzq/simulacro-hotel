<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Hotel;
use App\Room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function home()
    {
        $featuredHotels = Hotel::with('rooms')->take(3)->get();
        return view('home', compact('featuredHotels'));
    }

    public function index()
    {
        $hotels = Hotel::withCount('rooms')->get();
        return view('hotels.index', compact('hotels'));
    }

    public function show(Hotel $hotel)
    {
        $hotel->load('rooms.room_type');
        return view('hotels.show', compact('hotel'));
    }
}
