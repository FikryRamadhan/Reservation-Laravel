

@extends('layout.bootstrap')

@section('title', 'Profile')

@section('content')
  <div class="container my-5" style="padding-bottom: 180px">
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3 shadow-sm">
          <h5 class="fw-bold">Profile</h5>
          <div class="d-flex align-items-center">
            <div
              class="rounded-circle bg-light d-flex justify-content-center align-items-center me-3"
              style="width: 80px; height: 80px"
            >
              <i class="bi bi-person-circle text-secondary fs-1"></i>
            </div>
            <div>
              <h5 class="mb-1">{{ auth()->user()->name }}</h5>
              <p class="text-muted mb-1">{{ auth()->user()->email }}</p>
            </div>
          </div>

          <p class="mt-3">Tanggal Bergabung: {{ auth()->user()->created_at->translatedFormat('l, d F Y') }}</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card p-3 shadow-sm">
          <h5 class="mb-4 fw-bold">Riwayat Booking</h5>
          <div class="table-responsive">
              <table class="table table-bordered text-center">
                <thead class="table-light">
                  <tr>
                    <td>No</td>
                    <td>Nama Hotel</td>
                    <td>Tanggal Check In</td>
                    <td>Tanggal Check Out</td>
                    <td>Jumlah Kamar</td>
                    <td>Harga</td>
                    <td>Status</td>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($histories as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->hotel->name }}</td>
                      <td>{{ \Carbon\Carbon::parse($item->check_in_date)->translatedFormat('l, d F Y') }}</td>
                      <td>{{ \Carbon\Carbon::parse($item->check_out_date)->translatedFormat('l, d F Y') }}</td>                        
                      <td>{{ $item->number_of_rooms }} Kamar</td>
                      <td>Rp.{{ number_format($item->total_price * 1000, 2, ',', '.') }}</td>
                      <td class="text-success">{{ $item->status }}</td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="7" class="text-muted">
                        Belum ada riwayat booking
                      </td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  

@endsection 