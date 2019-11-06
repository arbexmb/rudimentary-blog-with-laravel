@extends('layouts.app')

@section('content')

    <div class="container mt-4 mb-4">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col">
                    <h1><a href="{{ route('show', $post->id) }}">{{ $post->title }}</a></h1>
                </div>
            </div>
            {!! $loop->last ? '' : '<hr>' !!}
        @endforeach
    </div>
    
@endsection