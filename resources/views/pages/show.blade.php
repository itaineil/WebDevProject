@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header wow swing text-center" wow-delay = "1.5s" data-wow-iteration = "3"  id = "homeCard"><i class = "fa fa-user-tie fa-3x">
                </i><h1>User is <span class="badge badge-pill badge-info">{{$person->first_name}}</span></h1></div>
                    <hr>
                    <!--div that will show current weather data from open weather api!-->
                    <!--script file that will collect the data is in the public/js folder!-->
                    <div class = "container">
                    <!--<div id = "showWeather" class = "row"></div>!-->
                    <div class="card-body">

                    <div class = "container">

                        <div class = "row">

                           <div class = "col-md-6">
                            
                            <h2>Surname</h2>
                            <h2>Date Of Birth</h2>
                            <h2>Height</h2>
                            <h2>Weight</h2>
                            <h2>Eye Color</h2>
                           </div>

                           <div class = "col-md-6">

                            <h2><span class="badge badge-pill badge-danger">{{$person->surname}}</span></h2>
                            <h2><span class="badge badge-pill badge-success">{{$person->date}}</span></h2>
                            <h2><span class="badge badge-pill badge-primary">{{$person->height}}</span></h2>
                            <h2><span class="badge badge-pill badge-info">{{$person->weight}}</span></h2>
                            <h2><span class="badge badge-pill badge-primary">{{$person->eye_color}}</span></h2>

                           </div>

                    </div>

                    <div class = "container">

                        <div class = "row">

                            <div class = "col-md-6">

                            <p style="text-decoration: underline;">Created At</p>
                            <h5><span class="badge badge-pill badge-danger">{{$person->created_at}}</span></h5>

                            </div>
                        
                        </div>

                    </div>

                    <div class = "container">
                        <div class = "row">
                           
                           <div class = "col-md-6">
                            
                        
                           </div>

                           <div class = "col-md-6">
                                
                                <a href = "{{ url('/users') }}" class = "btn peach-gradient">Go Back</a>


                           </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
