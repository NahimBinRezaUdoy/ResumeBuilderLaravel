@extends('layouts.app')

@section('content')
<div class="container">

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

      @forelse ($personalProject as $project)
      <div class="card border-primary mb-3">
        <div class="card-body">
          <h4 class="card-title">{{ $project->title }} ({{ $project->start_date }} to {{ $project->end_date }} ) </h4>
          <h5>As a {{ $project->description }}</h5>
       
          <a href="{{ route('personalProject.edit' , $project->id) }}">
            <button class="btn btn-primary btn-inline">Edit</button>
          </a>

         

          <form action="{{ route('personalProject.delete' , $project->id) }}" method="post" style="display: inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-inline">Delete</button>
          </form>
        </div>
      </div>
      @empty
        <p>Please Add Your Project Here .</p>
      @endforelse
      

      <a href="{{ route('personalProject.create') }}">
        <button class="btn btn-success">Add More</button>
      </a>
</div>
@endsection