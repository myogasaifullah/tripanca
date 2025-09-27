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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-content p-3">
                            <h5>Proses Produksi Tripanca</h5>
                            <p>Tour virtual pabrik dan teknologi filtrasi modern.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-content p-3">
                            <h5>Kampanye Air Sehat</h5>
                            <p>Promosi manfaat konsumsi air mineral berkualitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-content p-3">
                            <h5>Kegiatan Sosial Tripanca</h5>
                            <p>Program CSR dan kontribusi terhadap masyarakat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-content p-3">
                            <h5>Testimoni Pelanggan</h5>
                            <p>Kisah pelanggan tentang pengalaman menggunakan Tripanca.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-content p-3">
                            <h5>Inovasi Kemasan</h5>
                            <p>Pengembangan kemasan ramah lingkungan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="video-item">
                        <div class="video-wrapper">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-content p-3">
                            <h5>Behind the Scenes</h5>
                            <p>Dibalik layar operasional harian Tripanca.</p>
                        </div>
                    </div>
                </div>
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
