@extends('layouts.app')

@section('content')
<div class="container">

  @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

  <h2>Education Details</h2>

      @forelse ($education as $edu)
      <div class="card border-primary mb-3">
        <div class="card-body">
          <h4 class="card-title">{{ $edu->sector_name }} ({{ $edu->graduation_start_date }} to {{ $edu->graduation_end_date }} ) </h4>
          <a href="{{ route('education.edit' , $edu->id) }}">
            <button class="btn btn-primary btn-inline">Edit</button>
          </a>

         

          <form action="{{ route('education.delete' , $edu->id) }}" method="post" style="display: inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-inline">Delete</button>
          </form>
        </div>
      </div>
      @empty
        
      @endforelse
      

      <a href="{{ route('education.craete') }}">
        <button class="btn btn-success">Add More</button>
      </a>
</div>
@endsection