<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
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

<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container">
        <!-- Logo dengan path yang benar -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('logo_adiwiyata2.png') }} "style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (!Auth::check())
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <a href="{{ route('signup') }}" class="btn btn-outline-light mx-2">Sign Up</a>
        <a href="{{ route('signin') }}" class="btn btn-outline-light">Signin</a>
        @else
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('users') }}">Data Users</a>
                </li>
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

