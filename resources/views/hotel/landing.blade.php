@extends('layout.bootstrap')

@section('title', 'Traveloop is here!')

@section('header')

<div>
    <x-carousel :interval="2000" :images="[
      ['src' => 'hotel-1.jpg', 'title' => 'Amazing Beach', 'caption' => 'A serene view of the beach'],
      ['src' => 'hotel-2.jpg', 'title' => 'Mountain Escape', 'caption' => 'Perfect getaway in the mountains'],
      ['src' => 'hotel-1.jpg', 'title' => 'City Lights', 'caption' => 'Discover the vibrant city life']
  ]" />
</div>

@endsection

@section('content')
  <section>
    <div class="py-5 mt-5">
      <div class="row align-items-center">
          <div class="col-md-6 text-start text-md-start">
              <h3 class="judul lg-fs-1 fw-bold">Dapatkan pengalaman yang <br> tak terlupakan dengan satu <br> kali klik</h3>
              <p class="mt-3 fs-6 fs-sm-5 fs-md-4">
                  Kami menyediakan hotel berkualitas di berbagai lokasi dengan pemesanan yang mudah dan praktis untuk kenyamanan perjalanan Anda.
              </p>
              <a href="#" class="btn btn-md text-white rounded mt-5 d-flex justify-content-start" style="background-color: #0ea5e9; width: 140px">Pesan Sekarang</a>
          </div>
          <div class="col-md-6 d-none d-md-flex justify-content-center">
              <x-stack-image />
          </div>
      </div>
    </div>
  </section>

  <section>
    <div class="pt-5">
      <div class="text-center mb-4">
        <h2 class="fw-bold fs-4 fs-md-3">HOTEL</h2>
        <p class="fs-6 fs-md-5 mx-auto w-md-50">
          Kami menawarkan penginapan terbaik dengan kualitas unggul, lokasi strategis, dan kemudahan pemesanan praktis.
        </p>
      </div>
      <div class="row row-cols-1 row-cols-md-3">
          @foreach ($hotels as $index => $hotel)
            <x-card-hotel 
              id="{{ $hotel->id }}" 
              name="{{ $hotel->name }}" 
              address="{{ $hotel->address }}" 
              description="{{ $hotel->description }}" 
              image="{{ $hotel->image }}" 
              price="{{ $hotel->price_per_night }}" 
            />
          @endforeach
      </div>
    </div>
    
    <!-- Button to toggle expand/collapse -->
    <div class="text-center">
        <a href="{{ route('hotel.all') }}" class="btn mt-2 text-white" style="background-color: #0ea5e9">Lihat Selengkapnya</a>
    </div>
  </section>

  <div class="py-5 mt-3">
    <h2 class="text-center mb-4">Rekomendasi Hotel</h2>
    <div class="row g-3">
        @foreach ($recomended as $item)
            <div class="col-lg-4 col-6 col-md-6 mb-md-4 p-md-3 p-1 mt-0">
                <a href="#" class="card position-relative text-white rounded-3">
                    @if ($item->image)
                        @php
                            $firstImage = $item->image[0]; 
                        @endphp
                        <img src="{{ asset('storage/' . $firstImage) }}" class="card-img-top"
                            alt="{{ $item->name }}">
                    @else
                        <img src="{{ asset('static/hotel1.jpg') }}" class="card-img rounded-3" alt="Indonesia">
                    @endif
                    <div class="custom-overlay rounded-3"></div>
                    <div class="position-absolute top-50 start-0 text-start p-3" style="transform: translateY(-50%);">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->address  }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
  </div>

  <section id="our-service" class="py-5">
    <div class="row align-items-center">
      <div class="mt-0 mt-md-1 col-12 col-md-6 d-flex justify-content-center">
        <x-stack-image />
      </div>
      <div class="col-12 col-lg-6 text-center">
        <h2 class="text-uppercase mb-4">Our Services</h2>
        <div class="row">
          <div class="col-4 col-md-6 col-lg-3 mb-md-1 md-1 p-md-2 p-1">
            <x-card-service name="TV" icon="tv" />
          </div>
          <div class="col-4 col-md-6 col-lg-3 mb-md-1 md-1 p-md-2 p-1">
            <x-card-service name="Coffe/Tea" icon="cup-hot" />
          </div>
          <div class="col-4 col-md-6 col-lg-3 mb-md-1 md-1 p-md-2 p-1">
            <x-card-service name="AC" icon="box" />
          </div>
          <div class="col-4 col-md-6 col-lg-3 mb-md-1 md-1 p-md-2 p-1">
            <x-card-service name="Lift" icon="box" />
          </div>
          <div class="col-4 col-md-6 col-lg-3 mb-md-1 md-1 p-md-2 p-1">
            <x-card-service name="Controller" icon="box" />
          </div>
          <div class="col-4 col-md-6 col-lg-3 mb-md-1 md-1 p-md-2 p-1">
            <x-card-service name="24 Jam" icon="box" />
          </div>
          <div class="col-6 col-md-6 col-lg-3 mb-md-1 md-1 p-md-2 p-1">
            <x-card-service name="Free Wifi" icon="box" />
          </div>
          <div class="col-6 col-md-6 col-lg-3 mb-md-1 md-1 p-md-2 p-1">
            <x-card-service name="Free Book" icon="box" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="py-5 mb-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3">Butuh Bantuan? <br> Cari Jawaban di FAQ Kami!</h2>
            <p>
                Kami telah mengumpulkan beberapa pertanyaan umum untuk memudahkan Anda dalam menemukan informasi yang
                dibutuhkan.
            </p>
        </div>
        <div class="col-lg-6">
            <x-accordion :accordionItems="[
              ['title' => 'Fasilitas Hotel', 'description' => 'Nikmati kolam renang, gym modern, spa, dan restoran dengan hidangan internasional terbaik.'],
              ['title' => 'Kebijakan Hotel', 'description' => 'Check-in mulai pukul 14.00, check-out pukul 12.00. Anak di bawah 12 tahun gratis jika menggunakan tempat tidur yang tersedia.']
            ]" />
        </div>
    </div>
  </div>
@endsection