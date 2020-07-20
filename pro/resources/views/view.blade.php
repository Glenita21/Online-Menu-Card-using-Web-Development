<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border=1>
<tr>
<th>Dish Name</th>
<th>price</th>
</tr>
@foreach($users as $user)
<tr>
<td>{{$user->dname}}</td>
<td>{{$user->price}}</td>
</tr>
@endforeach
</table>
</body>
</html>