@extends('layouts.dashboard')

@section('title', 'Kelola Produk')

@section('content')
<div class="main-content">
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Produk</h2>
        <a href="{{ route('produks.create') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-plus"></i> Tambah Produk Baru
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
                            <th>Nama</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $produk)
                        <tr>
                            <td>
                                @if($produk->image)
                                    <img src="{{ asset('storage/' . $produk->image) }}" alt="Product Image" style="max-width: 100px; max-height: 60px; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ Str::limit($produk->name, 30) }}</td>
                            <td>{{ Str::limit($produk->size, 30) }}</td>
                            <td>Rp {{ number_format($produk->price, 0, ',', '.') }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('produks.destroy', $produk->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
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
                                    <i class="fas fa-box fa-3x mb-3"></i>
                                    <p>Belum ada produk. <a href="{{ route('produks.create') }}">Tambah produk pertama</a></p>
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
