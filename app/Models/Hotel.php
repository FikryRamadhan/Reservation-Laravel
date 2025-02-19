<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'image',
        'price_per_night',
    ];

    protected $casts = [
        'image' => 'array',
    ];

    // Relasi dengan model Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'hotel_id');
    }
}
