<?php
session_start();
$connection=mysqli_connect("localhost","root","Aish123","login") or die("not connected");

  if(isset($_POST["submit"])){

  $Name=mysqli_real_escape_string($connection,$_POST['Name']);
 $cName=mysqli_real_escape_string($connection,$_POST['cName']);
$Type=mysqli_real_escape_string($connection,$_POST['Type']);
  $Username=mysqli_real_escape_string($connection,$_POST['Username']);
$Password=mysqli_real_escape_string($connection,$_POST['Password']);
$Password2=mysqli_real_escape_string($connection,$_POST['Password2']);


  

  if ($Password != $Password2) {	// check if passwords match
	echo "Passwords do not match. Please re-enter.";
} else {
	
	$query = "SELECT * FROM register WHERE Username='$Username'";	// check if username already exists
	$result = mysqli_query($connection,$query);
	if(mysqli_num_rows($result)>0) {
		echo "Our database shows this username has already been registered. Please choose another username.";
	} else {
			echo "Good";
                 mysqli_query($connection,"insert into register(Name,cName,Type,Username,Password)  values('$Name','$cName','$Type','$Username','$Password')");

	}	
	mysqli_close($connection);
}
  
}
?>
