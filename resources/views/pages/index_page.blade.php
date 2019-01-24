@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center wow-hinge">
      @if (session('message'))
      <div class="alert alert-info alert-dismissible fade show" role="alert">
      {{ session('message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      @endif
  </div>
         <div class="col-md-12">
            <div class="card">
                <div class="card-header wow swing text-center" wow-delay = "1.5s" data-wow-iteration = "3"  id = "homeCard"><i class = "fa fa-list-ul fa-2x">
                </i><h2>Users <span class="badge badge-pill badge-success">List</span></h2></div>

                    <hr>
                    <!--div that will show current weather data from open weather api!-->
                    <!--script file that will collect the data is in the public/js folder!-->
                    <div class = "container">
                    <div class="card-body">

                    <div class = "container">

                        <div class = "row">


                            <div class = "col-md-12">

                                <h6 class = "wow fadeInLeft text-center" id = "homeLabel"></h6>

                            </div>

                        </div>

                    </div>

                    <div class = "container">
                        <div class = "row">
                           
                           <div class = "col-md-6">
                                <br>
                                <a class = "btn btn-success btn-lg" id = "btnAddUser" href="{{ url('/users/create') }}">Add Another User</a>

                           </div>

                           <div class = "col-md-6">

                          
                            
                            </div>

                            <!--
                            <div class="form-group">
                            <label for="searchUserByName" class = "wow jello" wow-delay = "12.4s" data-wow-iteration = "15"><i class = "fa fa-search fa-2x"></i>Search User By Name</label>
                            <input type="email" class="form-control wow bounceIn" id="searchUserByName" aria-describedby="emailHelp" >
                            </div>!-->

                            <div class="form-group">
                            <label for="searchUserByName" class = "wow jello" wow-delay = "12.4s" data-wow-iteration = "15"><i class = "fa fa-search fa-2x"></i>Search User By Name</label>
                            <input type="email" class="form-control wow bounceIn" name = "searchByName" id = "searchUserByName">
                            </div>
                            <div class="form-group">
                            <label for="searchUserByName" class = "wow jello" wow-delay = "12.4s" data-wow-iteration = "15"><i class = "fa fa-search fa-2x"></i>Search By Name</label>
                            <input type="name" class="form-control wow bounceIn" name = "searchBySurname" id = "searchUserByName">
                            </div>
                            </div>
                           <div class = "container">
                           <div class = "row">

      <table class = "table">                        
      <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Hello</th>
      <th scope="col">Surname</th>
      <th scope="col">Date</th>
      <th scope="col">Height</th>
      <th scope="col">Weight</th>
      <th scope="col">Hair Color</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      @if(count($people)>0)
      @foreach($people->all() as $person)
      <th scope="row">1</th>
      <td>{{$person->first_name}}</td>
      <td>{{$person->surname}}</td>
      <td>{{$person->date}}</td>
      <td>{{$person->height}}</td>
      <td>{{$person->weight}}</td>
      <td>{{$person->eye_color}}</td>
      <td><a href = '{{  url("/users/{$person->id}") }}' class = "btn btn-success btn-sm">View User</a></td>
      <td><a href = '{{  url("/users/{$person->id}/edit") }}' class = "btn btn-success btn-sm">Update User</a></td>
      <td><a href = '{{  url("/users/{$person->id}") }}'></a></td>
      <td>
    <form action="{{ route('users.destroy', $person->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn btn-sm" type="submit">Delete User</button>
    </form>
    </td>
    </tr>
  </tbody>
  @endforeach
  {{$people->links()}} 
  @endif
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
@endsection
