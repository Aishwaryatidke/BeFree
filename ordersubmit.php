<?php
session_start();
$connection=mysqli_connect("localhost","root","Aish123","login") or die("not connected");

  if(isset($_POST["submit"])){

  $sname=mysqli_real_escape_string($connection,$_POST['sname']);
 $email=mysqli_real_escape_string($connection,$_POST['email']);
$contact=mysqli_real_escape_string($connection,$_POST['contact']);
  $quantity=mysqli_real_escape_string($connection,$_POST['quantity']);
$address=mysqli_real_escape_string($connection,$_POST['address']);

  $company=mysqli_real_escape_string($connection,$_POST['company']);
  

 
			
    mysqli_query($connection,"insert into orderpads (sname,email,contact,quantity,address,company) values('$sname','$email','$contact','$quantity','$address','$company')");

    echo '<script type="text/javascript">alert("DATA INSERTED SUCCESSFULLY");window.location=\'formpage.php\';</script>';

		
	mysqli_close($connection);

  
}
?>
