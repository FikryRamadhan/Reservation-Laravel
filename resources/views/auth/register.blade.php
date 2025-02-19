

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Register | Traveloop</title>
    <style>
        body {
            background: #ececec;
        }

        .box-area {
            width: 930px;
        }

        .right-box {
            padding: 40px 30px 40px 40px;
        }

        ::placeholder {
            font-size: 16px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        @media only screen and (max-width: 768px) {
            .box-area {
                margin: 0 10px;
            }

            .left-box {
                height: 100px;
                overflow: hidden;
            }

            .right-box {
                padding: 20px;
            }
        }
    </style>
</head>

<body style="width: 100vw; overflow-x: hidden">
    <div class="row border rounded-5 p-5 bg-white" style="height: 100vh !important">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe">
                <h2 class="fs-1 text-white">Traveloop</h2>
                <p class="text-white fs-4">
                    Find Your Perfect Stay
                </p>
            </div>

            <div class="col-md-6 right-box d-flex align-items-center">
                <div class="row align-items-center w-100">
                    <form action="{{ route('auth.registerVerify') }}" method="POST">
                        @csrf
                        <div class="header-text mb-4">
                            <h2>Registrasi</h2>
                            <p>Masukkan nama, email dan password untuk daftar Traveloop!</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control form-control-lg bg-light fs-6 @error('name') is-invalid @enderror"
                                placeholder="Name" />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                                placeholder="Email" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror"
                                placeholder="Password" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="confirm_password"
                                class="form-control form-control-lg bg-light fs-6 @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password" />
                            @error('confirm_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3 mt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">
                                Registrasi
                            </button>
                        </div>

                        <div class="row">
                            <small>Sudah punya akun? <a href="{{ route('login') }}">Login</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
