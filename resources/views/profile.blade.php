@extends('master.layout')

@section('title')
    Profil Adiwiyata
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Profil Adiwiyata di SMK PGRI 2 Ponorogo</h1>
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
    /* Page Styling */
    .container {
        padding: 0px;
        border-radius: 12px;
    }

    h1 {
        font-size: 3rem;
        color: #2980b9;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .lead {
        font-size: 1.2rem;
        color: #34495e;
        line-height: 1.6;
    }

    .subheading {
        font-size: 2rem;
        color: #2980b9;
        margin-top: 30px;
        margin-bottom: 15px;
        text-transform: uppercase;
        font-weight: bold;
    }

    ul, ol {
        font-size: 1rem;
        color: #34495e;
        line-height: 1.8;
    }

    /* List Styling */
    .list-group-item {
        background-color: #ecf0f1;
        border: none;
        border-radius: 8px;
        margin-bottom: 10px;
        padding: 15px;
        transition: all 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #d5dbdb;
        transform: scale(1.03);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        h1 {
            font-size: 2.5rem;
        }

        .lead {
            font-size: 1rem;
        }

        .subheading {
            font-size: 1.5rem;
        }

        .list-group-item {
            font-size: 1rem;
        }
    }
</style>
