@extends('master.layout')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1>{{ $post->title }}</h1>
    <p>Kategori: {{ $post->category->name }}</p>
    @if ($post->image)
        <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid post-image">
    @else
        <p>No image available</p>
    @endif
    <p class="post-body">{{ $post->body }}</p>
</div>
@endsection

<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Arial', sans-serif;
    }

    .container h1 {
        font-size: 2.5rem;
        margin-bottom: 15px;
        text-align: center;
        color: #2c3e50; /* Dark Blue */
        font-weight: bold;
    }

    .container p {
        text-align: justify;
        line-height: 1.6;
        font-size: 1.1rem;
        margin-bottom: 15px;
        color: #333;
    }

    .container .post-body {
        text-align: justify;
        white-space: pre-line; /* Maintains formatting, like newlines and spaces */
        font-size: 1.1rem;
        color: #333;
        line-height: 1.6;
    }

    .container img {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    /* Set the size for all images to a fixed height and width, maintaining aspect ratio */
    .post-image {
        width: 100%;
        height: 300px;
        object-fit: cover; /* Ensures the image covers the area without distortion */
        border-radius: 5px;
    }
</style>
