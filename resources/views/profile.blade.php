@extends('master.layout')

@section('title')
    Profil Adiwiyata
@endsection

@section('content')
<div class="container" style="padding-top: 48px;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center profile-header">Profil</h1>
            <p class="lead text-center">
                Program Adiwiyata merupakan salah satu program pendidikan lingkungan hidup yang bertujuan untuk menciptakan sekolah yang peduli dan berbudaya lingkungan.
                SMK PGRI 2 Ponorogo adalah salah satu sekolah yang berkomitmen untuk menjalankan program ini sebagai bagian dari upaya mencetak generasi muda yang peduli terhadap kelestarian lingkungan.
            </p>
            <h2 class="subheading">Implementasi Program Adiwiyata</h2>
            <ul class="list-group mb-4">
                <li class="list-group-item"><b>Pengelolaan Sampah:</b> Menerapkan sistem pengelolaan berbasis 3R (Reduce, Reuse, Recycle) dengan pemisahan sampah organik, anorganik, dan B3.</li>
                <li class="list-group-item"><b>Penghijauan Sekolah:</b> Menanam dan merawat berbagai tanaman seperti tanaman hias, pohon pelindung, dan tanaman obat keluarga (TOGA).</li>
                <li class="list-group-item"><b>Pendidikan Lingkungan Hidup:</b> Memasukkan pendidikan lingkungan dalam kurikulum sekolah serta mengadakan diskusi, lomba poster, dan seminar lingkungan.</li>
                <li class="list-group-item"><b>Program Hemat Energi:</b> Menggalakkan kebiasaan hemat energi seperti mematikan lampu dan perangkat elektronik yang tidak digunakan.</li>
                <li class="list-group-item"><b>Kolaborasi dengan Masyarakat:</b> Mengadakan bakti sosial, kampanye lingkungan, dan kerja sama dengan dinas terkait.</li>
            </ul>
            <h2 class="subheading">Manfaat Program Adiwiyata</h2>
            <ol class="mb-4">
                <li>Lingkungan sekolah yang lebih asri dan nyaman untuk belajar.</li>
                <li>Pembentukan karakter siswa yang bertanggung jawab, disiplin, dan cinta lingkungan.</li>
                <li>Peningkatan citra sekolah sebagai institusi yang peduli lingkungan.</li>
            </ol>
            <h2 class="subheading">Harapan ke Depan</h2>
            <p>
                SMK PGRI 2 Ponorogo terus berkomitmen untuk meningkatkan program Adiwiyata agar semakin berdampak luas.
                Dengan semangat bersama, sekolah ini berharap dapat menjadi teladan bagi sekolah lain dalam menciptakan lingkungan yang sehat, bersih, dan lestari.
            </p>
        </div>
    </div>
</div>
@endsection

<!-- Inline CSS for Profil Adiwiyata Page Styling -->
<style>
    /* General Styling */

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

    h1 {
        font-size: 2.8rem;
        color: #2c3e50; /* Warna teks utama */
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 20px;
        letter-spacing: 1.5px;
    }

    .lead {
        font-size: 1.2rem;
        color: #34495e;
        line-height: 1.8;
        text-align: center;
        margin-bottom: 20px;
    }

    h2.subheading {
        font-size: 2rem;
        color: #16a085; /* Warna hijau tegas */
        margin-top: 30px;
        margin-bottom: 15px;
        text-transform: uppercase;
        font-weight: bold;
        border-bottom: 2px solid #16a085; /* Garis bawah */
        padding-bottom: 5px;
    }

    p {
        color: #2c3e50;
        line-height: 1.8;
        font-size: 1rem;
    }

    ul, ol {
        font-size: 1rem;
        color: #34495e;
        line-height: 1.8;
        padding-left: 20px;
        margin-top: 10px;
    }

    /* List Group Styling */
    .list-group-item {
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 10px;
        padding: 15px;
        transition: all 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #f4f9f9;
        transform: scale(1.02);
    }

    .list-group-item b {
        color: #16a085; /* Warna teks tebal */
    }

    /* Ordered List Styling */
    ol {
        list-style-type: decimal;
        padding-left: 40px;
    }

    ol li {
        margin-bottom: 10px;
        color: #34495e;
    }

    /* Buttons for Interactivity (Optional) */
    .btn {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #16a085;
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

        .lead {
            font-size: 1rem;
        }

        h2.subheading {
            font-size: 1.5rem;
        }

        .list-group-item {
            font-size: 0.9rem;
        }

        ol li {
            font-size: 0.9rem;
        }
    }

</style>
