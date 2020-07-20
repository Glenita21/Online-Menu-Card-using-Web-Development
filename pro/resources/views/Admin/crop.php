<html>
<head>
	<title>Insert</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<h2 align="center">Insert Crop</h2>
	<form action="CropInsert.php" method="POST">
		<div class="form-group"><!--This is bootstrap class-->
			<label>Crop Name</label>
			<input type="text" name="Crop_Name"  placeholder="Enter the Crop name" class="form-control">
		</div>
		
		<div class="form-group">
			<label>Crop_Type</label>
			<select name="Crop_Type" class="form-control">
				<option  placeholder="Rabi">Rabi</option>
				<option  placeholder="Kharif">Kharif</option>
			</select>
		</div>
                <div class="form-group">
			<label>Crop Variety</label>
			<input type="text" name="Crop_Variety"  placeholder="Enter the crop variety" class="form-control">
		</div>
		<div class="form-group">
			<label>Crop_Duration</label>
			<input type="text" name="Crop_Duration"  placeholder="Enter the Duration" class="form-control">
		</div>
		<button type="submit" name="save" class="btn btn-default">Save</button>
	</form>
</body>
</html>
<?php

//connect to mysql & DB,  Format - 'localhost-username-password-databasename'
$conn = mysqli_connect("localhost", "root", "", "Crop_mgmt");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

//Prepare Insert Query
$cropname = $_POST["Crop_Name"];
$croptype = $_POST["Crop_Type"];
$cropvariety = $_POST["Crop_Variety"];
$cropduration = $_POST["Crop_Duration"];


//No need to insert id, On each insert, id will be auto-incremented
$query = "INSERT INTO CROP(Crop_Name,Crop_Type,Crop_Variety,Crop_Duration) VALUES ('$cropname','$croptype', '$cropvariety', '$cropduration')";

if (mysqli_query($conn, $query)) 
{
    //If insert is successful, user will be redirected to Display page
	header("Location: CropDisplay.php"); 
} 
else 
{
    echo "Error while inserting Data to DB <br>" . mysqli_error($conn);
}


//close connection
mysqli_close($conn);
?>
