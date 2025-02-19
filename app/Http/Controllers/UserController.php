<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // Mendapatkan user yang sedang login
        $user = auth()->user();
    
        // Mengambil history booking berdasarkan user yang login
        $histories = Booking::where('user_id', $user->id)
        ->where('status', 'confirmed')
        ->get();
    
        // Mengembalikan data ke view atau API
        return view('profile.index', [
            'histories' => $histories
            ]);
    }
    
}
