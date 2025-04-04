@extends('layout.app')

@section('title', 'Show Post')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body text-center">
                <h2 class="card-title">{{ $post->name }}</h2>
                <p class="card-text text-muted">{{ $post->body }}</p>

                @if ($post->image)
                    <img class="img-fluid rounded shadow mt-3" 
                         src="{{ asset('storage/' . $post->image) }}" 
                         alt="Post Image">
                @else
                    <p class="text-muted mt-3">Rasm yo'q</p>
                @endif

                <div class="mt-4">
                    <p class="text-muted"><strong>Created At:</strong> {{ $post->created_at->format('d M Y, H:i') }}</p>
                    <p class="text-muted"><strong>Updated At:</strong> {{ $post->updated_at->format('d M Y, H:i') }}</p>
                </div>

                <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">Back</a>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection
