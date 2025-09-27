@extends('layouts.app')

@section('title', 'Tripanca - Galeri Foto')

@section('content')

    <!-- Gallery Header Start -->
    <div class="container-fluid about overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="/build/assets/img/about.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                        <div class="about-exp"><span>Galeri Foto</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">Galeri Foto</h4>
                        <h1 class="display-3 mb-3">Momen dan Aktivitas Tripanca</h1>
                        <p class="mb-4">Galeri foto ini menampilkan berbagai aspek dari operasional Tripanca, mulai dari proses produksi, tim kerja, hingga kegiatan sosial perusahaan. Setiap gambar mencerminkan komitmen kami terhadap kualitas dan keberlanjutan.
                        </p>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-camera text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Produksi & Fasilitas</a>
                                            <p class="mb-0">Foto-foto dari pabrik dan proses filtrasi air mineral kami.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-users text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Tim & Kegiatan</a>
                                            <p class="mb-0">Gambaran tentang tim profesional dan acara perusahaan Tripanca.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Lihat Semua Foto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Header End -->

    <!-- Gallery Grid Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Koleksi Foto</h4>
                <h1 class="display-3 text-capitalize mb-3">Galeri Aktivitas Tripanca</h1>
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

    <!-- Fact Counter -->
    <div class="container-fluid counter py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-thumbs-up fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Pelanggan Bahagia</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">50.000</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-truck fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Pengiriman</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">513</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-users fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Karyawan</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">150</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-item">
                        <div class="counter-item-icon mx-auto">
                            <i class="fas fa-heart fa-3x text-white"></i>
                        </div>
                        <h4 class="text-white my-4">Tahun Pengalaman</h4>
                        <div class="counter-counting">
                            <span class="text-white fs-2 fw-bold" data-toggle="counter-up">20</span>
                            <span class="h1 fw-bold text-white">+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Counter -->

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
