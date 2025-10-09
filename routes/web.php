<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

use App\Models\Testimonial;

Route::get('/', function () {
    $banners = \App\Models\Banner::all();
    $testimonials = Testimonial::all();
    return view('landing.welcome', compact('banners', 'testimonials'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tentang', function () {
    return view('landing.tentang');
});

Route::get('/layanan', function () {
    return view('landing.layanan');
});

Route::get('/blog', function () {
    return view('landing.blog');
});

Route::get('/sejarah', function () {
    return view('landing.sejarah');
});

Route::get('/visimisi', function () {
    return view('landing.visimisi');
});

Route::get('/bidangusaha', function () {
    return view('landing.bidangusaha');
});

Route::get('/foto', function () {
    return view('landing.foto');
});

Route::get('/video', function () {
    return view('landing.video');
});

Route::get('/kontak', function () {
    return view('landing.kontak');
});

Route::get('/banner', [BannerController::class, 'index'])->middleware('auth');
Route::get('/produk', [ProductController::class, 'index'])->middleware('auth');
Route::get('/ulasan', [TestimonialController::class, 'index'])->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('banners', BannerController::class);
    Route::resource('produks', \App\Http\Controllers\ProductController::class);
    Route::resource('testimonials', \App\Http\Controllers\TestimonialController::class);
});

require __DIR__.'/auth.php';
