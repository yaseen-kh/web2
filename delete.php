<?php
$con=mysqli_connect('localhost','root','') or die (mysqli_error($con));
     mysqli_select_db($con,'project_one') or die (mysqli_error($con));

$id = $_GET['id'];

mysqli_query($con, "delete from students where id='$id'") or die (mysqli_error($con));


header("Location:listing.php")

?>
