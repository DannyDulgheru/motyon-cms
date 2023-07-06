<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Works') }}</div>

                <div class="card-body">
                    <a href="{{ route('works.create') }}" class="btn btn-primary">Add Work</a>
                    <br><br>
                    <h4>List of Works:</h4>
                    <ul>
                    @foreach($works as $work)
                        <li>
                            <a href="{{ route('works.show', $work->id) }}">{{ $work->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection