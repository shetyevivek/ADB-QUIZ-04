<!DOCTYPE html>
<html>
<head>
	<title>Answer 12</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br><br>
  </div>
</body>
</html>

<?php
include_once 'connection.php';

$name = $_POST['name'];
$descrip = $_POST['descrip'];

// Retrieve the data
$sql = "UPDATE description SET Description = '$descrip' WHERE Name = '$name'";
$result = mysqli_query($con, $sql) or die('Error ' . mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
    echo "Description of " .$name. " has been successfully updated to " .$descrip;
}

?>