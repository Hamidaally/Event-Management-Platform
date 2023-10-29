<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <form action="{{ route('update', ['event' => $event->id]) }}" method="post">
  
        @csrf
        @method('PUT')
        <table align="center" width="45%" style=" padding: 1% 0;">
            <tr>
            <td class="headerTitle">
            </td>
        </tr>  
        <tr>
          <td><input type="text" placeholder="Event name" name="ename" value= "{{$event->ename}}"></td>  
        </tr>   
        <tr>
          <td><input type="text" placeholder="Describe event" name="desc" value= "{{$event->description}}"></td>  
        </tr>  
        <tr>
          <td> <input type="text" placeholder="Location" name="location" value= "{{$event->location}}"></td> 
        </tr>
        <tr>
<<<<<<< HEAD
=======
          <td> <input type="text" placeholder="Ticket types" name="types" value= "{{$event->types}}"></td> 
        </tr>
        <tr>
          <td> <input type="number" placeholder="Pricing" name="price" value= "{{$event->pricing}}"></td> 
        </tr>
        <tr>
>>>>>>> parent of 10a93d1 (Adding changes to the project)
          <td> <input type="date" placeholder="Date" name="date" value= "{{$event->date}}"></td> 
        </tr>
        <tr>
          <td> <input type="time" placeholder="Time" name="time" value= "{{$event->time}}"></td> 
        </tr>
        <tr>
          <td> <input type="submit"  id="button" value = "Update"></td> 
        </tr> 
        </table>
    </form>
</body>
</html>