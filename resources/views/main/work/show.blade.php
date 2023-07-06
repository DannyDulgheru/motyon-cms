<!-- resources/views/main/work/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $work->title }}</h1>
        <img style="width:100%;" src="{{ Storage::url($work->main_photo) }}" alt="{{ $work->title }}">
        <p style="padding-top: 30px;">{{ $work->description }}</p>
        <!-- Additional work details -->
    </div>
@endsection
