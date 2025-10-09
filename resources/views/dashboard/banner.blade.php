@extends('layouts.dashboard')

@section('title', 'Kelola Banner')

@section('content')
<div class="main-content">
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Banner Carousel</h2>
        <a href="{{ route('banners.create') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-plus"></i> Tambah Banner Baru
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Subjudul</th>
                            <th>Deskripsi</th>
                            <th>Tombol 1</th>
                            <th>Tombol 2</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($banners as $banner)
                        <tr>
                            <td>
                                @if($banner->image)
                                    <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image" style="max-width: 100px; max-height: 60px; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ Str::limit($banner->title, 30) }}</td>
                            <td>{{ Str::limit($banner->subtitle, 30) }}</td>
                            <td>{{ Str::limit($banner->description, 50) }}</td>
                            <td>
                                @if($banner->button1_text)
                                    <a href="{{ $banner->button1_link }}" target="_blank" class="btn btn-sm btn-outline-primary">{{ $banner->button1_text }}</a>
                                @endif
                            </td>
                            <td>
                                @if($banner->button2_text)
                                    <a href="{{ $banner->button2_link }}" target="_blank" class="btn btn-sm btn-outline-secondary">{{ $banner->button2_text }}</a>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?');">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-image fa-3x mb-3"></i>
                                    <p>Belum ada banner. <a href="{{ route('banners.create') }}">Tambah banner pertama</a></p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
