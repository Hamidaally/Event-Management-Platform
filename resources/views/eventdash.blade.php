<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
=======
    <title>EVENTS</title>
>>>>>>> 88f6a61b8bf5a7f691ee02f306206a53222ffe6e
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
    p{
      color: black;
      font-family: sans-serif;
    }
    </style>
</head>
<body>
<h3>Welcome EventOrganizer</h3>
    <p>
        Lets Get started!!
    </p>
    
    <form action = "/show" method="post">
      @csrf
      <div class="d-flex justify-content-center">
      <button type="button" class="btn btn-primary"><a href="/analytics" style="color: white;">Home Page</a></button>
      </div>
        <table align="center" width="45%" style="background-color: whitesmoke; padding: 1% 0;">
            <tr>
            <td class="headerTitle">
            <p class="createAccount">Create an Event</p>
            </td>
        </tr>  
        <tr>
          <td><input type="text" class="form-control" name="ename" placeholder="Event name"></td>
        </tr>
        <tr>
          <td> <textarea class="form-control" aria-label="With textarea" placeholder="Describe event" name="desc" rows="3"></textarea></td> 
        </tr>   
        
        <tr>
          <td><input type="text" class="form-control" name="location" placeholder="Location"></td> 
        </tr>
        <tr>
          <td> <input type="date" placeholder="Date" name="date"></td> 
        </tr>
        <tr>
          <td> <input type="time" class="form-control" placeholder="Time" name="time"></td> 
        </tr>
        <tr>
       <td><button type="submit" class="btn btn-primary" style="width: 98%;">Submit Event</button></td> 
        </tr> 
        </table>
    </form>
    <div class="refContainer">
   <button style="background-color: mediumseagreen;" class="btn btn-light"><a href = "/eventShow" style="color: white;"> More options</a> </button> 
    </div>
    @include('sweetalert::alert')

</body>
</html>