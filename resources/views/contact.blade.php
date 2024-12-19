@extends('master.layout')

@section('title')
    Contact
@endsection

@section('content')
<div class="container" style="padding-top: 65px;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center contact-header">Contact Us</h1>
            <p class="lead text-center">
                Mari bergabung bersama kami menjadi bagian dari keluarga besar Adiwiyata SMK PGRI 2 Ponorogo! Bersama-sama, kita ciptakan lingkungan sekolah yang bersih, hijau, dan berbudaya lingkungan. Tunjukkan kepedulianmu terhadap kelestarian alam dan jadilah agen perubahan bagi masa depan yang lebih baik. Hubungi kami melalui kontak di bawah ini untuk informasi lebih lanjut dan pendaftaran!
            </p>
            <ul class="contact-list">
                <li>
                    <i class="fas fa-whatsapp"></i>
                    <b>WhatsApp:</b> <a href="https://wa.me/085731637000" target="_blank">085731637000</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <b>Gmail:</b> <a href="mailto:smkpgri2ponorogo@yahoo.com">smkpgri2ponorogo@yahoo.com</a>
                </li>
                <li>
                    <i class="fab fa-instagram"></i>
                    <b>Instagram:</b> <a href="https://www.instagram.com/official_smkpgri2ponorogo/" target="_blank">@official_smkpgri2ponorogo</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
<style>
/* General Styling for the Contact Us page */
/* General Styling for the Contact Us page */
.contact-header {
    background-color: #f0f8ff; /* Same background color as the Profil Adiwiyata */
    color: #2c3e50;
    padding: 30px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-size: 2.8rem;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    text-align: center;

    /* Add background styling similar to profile page */
    background-image: url('your-image-path.jpg'); /* Replace with your image path */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Remove the green line under the title */
h1::after {
    content: none; /* This will remove the green line */
}

/* Styling for the paragraph */
.lead {
    font-size: 1.2rem;
    color: #7f8c8d;
    line-height: 1.6;
    margin-bottom: 40px;
    text-align: center;
}

/* Styling for the contact list */
.contact-list {
    list-style-type: none;
    padding: 0;
    font-size: 1.2rem;
    margin: 0 auto;
    max-width: 600px;
}

.contact-list li {
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #ffffff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-list li:hover {
    transform: scale(1.03);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.contact-list i {
    font-size: 1.5rem;
    color: #16a085;
    margin-right: 15px;
}

.contact-list b {
    color: #2c3e50;
    margin-right: 10px;
    font-weight: bold;
}

.contact-list a {
    color: #16a085; /* Warna hijau tegas */
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease, transform 0.3s ease;
}

/* Hover effects for links */
.contact-list a:hover {
    color: #1abc9c; /* Hijau lebih cerah untuk efek hover */
    text-decoration: underline;
    transform: translateX(4px);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .contact-header {
        font-size: 2rem;
    }

    .lead {
        font-size: 1rem;
    }

    .contact-list li {
        font-size: 1rem;
    }

    .contact-list i {
        font-size: 1.2rem;
    }
}
</style>
