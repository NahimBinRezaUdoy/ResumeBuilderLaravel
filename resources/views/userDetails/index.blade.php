@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Details <i class="fa fa-info" aria-hidden="true"></i></h2>
    
    @if(empty($userDetail) )
        <p>PLease Add Your Details Info</p>
   
    @else
        <div class="card border-primary mb-3">
            <div class="card-body">
            <h4 class="card-title">{{ $userDetail->fullname }} ({{ $userDetail->phone }} ) </h4>
            <p>{{ $userDetail->bio }}</p>
        
        
            <a href="{{ route('userDetail.edit' , $userDetail->id) }}">
                <button class="btn btn-primary btn-inline">Edit</button>
            </a>
        
            <form action="{{ route('userDetail.delete' , $userDetail->id) }}" method="post" style="display: inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-inline">Delete</button>
            </form>
            </div>
        </div>

      @endif

      <a href="{{ route('userDetails.create') }}">
        <button class="btn btn-success">Add More</button>
      </a>
</div>
@endsection