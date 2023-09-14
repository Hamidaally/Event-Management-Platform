<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h2 class="text-center">Comment on Attended Events</h2>
          
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
       <th>Review</th>
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
        <!-- <a href="{{ route('edit', ['event'=>$event] )}}">Edit</a> -->
        <a href="{{ route('review', ['event' => $event->event_id]) }}">Write a review</a>
      </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>