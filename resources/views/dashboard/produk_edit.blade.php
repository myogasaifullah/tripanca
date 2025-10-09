@extends('layouts.dashboard')

@section('title', 'Edit Product')

@section('content')
<div class="main-content">
<div class="container">
    <h2>Edit Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            @if($produk->image)
                <div>
                    <img src="{{ asset('storage/' . $produk->image) }}" alt="Product Image" style="max-width: 200px;">
                </div>
            @endif
            <input type="file" class="form-control" id="image" name="image">
            <small class="form-text text-muted">Leave blank to keep current image.</small>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $produk->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" class="form-control" id="size" name="size" value="{{ old('size', $produk->size) }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $produk->price) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="{{ route('produks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</div>
@endsection
