<?php
              session_start();
$connection=mysqli_connect("localhost","root","Aish123","login") or die("not connected");

  if(isset($_POST["submit"])){

  $avapads=mysqli_real_escape_string($connection,$_POST['avapads']);
 $dpads=mysqli_real_escape_string($connection,$_POST['dpads']);
$sName=mysqli_real_escape_string($connection,$_POST['sName']);
 

 
			
    mysqli_query($connection,"insert into storage (avapads,dpads,sName) values('$avapads','$dpads','$sName')");

    echo '<script type="text/javascript">alert("DATA INSERTED SUCCESSFULLY");window.location=\'updatedform.php\';</script>';

  


 
mysqli_close($connection);
}

?>


		
	
  

