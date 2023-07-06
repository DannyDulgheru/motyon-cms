<!-- resources/views/works/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $work->title }}</div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ Storage::url($work->main_photo) }}" alt="{{ $work->title }}" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h4>Description:</h4>
                        <p>{{ $work->description }}</p>
                        @if($work->video)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $work->video }}" allowfullscreen></iframe>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
