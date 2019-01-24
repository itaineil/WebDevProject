@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header wow swing text-center" wow-delay = "1.5s" data-wow-iteration = "3"  id = "homeCard"><i class = "fa fa-user-plus fa-3x">
                </i><h1>Add New<span class="badge badge-pill badge-info">User</span></h1></div>
                    <hr>
                    <div class = "container">
                        <div class="card-body">

                            <form method="POST" action="{{ url('/users/store') }}" enctype="multipart/form-data">
                            
                            @csrf

                            <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">Enter First Name</label><i class = "fa fa-file-signature fa fa-2x"></i>

                             <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} wow fadeInLeft" data-wow-duration = "1.2s" name="first_name" value="{{ old('first_name') }}" required autofocus> 
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Surname</label><i class = "fa fa-file-signature fa fa-2x"></i>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }} wow fadeInLeft" name="surname" value="{{ old('surname') }}" data-wow-duration = "1.8s" required>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Select Date Of Birth</label><i class = "fa fa-calendar-week fa fa-2x"></i>

                            <div class="col-md-6">
                               
                                <input id="datepicker" type = "date" class = "form-control" name = "date"/>

                            </div>

                         </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Weight</label><i class = "fa fa-file-signature fa fa-2x"></i>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }} wow fadeInLeft" name="weight" value="{{ old('surname') }}" data-wow-duration = "1.8s" required>

                                @if ($errors->has('weight'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Enter Height</label><i class = "fa fa-file-signature fa fa-2x"></i>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }} wow fadeInLeft" name="height" value="{{ old('height') }}" data-wow-duration = "1.8s" required>

                                @if ($errors->has('height'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Eye Color</label><i class = "fa fa-file-signature fa fa-2x"></i>

                            <div class="col-md-6">
                                <input id="eye_color" type="text" class="form-control{{ $errors->has('eye_color') ? ' is-invalid' : '' }} wow fadeInLeft" name="eye_color" value="{{ old('eye_color') }}" data-wow-duration = "1.8s" required>

                                @if ($errors->has('eye_color'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('eye_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add User
                                </button>
                            </div>
                        </div>
                        <hr>
                       <div class = "container">
                        <div class = "row">
                           
                           <div class = "col-md-6">
                            
                        
                           </div>

                           <div class = "col-md-6">
                                
                                <a href = "{{ url('/users') }}" class = "btn btn-success btn-lg" id = "btnGoBack">Go Back</a>


                           </div>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
