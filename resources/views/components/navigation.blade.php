<nav class="navbar navbar-expand-lg sticky-top shadow" style="background-color: #0ea5e9">
    <div class="container">
        <a class="navbar-brand text-white" href="#">Traveloop</a>
        <button class="navbar-toggler p-1 w-auto h-auto fs-6" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation" id="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
                class="d-flex align-items-center navbar-nav ms-auto w-100 justify-content-center justify-content-lg-end">
                @if (auth()->check())
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('/') ? 'fw-bold' : '' }}"
                            href="{{ route('hotel.landing') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('/list-hotel') ? 'fw-bold' : '' }}"
                            href="{{ route('hotel.all') }}">Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('profile') ? 'fw-bold' : '' }}"
                            href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item mx-3 text-white">
                        |
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('auth.logout') }}" class="btn btn-link nav-link text-white">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('/') ? 'fw-bold' : '' }}"
                            href="{{ route('hotel.landing') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is(['list-hotel']) ? 'fw-bold' : '' }}"
                            href="{{ route('hotel.all') }}">Hotel</a>
                    </li>
                    <li class="nav-item mx-3 text-white">
                        |
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('auth/register') ? 'fw-bold' : '' }}"
                            href="{{ route('auth.register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('login') ? 'fw-bold' : '' }}"
                            href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>


<script>
    const navbarToggler = document.getElementById('navbar-toggler');
    let isToggled = false;

    navbarToggler.addEventListener('click', () => {
        isToggled = !isToggled;

        if (isToggled) {
            navbarToggler.innerHTML = ` 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>`;
        } else {
            navbarToggler.innerHTML = '<span class="navbar-toggler-icon"></span>';
        }
    });
</script>
