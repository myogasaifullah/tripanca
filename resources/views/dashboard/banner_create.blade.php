@extends('layouts.dashboard')

@section('title', 'Create Banner')

@section('content')
<div class="main-content">
<div class="container">
    <h2>Create New Banner</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Banner Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="button1_text" class="form-label">Button 1 Text</label>
            <input type="text" class="form-control" id="button1_text" name="button1_text" value="{{ old('button1_text') }}">
        </div>
        <div class="mb-3">
            <label for="button1_link" class="form-label">Button 1 Link</label>
            <input type="url" class="form-control" id="button1_link" name="button1_link" value="{{ old('button1_link') }}">
        </div>
        <div class="mb-3">
            <label for="button2_text" class="form-label">Button 2 Text</label>
            <input type="text" class="form-control" id="button2_text" name="button2_text" value="{{ old('button2_text') }}">
        </div>
        <div class="mb-3">
            <label for="button2_link" class="form-label">Button 2 Link</label>
            <input type="url" class="form-control" id="button2_link" name="button2_link" value="{{ old('button2_link') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create Banner</button>
        <a href="{{ route('banners.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</div>
@endsection
