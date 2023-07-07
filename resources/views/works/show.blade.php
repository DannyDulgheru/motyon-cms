<!-- resources/views/works/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $work->title }}</h1>
    
    <img width="200" src="{{ Storage::url($work->main_photo) }}" alt="{{ $work->title }}">
    
    <p>{{ $work->description }}</p>

    <div class="work-photos">
    @foreach($work->photos as $photo)
    <div class="work-photo">
        <div class="row">
            <div class="col">
        <img width="200" src="{{ Storage::url($photo->path) }}" alt="Work photo">
        </div>
        <div class="col">
        <form action="{{ route('photos.destroy', $photo) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary" type="submit">Delete</button>
        </form>
        </div>
        </div>
    </div>
@endforeach

</div>

    
    @if($work->video)
        <p>{{ $work->video }}</p>
    @endif
    
    <a href="{{ route('works.edit', $work->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('works.destroy', ['work' => $work->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-primary" type="submit">Șterge</button>
</form>

    </div>
@endsection
