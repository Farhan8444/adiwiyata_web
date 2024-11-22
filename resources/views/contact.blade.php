@extends('master.layout')

@section('title')
    Contact
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Contact Us</h1>
            <p class="text-center">Untuk informasi lebih lanjut, Anda dapat menghubungi kami melalui saluran berikut:</p>
            <ul class="contact-list">
                <li><b>WhatsApp:</b> <a href="https://wa.me/085706813985" target="_blank">085706813985</a></li>
                <li><b>Gmail:</b> <a href="mailto:hajiparhan3@gmail.com">hajiparhan3@gmail.com</a></li>
                <li><b>Instagram:</b> <a href="https://www.instagram.com/ahmfrhnrfi/" target="_blank">@ahmfrhnrfi</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

<!-- Inline CSS for Contact Page Styling -->
<style>
    /* Styling for the page */
    .container {

        border-radius: 8px;
    }

    h1 {
        font-size: 2.5rem;
        color: #2980b9;
        margin-bottom: 20px;
        font-weight: bold;
        text-transform: uppercase;
    }

    p {
        font-size: 1.1rem;
        color: #34495e;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    /* Styling for the contact list */
    .contact-list {
        list-style-type: none;
        padding: 0;
        font-size: 1.1rem;
        margin-bottom: 0;
    }

    .contact-list li {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        color: #34495e;
        transition: all 0.3s ease;
    }

    .contact-list li b {
        color: #2980b9;
        margin-right: 10px;
        font-weight: bold;
    }

    .contact-list a {
        color: #3498db;
        text-decoration: none;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    /* Hover effects for links */
    .contact-list a:hover {
        color: #1abc9c;
        text-decoration: underline;
        transform: translateX(4px);
    }

    /* Hover effect for list items */
    .contact-list li:hover {
        background-color: #ecf0f1;
        border-radius: 8px;
        padding-left: 15px;
        transition: padding-left 0.3s ease, background-color 0.3s ease;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        h1 {
            font-size: 2rem;
        }

        p {
            font-size: 1rem;
        }

        .contact-list li {
            font-size: 1rem;
        }
    }
</style>
