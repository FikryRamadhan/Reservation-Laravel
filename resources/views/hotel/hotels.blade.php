@extends('layout.bootstrap')

@section('title', 'Traveloop is here!')

@section('content')
<div class="py-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold fs-4 fs-md-3">DAFTAR HOTEL</h2>
        <p class="fs-6 fs-md-5">
            Temukan berbagai pilihan hotel terbaik di sistem Traveloop kami. Kami menyediakan informasi lengkap untuk membantu Anda memilih penginapan yang sesuai dengan kebutuhan Anda.
        </p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-3" id="hotelCards">
        @foreach ($hotels as $index => $hotel)
            <div class="col hotel-card">
                <x-card-hotel 
                    id="{{ $hotel->id }}" 
                    name="{{ $hotel->name }}" 
                    address="{{ $hotel->address }}" 
                    description="{{ $hotel->description }}" 
                    image="{{ $hotel->image }}" 
                    price="{{ $hotel->price_per_night }}" 
                />
            </div>
        @endforeach
    </div>
</div>


@endsection