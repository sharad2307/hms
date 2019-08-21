
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <form method="POST" action="/addrooms">
                    @csrf
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="hostel" class="col-md-4 col-form-label text-md-right">{{ __('Which Hostel :') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select my-1 mr-sm-2" id="hostel" name="hostel">
                                    <option selected>Choose...</option>
                                    <option value="Female">Girls'</option>
                                    <option value="Male">Boys'</option>
                                    
                                </select>

                                @error('hostel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- @if(auth()->user()->hostel=='Female') -->
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category :') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select my-1 mr-sm-2" id="category" name="category">
                                    <option selected>Choose...</option>
                                    <option value="0">Btech</option>
                                    <option value="1">MBA/MCA</option>
                                    
                                </select>

                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- @endif -->

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year:') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select my-1 mr-sm-2" id="year" name="year">
                                    <option selected>Choose...</option>
                                    <option value="2">Second</option>
                                    <option value="3">Third</option>
                                    <option value="4">Fourth</option>
                                    
                                </select>

                                @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="from" class="col-md-4 col-form-label text-md-right">{{ __('From') }}</label>

                            <div class="col-md-6">
                                <input id="from" type="text" class="form-control @error('from') is-invalid @enderror" name="name" value="{{ old('from') }}" required autocomplete="from" autofocus>

                                @error('from')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="to" class="col-md-4 col-form-label text-md-right">{{ __('To') }}</label>

                            <div class="col-md-6">
                                <input id="to" type="text" class="form-control @error('to') is-invalid @enderror" name="to" value="{{ old('to') }}" required autocomplete="to" autofocus>

                                @error('to')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('submit') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
