@extends('layouts.dashboard')

@section('title', 'Tambah Ulasan')

@section('content')
<div class="main-content">
<div class="container">
    <h2>Tambah Ulasan Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Posisi/Jabatan</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}">
        </div>

        <div class="mb-3">
            <label for="review_text" class="form-label">Ulasan</label>
            <textarea class="form-control" id="review_text" name="review_text" rows="4" required>{{ old('review_text') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select" id="rating" name="rating" required>
                <option value="">Pilih Rating</option>
                @for($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }} Bintang</option>
                @endfor
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Foto (Opsional)</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB.</div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Ulasan</button>
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
