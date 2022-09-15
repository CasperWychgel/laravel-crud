{{-- Extending the web layout  --}}
@extends('layouts.web')
{{-- Title displayed in the web layout  --}}
@section('title','Home')
{{-- Content to display with HTML symantics --}}
@section('content')

<h1>{{$title}}</h1>
<p>{{$text}}</p>

@endsection
