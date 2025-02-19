<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [
            [
                'user_id' => 1,
                'hotel_id' => 1,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 1200,
                'status' => 'pending',
            ],
            [
                'user_id' => 1,
                'hotel_id' => 2,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 1600,
                'status' => 'confirmed',
            ],
            [
                'user_id' => 1,
                'hotel_id' => 3,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2000,
                'status' => 'cancelled',
            ],
            [
                'user_id' => 2,
                'hotel_id' => 3,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2000,
                'status' => 'pending',
            ],
            [
                'user_id' => 2,
                'hotel_id' => 4,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2400,
                'status' => 'confirmed',
            ],
            [
                'user_id' => 1,
                'hotel_id' => 4,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2400,
                'status' => 'pending',
            ],
            [
                'user_id' => 3,
                'hotel_id' => 5,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2800,
                'status' => 'pending',
            ],
            [
                'user_id' => 1,
                'hotel_id' => 5,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2800,
                'status' => 'pending',
            ],
            [
                'user_id' => 3,
                'hotel_id' => 3,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2000,
                'status' => 'confirmed',
            ],
            [
                'user_id' => 3,
                'hotel_id' => 3,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2000,
                'status' => 'confirmed',
            ],
            [
                'user_id' => 2,
                'hotel_id' => 3,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2000,
                'status' => 'confirmed',
            ],
            [
                'user_id' => 1,
                'hotel_id' => 3,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'number_of_rooms' => 2,
                'total_price' => 2000,
                'status' => 'confirmed',
            ],
            [
                'user_id' => 4,
                'hotel_id' => 6,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(2),
                'number_of_rooms' => 1,
                'total_price' => 350,
                'status' => 'pending',
            ],
            [
                'user_id' => 4,
                'hotel_id' => 7,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(4),
                'number_of_rooms' => 3,
                'total_price' => 4050,
                'status' => 'confirmed',
            ],
            [
                'user_id' => 2,
                'hotel_id' => 8,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(2),
                'number_of_rooms' => 2,
                'total_price' => 1100,
                'status' => 'pending',
            ],
        ];

        foreach ($bookings as $booking) {
            Booking::firstOrCreate($booking);
        }
    }
}
