<!Doctype html>
<html>
<head>
<title></title>

</head>
<body>
<form method="post" action="/adddqry" style="width:45%;">
<input type="hidden" name="_token" value="{{csrf_token()}}"></input>
<label>Username</label>
<input type="text" name="name" class="form-control"><br></input>
<label>Password</label>
<input type="password" name="password" class="form-control"><br></input>
<input type="submit" name="add" class="btn btn-info" value="insert"></input>
</form>
</body>
</html>