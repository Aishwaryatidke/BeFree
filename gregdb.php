<?php
session_start();
$connection=mysqli_connect("localhost","root","Aish123","login") or die("not connected");

if(isset($_POST["submit"]))
{
$Name =mysqli_real_escape_string($connection,$_POST['Name']);
$Age=mysqli_real_escape_string($connection,$_POST['Age']);
$Gender=mysqli_real_escape_string($connection,$_POST['Gender']);
$Contact=mysqli_real_escape_string($connection,$_POST['Contact']);
$Clinic=mysqli_real_escape_string($connection,$_POST['Clinic']);
$City=mysqli_real_escape_string($connection,$_POST['City']);
$Tal=mysqli_real_escape_string($connection,$_POST['Tal']);
$Dist=mysqli_real_escape_string($connection,$_POST['Dist']);
$State=mysqli_real_escape_string($connection,$_POST['State']);
$Type=mysqli_real_escape_string($connection,$_POST['Type']);
$Username = mysqli_real_escape_string($connection,$_POST['Username']);
$Password = mysqli_real_escape_string($connection,$_POST['Password']);
$Password2=mysqli_real_escape_string($connection,$_POST['Password2']);

if ($Password != $Password2) {	// check if passwords match
	echo "Passwords do not match. Please re-enter.";
} else {
	
	$query = "SELECT * FROM gynecologist WHERE Username='$Username'";	// check if username already exists
	$result = mysqli_query($connection,$query);
	if(mysqli_num_rows($result)>0) {
		echo "Our database shows this username has already been registered. Please choose another username.";
	} 
	else {
			echo "Good";
        mysqli_query($connection,"insert into gynecologist(Name,Age,Gender,Contact,Clinic,City,Tal,Dist,State,Type,Username,Password) values('$Name','$Age','$Gender','$Contact','$Clinic','$City','$Tal','$Dist','$State','$Type','$Username','$Password')");
                 

	}	
	mysqli_close($connection);
}
  
}

?>

<!--mysqli_query($connection,"insert into gynecologist(Name,Age,Gender,Contact,Clinic,City,Tal,Dist,State,Type,Username,Password) values                      ('$Name','$Age','$Gender','$Contact','$Clinic','$City','$Tal','$Dist','$State','$Type','$Username','$Password')");-->
               
