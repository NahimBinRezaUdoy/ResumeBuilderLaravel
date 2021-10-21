@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tell Us Something About You.') }}</div>

                @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('education.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="sector_name" class="col-md-4 col-form-label text-md-right">{{ __('Sector Name') }}</label>

                            <div class="col-md-6">
                                <input id="sector_name" type="text" class="form-control @error('sector_name') is-invalid @enderror" name="sector_name" value="{{ old('sector_name') }}" required autocomplete="sector_name" autofocus>

                                @error('sector_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sector_location" class="col-md-4 col-form-label text-md-right">{{ __('Sector Location') }}</label>

                            <div class="col-md-6">
                                <input id="sector_location" type="sector_location" class="form-control @error('sector_location') is-invalid @enderror" name="sector_location" value="{{ old('sector_location') }}" required autocomplete="sector_location" autofocus>

                                @error('sector_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="degree" class="col-md-4 col-form-label text-md-right">{{ __('Degree') }}</label>

                            <div class="col-md-6">
                                <input id="degree" type="text" class="form-control @error('degree') is-invalid @enderror" name="degree" value="{{ old('degree') }}" required autocomplete="degree" autofocus>

                                @error('degree')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="field_of_study" class="col-md-4 col-form-label text-md-right">{{ __('Field Of Study') }}</label>

                            <div class="col-md-6">
                                <input id="field_of_study" type="text" class="form-control @error('field_of_study') is-invalid @enderror" name="field_of_study" value="{{ old('field_of_study') }}" required autocomplete="field_of_study" autofocus>

                                @error('field_of_study')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="graduation_start_date" class="col-md-4 col-form-label text-md-right">{{ __('Graduation Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="graduation_start_date" type="date" class="form-control @error('graduation_start_date') is-invalid @enderror" name="graduation_start_date" value="{{ old('graduation_start_date') }}" required autocomplete="graduation_start_date" autofocus>

                                @error('graduation_start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="graduation_end_date" class="col-md-4 col-form-label text-md-right">{{ __('Graduation End DateData') }}</label>

                            <div class="col-md-6">
                                <input id="graduation_end_date" type="date" class="form-control @error('graduation_end_date') is-invalid @enderror" name="graduation_end_date" value="{{ old('graduation_end_date') }}" required autocomplete="graduation_end_date" autofocus>

                                @error('graduation_end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
