<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
  <title>View attendee Records</title>
=======
  <title>View Student Records</title>
>>>>>>> parent of 10a93d1 (Adding changes to the project)
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="text-center">View Event Records</h2>
          
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th> 
        <th>Event Name</th>
        <th>Description</th>
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>
<<<<<<< HEAD
        <th>Ticket Types</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
<<<<<<< HEAD
        
=======
        <th>Action</th>
    
>>>>>>> 88f6a61b8bf5a7f691ee02f306206a53222ffe6e
=======
>>>>>>> parent of 10a93d1 (Adding changes to the project)
      </tr>
    </thead>
    <tbody>
    @foreach ($events as $event)
     
      <tr>
      <td>{{ $event->id}}</td> 
      <td>{{ $event->ename }}</td>
      <td>{{ $event->description}}</td>
      <td>{{ $event->date}}</td>
      <td>{{ $event->time }}</td>
      <td>{{ $event->location }}</td>
    
      <td>
<<<<<<< HEAD
        <!-- <a href="{{ route('edit', ['event'=>$event] )}}">Edit</a> -->
        <a href="{{ route('edit', ['event' => $event->id]) }}">Edit</a>
      </td>

      <td>
      <form action="{{route('delete',['event' => $event->id])}}" method="post">
        @csrf
        @method('delete')
<input type="submit" value="Delete"/>
      </form>
        
=======
        <a href="{{ route('edit', ['event' => $event->id]) }}" style="display: inline-block;"class="btn btn-primary">Edit</a>
      <form action="{{route('delete',['event' => $event->id])}}"  method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
         </form>
>>>>>>> 88f6a61b8bf5a7f691ee02f306206a53222ffe6e
      </td>

      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>
<div style = "text-align:center">
<a href = "/eventorganizer">Return to first page</a> .
</div>
</body>
</html>