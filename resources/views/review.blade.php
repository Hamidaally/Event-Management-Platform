<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
    <style>
 .rate {
         float: left;
         height: 46px;
         padding: 0 10px;
         align-items: center;
         }
         .rate:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rate:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rate:not(:checked) > label:before {
         content: '★ ';
         }
         .rate > input:checked ~ label {
         color: #ffc700;
         }
         .rate:not(:checked) > label:hover,
         .rate:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rate > input:checked + label:hover,
         .rate > input:checked + label:hover ~ label,
         .rate > input:checked ~ label:hover,
         .rate > input:checked ~ label:hover ~ label,
         .rate > label:hover ~ input:checked ~ label {
         color: #c59b08;
         
         }
         .rating-container .form-control:hover, .rating-container .form-control:focus{
         background: #fff;
         border: 1px solid #ced4da;
         }
         .rating-container textarea:focus, .rating-container input:focus {
         color: #000;
         }
         .form-container{
            align-items: center;
         }
         textarea{
            margin-top: 40px;
            align-items: center;
            margin:auto;
         }
         button{
            margin-left: 500px;
            background-color:dodgerblue;
            margin: auto;
            width: 150px;
            border-radius: 2px;
            align-items: center;
         }
         h2{
            text-align: center;
         }
         .comments{
            margin-top: 50px;
         }
         .flex-container {
  display: flex;
  flex-direction: column;
  

}

.flex-container > div {
  width: 50px;
  margin: 10px;
  text-align: center;
  line-height: 30px;
  font-size: 20px;
  justify-content: center;
}
    </style>
</head>
<body>
<form id="addStar" method="POST" action="{{route('review-store')}}">
     @csrf
<!--@method('PUT') -->
  
 
  <div>
    @foreach ($events as $event)
        <input type="hidden" name="event_id" value="{{ $event->event_id }}">
    @endforeach
</div>
  
@auth
<div>
    <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}">
</div>
@endauth
<div class="card text-center">
  <div class="card-header">
  <h4>Review Section </h4>
  </div>
  <div class="card-body">
  <div class="d-flex justify-content-center">
  <div class="rate">
     <input type="radio" id="star5" class="rate" name="rating" value="5"/>
    <label for="star5" title="text">5 stars</label>
    <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" class="rate" name="rating" value="3"/>
   <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" class="rate" name="rating" value="2">
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" class="rate" name="rating" value="1"/>
    <label for="star1" title="text">1 star</label>
    </div>
</div>
    
<div class="card-text" style="justify-content: center;">
     <div>  <label for="Comment" class="comments">Leave a comment:</label></div>

    <div><textarea name="comment" rows="5" cols="80"></textarea></div>

    <div><button class="btn btn-primary" style="align-content: center;">Submit</button></div>
  </div>
</div>
</div>
</form>
@include('sweetalert::alert')

</body>
</html>