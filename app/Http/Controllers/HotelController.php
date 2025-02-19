<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function landing()
    {
        $allHotel = DB::table('hotels')->limit(3)->get();
        $recomendedHotels = Hotel::withCount(['bookings' => function ($query) {
            $query->where('status', 'confirmed');
        }])
            ->orderBy('bookings_count', 'desc')
            ->take(6)
            ->get();

        return view('hotel.landing', [
            'hotels' => $allHotel,
            'recomended' => $recomendedHotels
        ]);
    }

    public function getAllHotels(){
        $allHotel = DB::table('hotels')->get();
        return view('hotel.hotels',[
            'hotels' => $allHotel
        ]);
    }

    public function detailHotel(Hotel $hotel)
    {
        $today = new DateTime();

        // Salin objek untuk tanggal besok
        $tomorrow = clone $today;
        $tomorrow->modify('+1 day');

        // Format hasil
        $todayFormatted = $today->format('D, d M');
        $tomorrowFormatted = $tomorrow->format('D, d M');
        return view('hotel.detail', [
            'hotel' => $hotel,
            'today' => $todayFormatted,
            'tomorrow' => $tomorrowFormatted
        ]);
    }
}
