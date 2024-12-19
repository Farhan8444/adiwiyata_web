<nav class="navbar navbar-expand-lg navbar-dark bg-success"> <!-- Mengubah bg-dark menjadi bg-success -->
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                </li>
            </ul>
        </div>
        <div class="d-flex mr-2">
            @if (Auth::check())
            <a href="{{ route('logout') }}" class="btn btn-light">Logout</a>
            @else
            <a href="{{ route('signup') }}" class="btn btn-light mx-2" >signup</a>
            <a href="{{ route('signin') }}" class="btn btn-light">signin</a>
            @endif
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top"> <!-- Mengubah bg-info menjadi bg-success -->
    <div class="container">
        <!-- Logo dengan path yang benar -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('LogoAdiwiyata.png') }}" style="height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (!Auth::check())
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                </li>
            </ul>
        </div>
        <a href="{{ route('signup') }}" class="btn btn-outline-light mx-2">Sign Up</a>
        <a href="{{ route('signin') }}" class="btn btn-outline-light">Sign In</a>
        @else
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">Posting</a>
                </li>
            </ul>
        </div>
        <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
        @endif
    </div>
</nav>

<style>
    /* Styling Navbar */
    .navbar {
        padding: 10px 20px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    /* Hover effects for navbar items */
    .navbar-nav .nav-link {
        color: white !important;
        font-weight: 500;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #1abc9c !important; /* Hijau lebih cerah */
        transform: translateX(4px);
    }

    /* Styling the navbar brand (logo) */
    .navbar-brand img {
        height: 70px;
        transition: transform 0.3s ease;
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
    }

    /* Navbar background color change on scroll */
    .navbar.bg-success {
        background-color: #16a085 !important; /* Green tone */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Change navbar background on scroll */
    .navbar.fixed-top {
        background-color: #16a085; /* Background green color for fixed navbar */
    }

    .navbar-toggler {
        border-color: white;
    }

    /* Button hover effects */
    .btn-outline-light {
        border-color: white;
        color: white;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-light:hover {
        background-color: white;
        color: #16a085;
    }

    /* Styling for the fixed navbar */
    .navbar.fixed-top {
        padding: 10px 20px;
        transition: all 0.3s ease;
        z-index: 9999;
    }

    /* Navbar responsiveness for mobile devices */
    @media (max-width: 768px) {
        .navbar-nav .nav-link {
            font-size: 1rem;
        }

        .btn-outline-light {
            font-size: 0.9rem;
        }

        .navbar-brand img {
            height: 60px;
        }
    }

    </style>
