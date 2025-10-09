<!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <!-- <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>Tripanca</h1> -->
                <img src="/build/assets/img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>">Beranda</a>
                    <a href="/tentang" class="nav-item nav-link <?php echo e(request()->is('tentang') ? 'active' : ''); ?>">Tentang</a>
                    <a href="/layanan" class="nav-item nav-link <?php echo e(request()->is('layanan') ? 'active' : ''); ?>">Layanan</a>
                    <a href="/blog" class="nav-item nav-link <?php echo e(request()->is('blog') ? 'active' : ''); ?>">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo e(request()->is('sejarah') || request()->is('visimisi') || request()->is('bidangusaha') || request()->is('foto') || request()->is('video') ? 'active' : ''); ?>" data-bs-toggle="dropdown">Halaman</a>
                        <div class="dropdown-menu m-0">
                            <a href="/sejarah" class="dropdown-item <?php echo e(request()->is('sejarah') ? 'active' : ''); ?>">Sejarah</a>
                            <a href="/visimisi" class="dropdown-item <?php echo e(request()->is('visimisi') ? 'active' : ''); ?>">Visi & Misi</a>
                            <a href="/bidangusaha" class="dropdown-item <?php echo e(request()->is('bidangusaha') ? 'active' : ''); ?>">Bidang Usaha</a>
                            <a href="/foto" class="dropdown-item <?php echo e(request()->is('foto') ? 'active' : ''); ?>">Foto</a>
                            <a href="/video" class="dropdown-item <?php echo e(request()->is('video') ? 'active' : ''); ?>">Video</a>
                        </div>
                    </div>
                    <a href="/kontak" class="nav-item nav-link <?php echo e(request()->is('kontak') ? 'active' : ''); ?>">Kontak</a>
                </div>
                <div class="d-none d-xl-flex me-3">
                    <div class="d-flex flex-column pe-3 border-end border-primary">
                        <span class="text-body">Gratis Pengiriman</span>
                        <a href="tel:+4733378901"><span class="text-primary">Telp: +62 123 456 7890</span></a>
                    </div>
                </div>
                <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                <a href="" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Pesan Sekarang</a>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-bs-target="#carouselId" data-bs-slide-to="<?php echo e($index); ?>" class="<?php echo e($index == 0 ? 'active' : ''); ?>"></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e($index == 0 ? 'active' : ''); ?>">
                        <img src="<?php echo e(asset('storage/' . $banner->image)); ?>" class="img-fluid w-100" alt="Image">
                        <div class="carousel-caption-<?php echo e($index + 1); ?>">
                            <div class="carousel-caption-<?php echo e($index + 1); ?>-content" style="max-width: 900px;">
                                <?php if($banner->subtitle): ?>
                                <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;"><?php echo e($banner->subtitle); ?></h4>
                                <?php endif; ?>
                                <?php if($banner->title): ?>
                                <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;"><?php echo e($banner->title); ?></h1>
                                <?php endif; ?>
                                <?php if($banner->description): ?>
                                <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;"><?php echo e($banner->description); ?></p>
                                <?php endif; ?>
                                <div class="carousel-caption-<?php echo e($index + 1); ?>-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                    <?php if($banner->button1_text): ?>
                                    <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="<?php echo e($banner->button1_link); ?>"><?php echo e($banner->button1_text); ?></a>
                                    <?php endif; ?>
                                    <?php if($banner->button2_text): ?>
                                    <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="<?php echo e($banner->button2_link); ?>"><?php echo e($banner->button2_text); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Cari berdasarkan kata kunci</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="kata kunci" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->
<?php /**PATH C:\laragon\www\laravel\tripanca\resources\views/layouts/header.blade.php ENDPATH**/ ?>