
<?php
session_start();
$connection=mysqli_connect("localhost","root","Aish123","login") or die("not connected");

if(isset($_POST["submit"]))
{
$tName = mysqli_real_escape_string($connection,$_POST['tName']);
$sName =mysqli_real_escape_string($connection,$_POST['sName']);
$Age=mysqli_real_escape_string($connection,$_POST['Age']);
$Gender=mysqli_real_escape_string($connection,$_POST["Gender"]);
$Username = mysqli_real_escape_string($connection,$_POST['Username']);
$Password = mysqli_real_escape_string($connection,$_POST['Password']);
$Password2=mysqli_real_escape_string($connection,$_POST['Password2']);
$Type=mysqli_real_escape_string($connection,$_POST['Type']);

//$sql =mysqli_query($con,"insert into teacher(tName,csame,Age,Gender,Username,Password)  values('$tName','$sName','$Age','$Gender','$Username','$Password')");

 
 if ($Password != $Password2) {	// check if passwords match
	echo "Passwords do not match. Please re-enter.";
} 
else {
	$query = "SELECT * FROM teacher WHERE Username='$Username'";	// check if username already exists
	$result = mysqli_query($connection,$query);
	if(mysqli_num_rows($result)>0) {
		echo "Our database shows this username has already been registered. Please choose another username.";
	} else {
			echo "Good";
                 mysqli_query($connection,"insert into teacher(tName,sName,Age,Gender,Username,Password,Type)values('$tName','$sName','$Age','$Gender','$Username','$Password','$Type')");
	}	
	mysqli_close($connection);
}
  
}

?>
