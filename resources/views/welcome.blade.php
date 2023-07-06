<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome</h1>
            
            <div class="row">
                @foreach($works as $work)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ Storage::url($work->main_photo) }}" class="card-img-top" alt="{{ $work->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $work->title }}</h5>
                                <p class="card-text">{{ $work->description }}</p>
                                <a href="{{ route('works.show', $work->id) }}" class="btn btn-primary">View Work</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
