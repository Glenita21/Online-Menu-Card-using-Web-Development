<!Doctype html>
<html>
<head>
<title></title>
<img src="{{asset('frontside/image/cream.jpg')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontside/css/bootstrap.css')}}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


  <div class="jumbotron">
    <h1>Welcome To THE FROZEN SPOON</h1>
  

<ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>





 <p class="bg-primary text-white"></p>
  <p class="bg-danger text-white"></p>++
<form method="post" action="/addqry" style="width:45%;">
<input type="hidden" name="_token" value="{{csrf_token()}}"></input>
<label>Dish Name</label>
<input type="text" name="name" class="form-control"><br></input>
<label>Price</label>
<input type="number" name="price" class="form-control"><br></input>

<input type="submit" name="add" class="btn btn-info" value="insert"></input>
</form>


<table border=1>

<span class="label label-warning">DISH NAME</span>
<span class="label label-danger">PRICE</span>
<span class="label label-success">EDIT</span>
<span class="label label-default">DELETE</span>

@foreach($res as $items)
<tr>
<td>{{ $items->dname}}</td>
<td>{{ $items->price}}</td>
<td><a href="/edit/{{$items->id}}">edit</a></td>
<td><a href="/delete/{{$items->id}}">delete</a></td>
</tr>

@endforeach

</table>
</body>
</html>