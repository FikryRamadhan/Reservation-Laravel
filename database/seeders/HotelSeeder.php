<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = [
            [
                'name' => 'Hotel Indonesia',
                'address' => 'Jakarta, Indonesia',
                'description' => 'Hotel Indonesia adalah salah satu landmark ikonik di Jakarta yang memadukan gaya arsitektur modern dengan layanan kelas dunia. Terletak di pusat ibu kota, hotel ini menawarkan akses mudah ke pusat bisnis, perbelanjaan, dan hiburan. Setiap kamar dilengkapi dengan fasilitas mewah, termasuk Wi-Fi gratis, TV layar datar, dan kamar mandi dengan perlengkapan mandi premium.',
                'price_per_night' => 300,
            ],
            [
                'name' => 'Hotel Bali',
                'address' => 'Bali, Indonesia',
                'description' => 'Terletak di salah satu destinasi wisata terbaik di dunia, Hotel Bali menawarkan pengalaman menginap yang tak terlupakan dengan pemandangan pantai yang menakjubkan dan suasana tropis yang menenangkan. Hotel ini dirancang dengan gaya arsitektur tradisional Bali yang memadukan kenyamanan modern.',
                'price_per_night' => 400,
            ],
            [
                'name' => 'Hotel Surabaya',
                'address' => 'Surabaya, Indonesia',
                'description' => 'Hotel Surabaya adalah perpaduan sempurna antara kenyamanan modern dan keramahan khas Jawa Timur. Terletak di jantung kota Surabaya, hotel ini menawarkan kamar-kamar luas yang dirancang dengan estetika kontemporer.',
                'price_per_night' => 500,
            ],
            [
                'name' => 'Hotel Bandung',
                'address' => 'Bandung, Indonesia',
                'description' => 'Terletak di kota Bandung yang sejuk, Hotel Bandung adalah tempat pelarian yang ideal dari hiruk-pikuk kota besar. Hotel ini dikelilingi oleh pemandangan pegunungan yang indah dan menawarkan suasana yang tenang.',
                'price_per_night' => 600,
            ],
            [
                'name' => 'Hotel Yogyakarta',
                'address' => 'Yogyakarta, Indonesia',
                'description' => 'Hotel Yogyakarta adalah pilihan utama bagi wisatawan yang ingin mengeksplorasi kekayaan budaya dan sejarah kota ini. Terletak dekat dengan tempat-tempat ikonik seperti Keraton Yogyakarta dan Malioboro.',
                'price_per_night' => 700,
            ],
            [
                'name' => 'Hotel Medan',
                'address' => 'Medan, Indonesia',
                'description' => 'Hotel Medan menawarkan pengalaman menginap yang nyaman dengan suasana kota yang dinamis. Hotel ini memiliki fasilitas modern, termasuk restoran dengan masakan lokal dan internasional, serta layanan spa yang menenangkan.',
                'price_per_night' => 350,
            ],
            [
                'name' => 'Hotel Makassar',
                'address' => 'Makassar, Indonesia',
                'description' => 'Hotel Makassar terletak dekat dengan Pantai Losari, memberikan pengalaman menginap dengan pemandangan laut yang menakjubkan. Hotel ini memiliki kolam renang rooftop dan layanan kamar 24 jam.',
                'price_per_night' => 450,
            ],
            [
                'name' => 'Hotel Lombok',
                'address' => 'Lombok, Indonesia',
                'description' => 'Hotel Lombok menawarkan akomodasi dengan pemandangan Gunung Rinjani yang menakjubkan. Dikelilingi oleh pantai-pantai indah, hotel ini cocok untuk wisatawan yang mencari ketenangan dan keindahan alam.',
                'price_per_night' => 550,
            ],
            [
                'name' => 'Hotel Malang',
                'address' => 'Malang, Indonesia',
                'description' => 'Hotel Malang menghadirkan suasana nyaman dengan udara pegunungan yang sejuk. Hotel ini cocok untuk keluarga dengan fasilitas taman bermain dan kolam renang anak-anak.',
                'price_per_night' => 400,
            ],
            [
                'name' => 'Hotel Semarang',
                'address' => 'Semarang, Indonesia',
                'description' => 'Hotel Semarang adalah pilihan ideal bagi pelancong bisnis dan wisatawan. Terletak di pusat kota, hotel ini menawarkan fasilitas ruang rapat yang lengkap dan akses mudah ke destinasi wisata seperti Lawang Sewu.',
                'price_per_night' => 500,
            ],
        ];


        foreach ($hotels as $hotel) {
            Hotel::firstOrCreate($hotel);
        }
    }
}
