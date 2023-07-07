<!-- resources/views/works/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Work</h1>
    
    <form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="main_photo">Main Photo</label>
            <input type="file" name="main_photo" id="main_photo" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" name="video" id="video" class="form-control">
        </div>

        <div class="form-group">
            <label for="photos">Photos</label>
            <input type="file" name="photos[]" multiple id="photos" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
@endsection
