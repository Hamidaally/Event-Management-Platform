<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Event Records</title>
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
  <div><button class="btn btn-primary" style="align-content: center;"><a href="/eventorganizer" style="color: aliceblue;">Create Event</a></button></div>
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
        <th>Edit</th>
        <th>Delete</th>
        
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
        <button type="button" class="btn btn-success"><a href="{{ route('edit', ['event' => $event->event_id]) }}" style="color: white;">Edit</a></button>
        
      </td>

      <td>
      <form action="{{route('delete',['event' => $event->event_id])}}" method="post">
        @csrf
        @method('delete')
        
        <input name="_method" type="hidden" value="DELETE">
          <button type="submit" class="btn btn-danger confirm-button" >Delete</button>
      </form>
        
      </td>

      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>
<div style = "text-align:center">
<button type="button" class="btn btn-info"><a href = "/eventorganizer" style="color: white;">Return to first page</a> </button>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

    $('.confirm-button').click(function(event) {
        var form =  $(this).closest("form");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete this row?`,
            text: "It will be gone forever",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });

</script>
</html>