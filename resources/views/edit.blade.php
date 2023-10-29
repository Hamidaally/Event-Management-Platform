<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        tr{
            padding: 100px;
        
        }
        td{
          padding: 10px;
    
        }
        table{
        margin: auto;
        border-radius: 5px;
        }
        .headerTitle{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: aliceblue;
    }  
    input{
        width: 98%;
        height: 25px; 
        
    }
    h3,p{
      text-align: center;
    }
    .refContainer{
      margin-top:30px;
      text-align: center;
    }
    </style>
</head>
<body>
<h3>Edit Event </h3>
   <div>
   
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
<li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    
   </div>
  
    <form action="{{ route('update', ['event' => $event->event_id]) }}" method="post">
  
        @csrf
        @method('PUT')
        <table align="center" width="45%" style=" padding: 1% 0;">
            <tr>
            <td class="headerTitle">
            </td>
        </tr>  
        <tr>
          <td><input type="text" class="form-control" placeholder="Event name" name="ename" value= "{{$event->ename}}"></td>  
        </tr>   
        <tr>
          <td><input type="text" class="form-control" placeholder="Describe event" name="desc" rows="3" value= "{{$event->description}}"></td>  
        </tr>  
        <tr>
          <td> <input type="text" class="form-control" placeholder="Location" name="location" value= "{{$event->location}}"></td> 
        </tr>
        <tr>
          <td> <input type="date" placeholder="Date" name="date" value= "{{$event->date}}"></td> 
        </tr>
        <tr>
          <td> <input type="time" class="form-control" placeholder="Time" name="time" value= "{{$event->time}}"></td> 
        </tr>
        <tr>
        <td><button type="submit" class="btn btn-light" style="width: 98%;background-color:mediumseagreen; color:white;">Update Event</button></td>  
        </tr> 
        </table>
        <div class="refContainer">
        <button type="button" class="btn btn-info"><a href = "/eventShow" style="color: white;">Cick me</a> </button> 
    </div>
    </form>
    @include('sweetalert::alert')
</body>
</html>