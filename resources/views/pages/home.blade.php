@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header wow swing text-center" wow-delay = "1.5s" data-wow-iteration = "3"  id = "homeCard"><i class = "fa fa-user-tie fa-3x">
                </i><h1>Welcome <span class="badge badge-pill badge-danger">{{$user_name}}</span></h1></div>
                    <hr>
                    <!--div that will show current weather data from open weather api!-->
                    <!--script file that will collect the data is in the public/js folder!-->
                    <div class = "container">
                    <!--<div id = "showWeather" class = "row"></div>!-->
                    <div class="card-body">

                    <div class = "container">

                        <div class = "row">


                            <div class = "col-md-12">

                                <h6 class = "wow fadeInLeft text-center" id = "homeLabel">Click the button below to begin adding users</h6>

                            </div>

                        </div>

                    </div>

                    <div class = "container">
                        <div class = "row">
                           
                           <div class = "col-md-6">
                                <br>
                               
                                <a class = "btn btn-success btn-lg" id = "btnAddUser" href="{{ url('/users/create') }}">Add User</a>

                           </div>

                           <div class = "col-md-6">

                                <div id = "showWeather" class = "row"></div>


                            <!--<input type = "text" class = "form-control wow bounceIn" data-wow-iteration = "4" placeholder="Enter user name to search" id = "searchUserByName">!-->
                            <!--<div class="form-group">
                            <label for="searchUserByName" class = "wow jello" wow-delay = "12.4s" data-wow-iteration = "15"><i class = "fa fa-search fa-2x"></i>Search User By Name</label>
                            <input type="email" class="form-control wow bounceIn" id="searchUserByName" aria-describedby="emailHelp" >
                            </div>

                           </div>!-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
