@extends('layouts.app')

@section('title', 'Tripanca - Galeri Foto')

@section('content')

   

    <!-- Gallery Grid Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Koleksi Foto</h4>
                <h1 class="display-3 text-capitalize mb-3">Galeri Tripanca</h1>
            </div>
            <div class="row g-4">
                @foreach($photos as $index => $photo)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <div class="gallery-item">
                        <img src="{{ asset('storage/' . $photo->image) }}" class="img-fluid w-100 rounded" alt="{{ $photo->title }}">
                        <div class="gallery-overlay">
                            <h5>{{ $photo->title }}</h5>
                            <p>{{ $photo->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery Grid End -->

    

    <style>
        .gallery-item {
            position: relative;
            overflow: hidden;
        }
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }
    </style>

@endsection
