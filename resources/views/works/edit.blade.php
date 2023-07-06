<!-- resources/views/works/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Work</h1>
    
    <form action="{{ route('works.update', $work->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $work->title }}" required>
        </div>
        
        <div class="form-group">
            <label for="main_photo">Main Photo</label>
            <input type="file" name="main_photo" id="main_photo" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $work->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" name="video" id="video" class="form-control" value="{{ $work->video }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
@endsection
