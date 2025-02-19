    @extends('layout.bootstrap')

    @section('title', $hotel->name)

    @section('content')
        <style>
            .highlight {
                background-color: #f3faff;
                padding: 10px 20px;
                border-radius: 10px;
                font-size: 14px;
                color: #007bff;
                display: inline-block;
                margin-top: 10px;
            }

            .badge-star {
                background-color: #ffd700;
                color: #000;
                padding: 5px 10px;
                border-radius: 5px;
                font-weight: bold;
                font-size: 14px;
            }

            .hotel-images img {
                height: 100px;
                object-fit: cover;
            }
        </style>



        <div class="container my-5">
            <div class="row">
                @php
                    $defaultImage = asset('static/hotel1.png'); // Gambar default
                @endphp
                <div class="col-lg-7">
                    <img src="{{ isset($hotel->image[0]) ? asset('storage/' . $hotel->image[0]) : asset('static/hotel1.jpg') }}"
                        alt="Hotel Main" class="img-fluid rounded"
                        style="min-height: 360px; object-fit: cover; width: 1000px;">
                </div>
                <div class="col-lg-5 mt-3">
                    <div class="row g-2 mb-4 h-100">
                        <div class="col-md-6 col-3">
                            <img src="{{ isset($hotel->image[1]) ? asset('storage/' . $hotel->image[1]) : asset('static/hotel1.jpg') }}" alt="Hotel 1"
                                class="img-fluid rounded w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-md-6 col-3">
                            <img src="{{ isset($hotel->image[2]) ? asset('storage/' . $hotel->image[2]) : asset('static/hotel1.jpg') }}" alt="Hotel 2"
                                class="img-fluid rounded w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-md-6 col-3">
                            <img src="{{ isset($hotel->image[3]) ? asset('storage/' . $hotel->image[3]) : asset('static/hotel1.jpg') }}" alt="Hotel 3"
                                class="img-fluid rounded w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-md-6 col-3">
                            <img src="{{ isset($hotel->image[4]) ? asset('storage/' . $hotel->image[4]) : asset('static/hotel1.jpg') }}" alt="Hotel 4"
                                class="img-fluid rounded w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="mt-4">
                        <h3 class="fw-bold">{{ $hotel->name }} <span class="badge-star">5★</span></h3>
                        <p>{{ $hotel->address }}</p>
                        <p class="alert alert-primary d-inline-block">Nikmati Pengalaman check in di hotel ini</p>
                        <h5 class="mt-3 fw-bold">Deskripsi</h5>
                        <p>
                            {{ $hotel->description }}.
                        </p>
                        <h5 class="fw-bold">Fasilitas</h5>
                        <div class="container bg-light p-4 rounded">
                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <div class="d-flex align-items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-wifi me-2" viewBox="0 0 16 16">
                                            <path
                                                d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049" />
                                            <path
                                                d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z" />
                                        </svg>
                                        <span>Free Wifi</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="d-flex align-items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M13.991 3l.024.001a1.5 1.5 0 0 1 .538.143.76.76 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.5 1.5 0 0 1-.143.538.76.76 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.5 1.5 0 0 1-.538-.143.76.76 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.5 1.5 0 0 1 .143-.538.76.76 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2" />
                                        </svg>
                                        <span class="ms-2">TV</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="d-flex align-items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.669 11.538a.5.5 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686m.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858m.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288" />
                                        </svg>
                                        <span class="ms-2">Premium Spotify</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z" />
                                            <path fill-rule="evenodd"
                                                d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z" />
                                        </svg>
                                        <span class="ms-2">Free Water</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="d-flex align-items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-cup-hot" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2 2 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5M2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175" />
                                            <path
                                                d="m4.4.8-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 3.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 6.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4 4 0 0 0-.204.31 2 2 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.6.6 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3 3 0 0 1-.202.388 5 5 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4 4 0 0 0 .204-.31 2 2 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.6.6 0 0 0-.09-.252A4 4 0 0 0 9.6 2.8l-.01-.012a5 5 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a6 6 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8" />
                                        </svg>
                                        <span class="ms-2">Coffe/Tea</span>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <div class="d-flex  align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16" ">
                                            <path
                                                d=" M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5
                                            0 0 0 0 1m2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0
                                            0 0 1m-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1z" />
                                        <path
                                            d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729q.211.136.373.297c.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466s.34 1.78.364 2.606c.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527s-2.496.723-3.224 1.527c-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.3 2.3 0 0 1 .433-.335l-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a14 14 0 0 0-.748 2.295 12.4 12.4 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.4 12.4 0 0 0-.339-2.406 14 14 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27s-2.063.091-2.913.27" />
                                        </svg>
                                        <span class="ms-2">Game Controller</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-primary fw-bold">
                                Rp. {{ number_format($hotel->price_per_night * 1000, 2, ',', '.') }}
                            </h4>
                            <p>{{ $today . ' - ' . $tomorrow . ' ' }}| 1 Kamar, 2 Tamu</p>
                            <hr>
                            <h5>Total Price: <span class="fw-bold">Rp. {{ number_format($hotel->price_per_night * 1000, 2, ',', '.') }}</span></h5>
                            <a href="{{ route('hotel.booking', $hotel->id) }}" class="btn btn-primary btn-lg w-100 mt-3">PESAN SEKARANG!!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
