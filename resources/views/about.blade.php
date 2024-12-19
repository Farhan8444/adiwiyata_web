@extends('master.layout')

@section('title')
About Adiwiyata SMK PGRI 2 Ponorogo
@endsection

@section('content')
<div class="container" style="padding-top: 48px;">
    <div class="row">
        <div class="col-md-12">
            <!-- Menambahkan kelas khusus untuk teks dengan latar belakang -->
            <h1 class="text-center profile-header">TENTANG KAMI</h1>
            <p class="lead text-center">
                SMK PGRI 2 Ponorogo berkomitmen untuk mengembangkan sekolah yang tidak hanya unggul dalam bidang akademik, tetapi juga peduli terhadap lingkungan hidup. Salah satu bentuk komitmen tersebut diwujudkan melalui program <b>Adiwiyata</b>, sebuah program yang bertujuan untuk menciptakan sekolah yang berbudaya lingkungan, dimana seluruh elemen sekolah berperan aktif dalam menjaga dan melestarikan lingkungan sekitar.
            </p>
            <h2 class="subheading">Tujuan Program Adiwiyata</h2>
            <ul class="list-group mb-4">
                <li class="list-group-item"><b>Membangun kesadaran lingkungan</b> di kalangan siswa, guru, dan seluruh warga sekolah tentang pentingnya menjaga kelestarian alam.</li>
                <li class="list-group-item"><b>Menumbuhkan sikap peduli lingkungan</b> melalui berbagai kegiatan yang mengintegrasikan aspek pendidikan lingkungan dalam kurikulum dan aktivitas sekolah.</li>
                <li class="list-group-item"><b>Mengimplementasikan pola hidup berkelanjutan</b> dengan mengurangi dampak negatif terhadap lingkungan dan mengoptimalkan sumber daya alam secara bijaksana.</li>
            </ul>

            <h2 class="subheading">Pencapaian SMK PGRI 2 Ponorogo dalam Adiwiyata</h2>
            <p class="text-justify">
                Sejak mengikuti program Adiwiyata, SMK PGRI 2 Ponorogo telah berhasil menjalankan berbagai inisiatif dan kegiatan yang mendukung prinsip-prinsip lingkungan hidup, antara lain:
            </p>
            <ul class="list-group mb-4">
                <li class="list-group-item"><b>Pengelolaan Sampah:</b> Sekolah ini menerapkan prinsip 3R (Reduce, Reuse, Recycle) dalam pengelolaan sampah. Setiap warga sekolah diajak untuk memilah sampah sesuai jenisnya, mengurangi penggunaan plastik, dan mendaur ulang barang-barang yang masih bisa digunakan kembali.</li>
                <li class="list-group-item"><b>Penghijauan Lingkungan:</b> SMK PGRI 2 Ponorogo memiliki banyak area hijau, seperti taman, kebun, dan tanaman obat keluarga (TOGA). Siswa terlibat langsung dalam kegiatan penghijauan, menanam, dan merawat tanaman di area sekolah.</li>
                <li class="list-group-item"><b>Pendidikan Lingkungan Hidup:</b> Pendidikan tentang pentingnya lingkungan hidup tidak hanya diajarkan di dalam kelas, tetapi juga melalui berbagai kegiatan ekstra kurikuler seperti lomba poster, seminar, dan kampanye lingkungan.</li>
                <li class="list-group-item"><b>Hemat Energi dan Sumber Daya Alam:</b> Sebagai bagian dari program Adiwiyata, sekolah ini juga menerapkan kebijakan hemat energi, seperti pemadaman lampu dan perangkat elektronik yang tidak digunakan, serta penggunaan air secara efisien.</li>
                <li class="list-group-item"><b>Kolaborasi dengan Masyarakat:</b> SMK PGRI 2 Ponorogo melibatkan masyarakat sekitar dalam berbagai kegiatan lingkungan, termasuk bakti sosial dan aksi bersih-bersih.</li>
            </ul>

            <h2 class="subheading">Keuntungan bagi Sekolah dan Siswa</h2>
            <p class="text-justify">
                Implementasi program Adiwiyata memberikan manfaat yang sangat besar bagi sekolah dan siswa, di antaranya:
            </p>
            <ul class="list-group mb-4">
                <li class="list-group-item"><b>Lingkungan Sekolah yang Sehat dan Asri:</b> Lingkungan yang bersih dan hijau mendukung proses belajar mengajar yang lebih nyaman dan produktif bagi siswa dan guru.</li>
                <li class="list-group-item"><b>Pembentukan Karakter Siswa:</b> Siswa tidak hanya belajar tentang ilmu pengetahuan, tetapi juga belajar bagaimana menjaga dan merawat lingkungan. Hal ini membentuk karakter mereka agar lebih peduli terhadap masalah lingkungan.</li>
                <li class="list-group-item"><b>Meningkatkan Citra Sekolah:</b> Sebagai sekolah yang berkomitmen terhadap lingkungan, SMK PGRI 2 Ponorogo mendapatkan pengakuan dan penghargaan atas upaya yang dilakukan untuk melestarikan lingkungan.</li>
            </ul>

            <h2 class="subheading">Harapan SMK PGRI 2 Ponorogo</h2>
            <p class="text-justify">
                Dengan mengikuti program Adiwiyata, SMK PGRI 2 Ponorogo berharap dapat melahirkan generasi muda yang tidak hanya cerdas secara akademik, tetapi juga memiliki kepedulian yang tinggi terhadap kelestarian lingkungan. Sekolah ini juga terus berupaya untuk memperluas jangkauan program Adiwiyata, dengan meningkatkan partisipasi masyarakat dan menciptakan lingkungan belajar yang semakin hijau dan ramah lingkungan.
            </p>
            <p class="text-justify">
                Melalui program ini, SMK PGRI 2 Ponorogo ingin menjadi contoh bagi sekolah-sekolah lain dalam menciptakan lingkungan sekolah yang berbudaya lingkungan hidup.
            </p>
        </div>
    </div>
