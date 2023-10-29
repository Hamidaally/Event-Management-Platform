<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
=======
    <title>EVENTS</title>
>>>>>>> 88f6a61b8bf5a7f691ee02f306206a53222ffe6e
=======
>>>>>>> parent of 10a93d1 (Adding changes to the project)
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
<h3>Welcome EventOrganizer</h3>
    <p>
        Lets Get started!!
    </p>
    
    <form action = "/show" method="post">
      @csrf
        <table align="center" width="45%" style="background-color: rgb(162, 75, 162); padding: 1% 0;">
            <tr>
            <td class="headerTitle">
            <p class="createAccount">Create an Event</p>
            </td>
        </tr>  
        <tr>
          <td><input type="text" placeholder="Event name" name="ename"></td>  
        </tr>   
        <tr>
          <td><input type="text" placeholder="Describe event" name="desc"></td>  
        </tr>  
        <tr>
          <td> <input type="text" placeholder="Location" name="location"></td> 
        </tr>
        <tr>
<<<<<<< HEAD
=======
          <td> <input type="text" placeholder="Ticket types" name="types"></td> 
        </tr>
        <tr>
          <td> <input type="number" placeholder="Pricing" name="price"></td> 
        </tr>
        <tr>
>>>>>>> parent of 10a93d1 (Adding changes to the project)
          <td> <input type="date" placeholder="Date" name="date"></td> 
        </tr>
        <tr>
          <td> <input type="time" placeholder="Time" name="time"></td> 
        </tr>
        <tr>
          <td> <input type="submit"  id="button" value="Submit Event" ></td> 
        </tr> 
        </table>
    </form>
    <div class="refContainer">
    <a href = "/eventShow"> Click Here</a> to view events.
    </div>
   
</body>
</html>