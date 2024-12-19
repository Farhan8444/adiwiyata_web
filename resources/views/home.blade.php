@extends('master.layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="container" style="padding-top: 65px;">
        <div class="row">
            <div class="col-md-12 text-center welcome-section">
                <h1 class="text-dark">SELAMAT DATANG DI WEBSITE ADIWIYATA SMK PGRI 2 PONOROGO </h1>
                <p class="lead text-success">Cerdas, Berwawasan Lingkungan, Siap Membangun Masa Depan Hijau!</p>
            </div>
        </div>

        {{-- Flash Message --}}
        <div class="row mt-4">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        {{-- Adiwiyata SMK PGRI 2 Ponorogo --}}
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h3 class="text-dark">Adiwiyata SMK PGRI 2 Ponorogo</h3>
                <p class="text-success">SMK PGRI 2 Ponorogo dengan bangga mempersembahkan komitmennya dalam menjaga dan melestarikan lingkungan melalui program Adiwiyata. Sebagai sekolah yang berfokus pada pendidikan lingkungan, SMK PGRI 2 Ponorogo berupaya untuk menciptakan generasi muda yang peduli lingkungan dan berwawasan hijau.</p>
                <p class="text-success">Program Adiwiyata ini meliputi berbagai inisiatif seperti pengelolaan sampah, penghijauan, serta peningkatan kesadaran lingkungan di kalangan siswa, guru, dan masyarakat sekitar. Dengan berbagai kegiatan yang melibatkan seluruh pihak sekolah, SMK PGRI 2 Ponorogo siap untuk berkontribusi pada masa depan yang lebih hijau dan berkelanjutan.</p>
            </div>
        </div>

        <div class="col-md-12">
            <!-- Menambahkan kelas khusus untuk teks dengan latar belakang -->
            <h3 class="text-center profile-header">Tentang Kami</h3>
            <p class="lead text-center">
                SMK PGRI 2 Ponorogo berkomitmen untuk mengembangkan sekolah yang tidak hanya unggul dalam bidang akademik, tetapi juga peduli terhadap lingkungan hidup. Salah satu bentuk komitmen tersebut diwujudkan melalui program <b>Adiwiyata</b>, sebuah program yang bertujuan untuk menciptakan sekolah yang berbudaya lingkungan, dimana seluruh elemen sekolah berperan aktif dalam menjaga dan melestarikan lingkungan sekitar.
            </p>
            <!-- Tombol Selengkapnya -->
            <div class="text-center">
                <a href="{{ route('about') }}" class="btn btn-success btn-lg">Selengkapnya</a>
            </div>
        </div>


        {{-- Artikel Terbaru --}}
        <div class="row mt-5">
            <div class="col-md-12">
            </div>
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            @if ($post->image)
                                <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" width="350" height="200">
                            @else
                                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title text-dark">{{ Str::limit($post->title, 30) }}</h5>
                                <p class="card-text text-success">{{ Str::limit($post->body, 100) }}</p>
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-success">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <p class="text-center text-success">Tidak ada artikel terbaru saat ini.</p>
                </div>
            @endif
        </div>
    </div>
@endsection

<style>
    /* Mengatur font untuk seluruh halaman */
body {
    font-family: 'Arial', sans-serif;
}

/* Styling untuk background section Selamat Datang */
.welcome-section {
    background-color: #f0f8ff; /* Light Blue Background */
    color: #2c3e50;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.welcome-section h1 {
    font-size: 2.8rem;
    font-weight: bold;
    color: #003366; /* Dark Blue */
    margin-bottom: 15px;
}

.welcome-section p {
    font-size: 1.25rem;
    color: #28a745; /* Green */
    line-height: 1.6;
}

/* Styling untuk Adiwiyata SMK PGRI 2 Ponorogo */
.adiwiyata-section {
    background-color: #f5f5f5;
    padding: 40px 0;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
}

.adiwiyata-section h3 {
    font-size: 36px;
    color: #2c3e50;
    font-weight: bold;
}

.adiwiyata-section p {
    font-size: 18px;
    color: #555;
    line-height: 1.6;
}

.adiwiyata-section .btn {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    text-transform: uppercase;
    font-weight: bold;
    transition: background-color 0.3s;
}

.adiwiyata-section .btn:hover {
    background-color: #218838;
}

/* Styling untuk card artikel */
.card {
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    border-radius: 10px 10px 0 0;
    height: 200px;
    object-fit: cover;
}

.card-body {
    background-color: #ffffff;
    border-radius: 0 0 10px 10px;
}

.card-title {
    font-size: 20px;
    color: #333;
    font-weight: bold;
}

.card-text {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

.btn-success {
    background-color: #28a745;
    color: white;
    border-radius: 20px;
    padding: 8px 20px;
    font-size: 16px;
    text-transform: uppercase;
    transition: background-color 0.3s;
}

.btn-success:hover {
    background-color: #218838;
}

/* Flash Message */
.alert {
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 20px;
    font-size: 18px;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}
</style>