</div>
@endsection

<!-- Inline CSS for About Adiwiyata Page Styling -->
<style>
    /* General Page Styling */
body {
    background-color: #f9f9f9; /* Warna latar belakang lembut */
    font-family: 'Arial', sans-serif; /* Menggunakan font Arial */
    color: #2c3e50; /* Warna teks utama */
}

/* Menambahkan latar belakang pada bagian judul Profil */
.profile-header {
    background-color: #f0f8ff; /* Warna latar belakang biru muda */
    color: #2c3e50; /* Warna teks */
    padding: 30px 20px; /* Memberikan padding pada teks */
    border-radius: 8px; /* Membuat sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan bayangan halus */
    font-size: 2.8rem; /* Ukuran font */
    font-weight: bold; /* Menebalkan teks */
    text-transform: uppercase; /* Membuat teks menjadi huruf kapital semua */
    margin-bottom: 20px;
}

/* Subheading Styling */
h2.subheading {
    font-size: 2rem;
    color: #16a085; /* Warna hijau tegas yang sama dengan Profil */
    margin-top: 30px;
    margin-bottom: 15px;
    text-transform: uppercase;
    font-weight: bold;
    border-bottom: 2px solid #16a085; /* Garis bawah */
    padding-bottom: 5px;
}

/* List Group Styling */
.list-group-item {
    background-color: #ffffff;
    border: 1px solid #ddd; /* Border lembut */
    border-radius: 8px;
    margin-bottom: 10px;
    padding: 15px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.list-group-item:hover {
    background-color: #f4f9f9; /* Warna hover lembut */
    transform: scale(1.02);
}

.list-group-item b {
    color: #16a085; /* Warna hijau pada teks tebal */
}

/* General Typography */
h1, h2, h3 {
    color: #16a085; /* Warna hijau tegas yang sama dengan Profil */
}

h1 {
    font-size: 3rem;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 20px;
    letter-spacing: 2px; /* Spasi antar huruf */
}

h2 {
    font-size: 2rem;
    margin-top: 40px;
    text-transform: uppercase;
    font-weight: bold;
    border-bottom: 2px solid #16a085; /* Garis bawah */
    padding-bottom: 5px;
}

p {
    color: #34495e; /* Warna teks seperti di Profil */
    line-height: 1.8;
    font-size: 1rem;
    margin-top: 10px;
}

ul, ol {
    font-size: 1rem;
    color: #34495e; /* Warna teks seperti di Profil */
    line-height: 1.8;
    padding-left: 20px;
    margin-top: 10px;
}

/* Button Styling (Optional) */
.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 20px;
    background-color: #16a085; /* Hijau tegas */
    color: #ffffff;
    font-size: 1rem;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-decoration: none;
}

.btn:hover {
    background-color: #138d75;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    h1 {
        font-size: 2.5rem;
    }

    h2 {
        font-size: 1.5rem;
    }

    p, ul, ol {
        font-size: 0.9rem;
    }
}
</style>
