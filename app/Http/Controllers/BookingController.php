<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Hotel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function bookingHotel(Hotel $hotel)
    {
        return view('hotel.booking', [
            'hotel' => $hotel
        ]);
    }
    public function create(Request $request, Hotel $hotel)
    {
        $validated = $request->validate([
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
            'number_of_rooms' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);
    
        try {
            // Simpan data ke database
            $booking = Booking::create([
                'check_in_date' => $validated['check_in_date'],
                'check_out_date' => $validated['check_out_date'],
                'number_of_rooms' => $validated['number_of_rooms'],
                'total_price' => $validated['total_price'],
                'hotel_id' => $hotel->id,
                'user_id' => auth()->user()->id,
            ]);
    
            return response()->json([
                'success' => true,
                'message' => 'Pemesanan berhasil.',
                'data' => $booking,
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memproses pemesanan.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
