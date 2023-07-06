<!-- resources/views/works/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Works</h1>
    <a href="{{ route('works.create') }}" class="btn btn-primary">Create Work</a>
    
    <ul>
        @foreach($works as $work)
            <li>
                <a href="{{ route('works.show', $work->id) }}">{{ $work->title }}</a>
            </li>
        @endforeach
    </ul>
    </div>
@endsection
