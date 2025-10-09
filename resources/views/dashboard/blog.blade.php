@extends('layouts.dashboard')

@section('title', 'Kelola Blog')

@section('content')
<div class="main-content">
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Blog</h2>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-plus"></i> Tambah Blog Baru
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
                            <th>Tanggal Publikasi</th>
                            <th>Excerpt</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogs as $blog)
                        <tr>
                            <td>
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" style="max-width: 100px; max-height: 60px; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ Str::limit($blog->title, 50) }}</td>
                            <td>{{ $blog->published_at ? $blog->published_at->format('d M Y') : '-' }}</td>
                            <td>{{ Str::limit($blog->excerpt, 100) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus blog ini?');">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-blog fa-3x mb-3"></i>
                                    <p>Belum ada blog. <a href="{{ route('blogs.create') }}">Tambah blog pertama</a></p>
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
