@extends('layouts.app')

@section('title', 'Tripanca - Koleksi Video')

@section('content')

    <!-- Video Grid Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Koleksi Video</h4>
                <h1 class="display-3 text-capitalize mb-3">Video Aktivitas Tripanca</h1>
            </div>
            <div class="row g-4">
                @forelse($videos as $video)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe width="100%" height="200" src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-content p-3">
                            <h5>{{ $video->title }}</h5>
                            <p>{{ $video->description }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center">Belum ada video untuk ditampilkan.</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Video Grid End -->

    <style>
        .video-item {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .video-content {
            background: #f8f9fa;
        }
    </style>

@endsection
