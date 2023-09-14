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
  <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fa fa-bell"></i>
        <span class="badge badge-light bg-success badge-xs">{{auth()->user()->unreadNotifications->count()}}</span>
    </a>
    <ul class="dropdown-menu">
    @if (auth()->user()->unreadNotifications)
                <li class="d-flex justify-content-end mx-1 my-2">
                    <a href="{{route('mark-as-read')}}" class="btn btn-success btn-sm">Mark All as Read</a>
                </li>
                @endif
                
    @foreach (auth()->user()->notifications as $notification)
        <li>{{ $notification->data['product_name'] }} is expiring on {{ $notification->data['date'] }}</li>
    @endforeach

                @foreach (auth()->user()->unreadNotifications as $notification)
                <a href="#" class="text-success"><li class="p-1 text-success"> {{$notification->data['data']}}</li></a>
                @endforeach
                @foreach (auth()->user()->readNotifications as $notification)
                <a href="#" class="text-secondary"><li class="p-1 text-secondary"> {{$notification->data['data']}}</li></a>
                @endforeach
    </ul>
</li>


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
          <a class="nav-link" href="/eventrate">  Rate event</a>
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
<div class="container">
  <h2 class="text-center">Available Events</h2>
          
  <table class="table table-bordered table-striped" id="myTable">
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
        <th>Status</th>
        <th>QR CODE</th>

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
      <td> 
      <input data-id="{{$event->event_id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $event->status ? 'checked' : '' }}>
   
      </td>

      <td>{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>
<div class="d-flex justify-content-center">
<button type="button" class="btn btn-primary" style="align-content: center;" ><a href="/home" style="color: white;">LogOut</a></button>
</div>
</div>
<script>
 $(function() { 
           $('.toggle-class').change(function() { 
           var status = $(this).prop('checked') == true ? 1 : 0;  
           var event_id = $(this).data('event_id');  
           $.ajax({ 
    
               type: "GET", 
               dataType: "json", 
               url: '/status/update', 
               data: {'status': status, 'event_id': event_id}, 
               success: function(data){ 
               console.log(data.success) 
            } 
         }); 
      }) 
   }); 
</script>
</body>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
  let table = new DataTable('#myTable');
</script>
</html>