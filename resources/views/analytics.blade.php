<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
</head>
<body>
<nav class="navbar navbar-light " style="background-color:lightgray; width:100%">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/event.png" alt="" width="80" height="60">
    </a>
    <div class="d-flex flex-row-reverse bd-highlight">
  <div class="p-2 bd-highlight"><a href="{{ route('login') }}">Log in</a></div>
  <div class="p-2 bd-highlight"><a href="{{ route('register') }}">Sign Up</a></div>
  
</div>
  </div>
 
</nav>
    <h3 style="text-align: center;">Welcome to The Event Management Platform</h3>
    <div class="row">
  <div class="col-sm-3">
    <div class="card text-white bg-primary">
      <div class="card-body">
        <h5 class="card-title">Total Events:</h5>
        <p class="card-text">{{$totalEvents}}</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card text-white " style="background-color: mediumseagreen;">
      <div class="card-body">
        <h5 class="card-title">Today Events: </h5>
        <p class="card-text"> {{$todayEvents}}</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card text-white" style="background-color: tomato;">
      <div class="card-body">
        <h5 class="card-title">Total Users:</h5>
        <p class="card-text"> {{$totalUsers}}</p>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card text-white" style="background-color: violet;">
      <div class="card-body">
        <h5 class="card-title">This Month Events: </h5>
        <p class="card-text">{{$thisMonthEvents}}</p>
      </div>
    </div>
  </div>
</div>
    
<div class="container" style="margin-top: 40px;">
<form action="/search" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="query" value=""
            placeholder="Search for Events"> <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
   
    <h3>Events</h3>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th> 
        <th>Event Name</th>
        <th>Description</th>
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>
        <th>Ticket Types</th>
        <th>Price</th>
    
      </tr>
    </thead>
    <tbody>
    @foreach ($events as $event)
     
      <tr>
      <td>{{ $event->event_id}}</td> 
      <td>{{ $event->ename }}</td>
      <td>{{ $event->description}}</td>
      <td>{{ $event->date}}</td>
      <td>{{ $event->time }}</td>
      <td>{{ $event->location }}</td>
      <td>{{ $event->types}}</td>
      <td>{{ $event->pricing }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>