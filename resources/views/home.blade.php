@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome to CV Builder</h2>
    <a href="{{ route('userDetails.create') }}">
        <button class="btn btn-success">Build Your Resume</button>
    </a>
</div>
@endsection
