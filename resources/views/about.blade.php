@extends('master.layout')

@section('title')
About Adiwiyata SMK PGRI 2 Ponorogo
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-primary">About Adiwiyata SMK PGRI 2 Ponorogo</h1>
            <p class="lead text-justify">
                SMK PGRI 2 Ponorogo berkomitmen untuk mengembangkan sekolah yang tidak hanya unggul dalam bidang akademik, tetapi juga peduli terhadap lingkungan hidup. Salah satu bentuk komitmen tersebut diwujudkan melalui program <b>Adiwiyata</b>, sebuah program yang bertujuan untuk menciptakan sekolah yang berbudaya lingkungan, dimana seluruh elemen sekolah berperan aktif dalam menjaga dan melestarikan lingkungan sekitar.
            </p>
            <h2 class="mt-4">Tujuan Program Adiwiyata</h2>
            <ul class="list-group">
                <li class="list-group-item"><b>Membangun kesadaran lingkungan</b> di kalangan siswa, guru, dan seluruh warga sekolah tentang pentingnya menjaga kelestarian alam.</li>
                <li class="list-group-item"><b>Menumbuhkan sikap peduli lingkungan</b> melalui berbagai kegiatan yang mengintegrasikan aspek pendidikan lingkungan dalam kurikulum dan aktivitas sekolah.</li>
                <li class="list-group-item"><b>Mengimplementasikan pola hidup berkelanjutan</b> dengan mengurangi dampak negatif terhadap lingkungan dan mengoptimalkan sumber daya alam secara bijaksana.</li>
            </ul>

            <h2 class="mt-4">Pencapaian SMK PGRI 2 Ponorogo dalam Adiwiyata</h2>
            <p class="text-justify">
                Sejak mengikuti program Adiwiyata, SMK PGRI 2 Ponorogo telah berhasil menjalankan berbagai inisiatif dan kegiatan yang mendukung prinsip-prinsip lingkungan hidup, antara lain:
            </p>
            <ul class="list-group">
                <li class="list-group-item"><b>Pengelolaan Sampah:</b> Sekolah ini menerapkan prinsip 3R (Reduce, Reuse, Recycle) dalam pengelolaan sampah. Setiap warga sekolah diajak untuk memilah sampah sesuai jenisnya, mengurangi penggunaan plastik, dan mendaur ulang barang-barang yang masih bisa digunakan kembali.</li>
                <li class="list-group-item"><b>Penghijauan Lingkungan:</b> SMK PGRI 2 Ponorogo memiliki banyak area hijau, seperti taman, kebun, dan tanaman obat keluarga (TOGA). Siswa terlibat langsung dalam kegiatan penghijauan, menanam, dan merawat tanaman di area sekolah.</li>
                <li class="list-group-item"><b>Pendidikan Lingkungan Hidup:</b> Pendidikan tentang pentingnya lingkungan hidup tidak hanya diajarkan di dalam kelas, tetapi juga melalui berbagai kegiatan ekstra kurikuler seperti lomba poster, seminar, dan kampanye lingkungan.</li>
                <li class="list-group-item"><b>Hemat Energi dan Sumber Daya Alam:</b> Sebagai bagian dari program Adiwiyata, sekolah ini juga menerapkan kebijakan hemat energi, seperti pemadaman lampu dan perangkat elektronik yang tidak digunakan, serta penggunaan air secara efisien.</li>
                <li class="list-group-item"><b>Kolaborasi dengan Masyarakat:</b> SMK PGRI 2 Ponorogo melibatkan masyarakat sekitar dalam berbagai kegiatan lingkungan, termasuk bakti sosial dan aksi bersih-bersih.</li>
            </ul>

            <h2 class="mt-4">Keuntungan bagi Sekolah dan Siswa</h2>
            <p class="text-justify">
                Implementasi program Adiwiyata memberikan manfaat yang sangat besar bagi sekolah dan siswa, di antaranya:
            </p>
            <ul class="list-group">
                <li class="list-group-item"><b>Lingkungan Sekolah yang Sehat dan Asri:</b> Lingkungan yang bersih dan hijau mendukung proses belajar mengajar yang lebih nyaman dan produktif bagi siswa dan guru.</li>
                <li class="list-group-item"><b>Pembentukan Karakter Siswa:</b> Siswa tidak hanya belajar tentang ilmu pengetahuan, tetapi juga belajar bagaimana menjaga dan merawat lingkungan. Hal ini membentuk karakter mereka agar lebih peduli terhadap masalah lingkungan.</li>
                <li class="list-group-item"><b>Meningkatkan Citra Sekolah:</b> Sebagai sekolah yang berkomitmen terhadap lingkungan, SMK PGRI 2 Ponorogo mendapatkan pengakuan dan penghargaan atas upaya yang dilakukan untuk melestarikan lingkungan.</li>
            </ul>

            <h2 class="mt-4">Harapan SMK PGRI 2 Ponorogo</h2>
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
