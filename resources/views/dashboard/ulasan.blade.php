@extends('layouts.dashboard')

@section('title', 'Kelola Ulasan')

@section('content')
<div class="main-content">
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Ulasan</h2>
        <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-plus"></i> Tambah Ulasan Baru
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
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Posisi</th>
                            <th>Ulasan</th>
                            <th>Rating</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonials as $testimonial)
                        <tr>
                            <td>
                                @if($testimonial->image)
                                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" style="max-width: 60px; max-height: 60px; object-fit: cover; border-radius: 50%;">
                                @else
                                    <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #e9ecef; display: flex; align-items: center; justify-content: center; color: #6c757d; font-weight: bold;">
                                        {{ substr($testimonial->name, 0, 1) }}
                                    </div>
                                @endif
                            </td>
                            <td>{{ Str::limit($testimonial->name, 30) }}</td>
                            <td>{{ Str::limit($testimonial->position ?? '-', 30) }}</td>
                            <td>{{ Str::limit($testimonial->review_text, 50) }}</td>
                            <td>
                                <div class="d-flex">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-warning' : 'text-muted' }}"></i>
                                    @endfor
                                </div>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus ulasan ini?');">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-star fa-3x mb-3"></i>
                                    <p>Belum ada ulasan. <a href="{{ route('testimonials.create') }}">Tambah ulasan pertama</a></p>
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
