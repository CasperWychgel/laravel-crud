{{-- Extending the web layout  --}}
@extends('layouts.app')
{{-- Content to display with HTML symantics --}}
@section('content')
    <div class="section">
        <div class="container">
            <h1>{{$title}}</h1>
            <p>{{$text}}</p>
        </div>
    </div>
@endsection
