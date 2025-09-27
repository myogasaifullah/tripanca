@extends('layouts.app')

@section('title', 'Tripanca - Bidang Usaha')

@section('content')

    <!-- Business Fields Header Start -->
    <div class="container-fluid about overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="/build/assets/img/about.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                        <div class="about-exp"><span>Bidang Usaha</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">Bidang Usaha Kami</h4>
                        <h1 class="display-3 mb-3">Beragam Sektor Bisnis Tripanca</h1>
                        <p class="mb-4">Tripanca tidak hanya fokus pada produksi air mineral, tetapi juga mengembangkan berbagai bidang usaha yang saling terkait untuk memberikan nilai tambah kepada pelanggan dan masyarakat. Dengan pendekatan integrasi, kami memastikan setiap aspek bisnis berkontribusi pada misi perusahaan.
                        </p>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-industry text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Produksi Air Mineral</a>
                                            <p class="mb-0">Kegiatan utama kami dalam memproduksi dan mengemas air mineral berkualitas tinggi dari sumber mata air pegunungan.</p>
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
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-truck text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="#" class="h4 d-inline-block mb-3">Distribusi dan Logistik</a>
                                            <p class="mb-0">Jaringan distribusi yang luas untuk memastikan produk Tripanca tersedia di seluruh Indonesia dengan efisiensi tinggi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Business Fields Header End -->

    <!-- Business Fields Details Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Sektor Bisnis</h4>
                <h1 class="display-3 text-capitalize mb-3">Beragam Bidang Usaha Tripanca</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-store text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Retail dan Penjualan</a>
                        <p class="mb-3">Penjualan langsung melalui toko ritel, supermarket, dan platform e-commerce untuk kemudahan akses konsumen.</p>
                        <a href="#" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-building text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Kemitraan Bisnis</a>
                        <p class="mb-3">Kolaborasi dengan hotel, restoran, kantor, dan institusi untuk penyediaan air mineral dalam skala besar.</p>
                        <a href="#" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-recycle text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Pengelolaan Limbah</a>
                        <p class="mb-3">Program daur ulang kemasan dan pengelolaan limbah untuk mendukung keberlanjutan lingkungan.</p>
                        <a href="#" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-lightbulb text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">R&D dan Inovasi</a>
                        <p class="mb-3">Penelitian dan pengembangan untuk inovasi produk baru dan peningkatan teknologi produksi.</p>
                        <a href="#" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Business Fields Details End -->

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

@endsection
