@extends('layouts.app')

@section('content')
<div class="container">

  <h2>Experience Details</h2>

      @forelse ($experience as $exp)
      <div class="card border-primary mb-3">
        <div class="card-body">
          <h4 class="card-title">{{ $exp->company_name }} ({{ $exp->start_date }} to {{ $exp->end_date }} ) </h4>
          <h5>As a {{ $exp->job_title }}</h5>
          <p>{{ $exp->achievement }}</p>
          <a href="{{ route('experience.edit' , $exp->id) }}">
            <button class="btn btn-primary btn-inline">Edit</button>
          </a>

         

          <form action="{{ route('experience.delete' , $exp->id) }}" method="post" style="display: inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-inline">Delete</button>
          </form>
        </div>
      </div>
      @empty
        <p>Please Add Your Experience Here .</p>
      @endforelse
      

      <a href="{{ route('experience.craete') }}">
        <button class="btn btn-success">Add More</button>
      </a>
</div>
@endsection