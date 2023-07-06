<!-- resources/views/main/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($works as $work)
                <div class="col-md-4">
                <a href="{{ route('main.work.show', $work->id) }}">    
                <div class="card">
                        <img src="{{ Storage::url($work->main_photo) }}" alt="{{ $work->title }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $work->title }}</h5>
                            <p class="card-text">{{ $work->description }}</p>
                        </div>
                    </div>
                </a>    
                </div>
            @endforeach
        </div>
    </div>
@endsection
