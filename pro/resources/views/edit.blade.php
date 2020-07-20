<!Doctype html>
<html>
<head>
<title></title>
</head>
<body>
<form method="post" action="/editqry" style="width:45%;">
<input type="hidden" name="_token" value="{{csrf_token()}}">
@foreach($res as $value)
<input type="hidden" name="id" value="{{$value->id}}">
<label>Dish Name</label>
<input type="text" name="name" class="form-control" value="{{$value->dname}}"><br>
<label>Price</label>
<input type="number" name="price" class="form-control" value="{{$value->price}}"><br>
@endforeach
<input type="submit" name="add" class="btn btn-info" value="insert">
</form>
</body>
</html>