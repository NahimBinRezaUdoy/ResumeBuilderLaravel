@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Sector Name</th>
            <th scope="col">Sector Location</th>
            <th scope="col">Degree</th>
            <th scope="col">Field Of Study</th>
            <th scope="col">Graduation Start Date</th>
            <th scope="col">Graduation End Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($education as $edu)
          <tr>
            <th scope="row">{{ $edu->user_id }}</th>
            <td>{{ $edu->sector_name }}</td>
            <td>{{ $edu->sector_location }}</td>
            <td>{{ $edu->degree }}</td>
            <td>{{ $edu->field_of_study }}</td>
            <td>{{ $edu->graduation_start_date }}</td>
            <td>{{ $edu->graduation_end_date }}</td>
            <td>
              <a href="">
                <button class="btn btn-primary btn-inline">Edit</button>
              </a>

              <a href="">
                <button class="btn btn-danger btn-inline">Delete</button>
              </a>
            </td>
            
          </tr>
          @empty
              <p>There is nothing</p>
          @endforelse
          
        </tbody>
      </table> --}}

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