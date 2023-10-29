<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendee Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link  rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="card" style="width: 100%;">
  <div class="card-header">
  <div class="d-flex justify-content-between">
 


  <div class="p-2 bd-highlight"><i class="fa fa-user" aria-hidden="true"></i> {{ auth()->user()->name  }}</div>
</div>
  </div>
 
</div>

<div class="row">
    <div class="col-md-6">
      <h4 style="text-align: center;">Attendee Dashboard</h4>
    </div>
  </div>
  

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: center; margin:auto;">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/attendee">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rate">  Rate event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">  Upcoming Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">  Attended Events</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
=======
@extends('layouts.app')

@section('content')
>>>>>>> parent of 10a93d1 (Adding changes to the project)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard for attendee') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Attendee!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
