@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <div class="form-group">
                            <input type="text" name="title" placeholder="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subtitle" placeholder="Subtitle" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="content" placeholder="Content" rows="5" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection