<!-- resources/views/main/work/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">{{ $work->title }}</h1>
        <img style="width:100%;" class="w-full mb-8" src="{{ Storage::url($work->main_photo) }}" alt="{{ $work->title }}">
        <p class="mb-8">{{ $work->description }}</p>

        <!-- Display photos in a grid -->
        <div class="grid grid-cols-3 gap-4">
            @foreach($work->photos as $photo)
                <a href="{{ Storage::url($photo->path) }}" data-lightbox="work-photos">
                    <img style="width:300px;" class="w-full h-64 object-cover" src="{{ Storage::url($photo->path) }}" alt="Work photo">
                </a>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Include lightbox script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
@endpush
