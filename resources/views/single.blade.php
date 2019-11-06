@extends('layouts.app')

@section('content')

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col">
                <h1>{{ $post->title }}</h1>
                <h4>{{ $post->subtitle }}</h4>
                <h6 class="mt-3">Author: <strong>{{ $post->author->name }}</strong> | Date: {{ $post->created_at->format('Y-m-d') }}</h6>
                <hr>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
    
@endsection