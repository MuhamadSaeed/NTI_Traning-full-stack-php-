@extends('layouts.app')

@section('title', 'Edit Article')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Article</h2>
    
    <form method="POST" action="{{ route('articles.update', $article) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" 
                   value="{{ old('title', $article->title) }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Body</label>
            <textarea name="body" class="form-control @error('body') is-invalid @enderror" 
                      rows="5" required>{{ old('body', $article->body) }}</textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Article</button>
    </form>
</div>
@endsection
