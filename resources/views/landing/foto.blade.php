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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="/build/assets/img/gallery-1.jpg" class="img-fluid w-100 rounded" alt="Produksi Air Mineral">
                        <div class="gallery-overlay">
                            <h5>Proses Filtrasi</h5>
                            <p>Modern filtration technology in action.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="/build/assets/img/gallery-2.jpg" class="img-fluid w-100 rounded" alt="Tim Produksi">
                        <div class="gallery-overlay">
                            <h5>Tim Produksi</h5>
                            <p>Dedicated team ensuring quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="/build/assets/img/gallery-3.jpg" class="img-fluid w-100 rounded" alt="Kemasan Produk">
                        <div class="gallery-overlay">
                            <h5>Kemasan Ramah Lingkungan</h5>
                            <p>Eco-friendly packaging solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="gallery-item">
                        <img src="/build/assets/img/gallery-4.jpg" class="img-fluid w-100 rounded" alt="Distribusi">
                        <div class="gallery-overlay">
                            <h5>Distribusi Efisien</h5>
                            <p>Logistics and delivery network.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="gallery-item">
                        <img src="/build/assets/img/gallery-5.jpg" class="img-fluid w-100 rounded" alt="Kegiatan Sosial">
                        <div class="gallery-overlay">
                            <h5>Kegiatan Sosial</h5>
                            <p>Community engagement events.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="gallery-item">
                        <img src="/build/assets/img/gallery-6.jpg" class="img-fluid w-100 rounded" alt="Sumber Air">
                        <div class="gallery-overlay">
                            <h5>Sumber Mata Air</h5>
                            <p>Natural mountain spring source.</p>
                        </div>
                    </div>
                </div>
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
