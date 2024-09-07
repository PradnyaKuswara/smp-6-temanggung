@extends('layouts.app')

@section('title')
    {{ $new['title'] }} | SMP 6 Temanggung
@endsection

@section('content')
    <div class="container mt-5 py-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $new['title'] }}</h5>
                <p class="card-text">{{ $new['description'] }}</p>
                <p class="card-text">Published on: {{ $new['date'] }}</p>
            </div>
        </div>
    </div>
@endsection
