@extends('layouts.app')

@section('content')
<div class="container">
    
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <h2>Skills </h2>

      @forelse ($skill as $skill)
      <div class="card border-primary mb-3">
        <div class="card-body">
          <h4 class="card-title">{{ $skill->name }} ( {{ $skill->rating }} % ) </h4>
          
       
          <a href="{{ route('skill.edit' , $skill->id) }}">
            <button class="btn btn-primary btn-inline">Edit</button>
          </a>

         

          <form action="{{ route('skill.delete' , $skill->id) }}" method="post" style="display: inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-inline">Delete</button>
          </form>
        </div>
      </div>
      @empty
        <p>Please Add Your skill Here .</p>
      @endforelse
      

      <a href="{{ route('skill.create') }}">
        <button class="btn btn-success">Add More</button>
      </a>
</div>
@endsection