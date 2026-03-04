@extends('layouts.dashboard')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h1>Kelola Visi Misi</h1>
            <a href="{{ route('visimisi.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Visi Misi
            </a>
        </div>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Subjudul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($visimisis as $visimisi)
                    <tr>
                        <td>{{ $visimisi->id }}</td>
                        <td>{{ $visimisi->title }}</td>
                        <td>{{ $visimisi->subtitle }}</td>
                        <td>
                            <a href="{{ route('visimisi.edit', $visimisi->id) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('visimisi.destroy', $visimisi->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data Visi Misi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection