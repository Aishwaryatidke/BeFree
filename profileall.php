 

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile pages</title>
    <!--=============================================== 
    Template Design By L.I.F.E
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">   
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Photo Swipe Image Gallery -->     
    <link rel='stylesheet prefetch' href='css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='css/default-skin.css'>    

    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 



 <style type="text/css">
#ProfilePage
{
    /* Move it off the top of the page, then centre it horizontally */
    margin: 50px auto;
    width: 635px;

/* For visibility. Delete me */
border: 1px solid red;
}

#LeftCol
{
    /* Move it to the left */
    float: left;

    width: 200px;
    text-align: center;

    /* Move it away from the content */
    margin-right: 20px;

/* For visibility. Delete me */
border: 1px solid brown;
}

#Photo
{
    /* Width and height of photo container */
    width: 200px;
    height: 200px;

/* For visibility. Delete me */
border: 1px solid green;
}

#PhotoOptions
{
    text-align: center;
    width: 200px;

/* For visibility. Delete me */
border: 1px solid brown;
}

#Info
{
    width: 400px;
    text-align: center;

    /* Move it to the right */
    float: right;

/* For visibility. Delete me */
border: 1px solid blue;
}

#Info strong
{
    /* Give it a width */
    display: inline-block;
    width: 100px;

/* For visibility. Delete me */
border: 1px solid orange;
}

#Info span
{
    /* Give it a width */
    display: inline-block;
    width: 250px;

/* For visibility. Delete me */
border: 1px solid purple;
}
</style>
</head>
<body>






 <?php
                       include "db1.php";
					   //session_start();
                       $sessionID=session_id();


					   // $uname=$_GET['uname'];
					   
					   //$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$user=$_SESSION['uname'];
$role=$_SESSION['role'];
//$pass=$_SESSION['pass'];
if($role=="Alumni")
{

//Alumni view profile
                   include "db1.php";
					   

$user=$_SESSION['uname'];
//$pass=$_SESSION['pass'];

$qs = "SELECT * FROM alumni_info where uname='$user'";
$rs = mysqli_query($con,$qs);
		   
					   
					 //$query1=mysqli_query($con,"SELECT * FROM stud_info");
					//$fetch=mysqli_fetch_assoc($query1);
					echo "<table border='1' cellspacing='0' align='left'>";
						echo "<tr>";
							echo "<th width='30'>";
								echo"id";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"name";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"address";
							echo "</th>";
							
							echo "<th width=120'>";
								echo"branch";
							echo "</th>";
							
							echo "<th width='300'>";
								echo"Company Name";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Job profile";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Package";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Award";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Passout Year";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Phone No";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Email";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"User name";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Password";
							echo "</th>";
							
						echo "</tr>";
						while($fetch=mysqli_fetch_assoc($rs))
						{
							echo "<tr>";
								echo"<td>".$fetch['id']."</td>";
								echo"<td>".$fetch['name']."</td>"; 
								echo"<td>".$fetch['address']."</td>";
								echo"<td>".$fetch['branch']."</td>";
								echo"<td>".$fetch['c_name']."</td>";
								echo"<td>".$fetch['j_pof']."</td>";
								echo"<td>".$fetch['pack']."</td>";
								echo"<td>".$fetch['award']."</td>";
								echo"<td>".$fetch['p_year']."</td>";
								echo"<td>".$fetch['ph_no']."</td>";
								echo"<td>".$fetch['email']."</td>";
								echo"<td>".$fetch['uname']."</td>";
								echo"<td>".$fetch['pass']."</td>";
							echo "</tr>";
						}
					echo"</table>";
}

else
{
$qs = "SELECT * FROM stud_info where uname='$user'";
$rs = mysqli_query($con,$qs);
		   
					   
					 //$query1=mysqli_query($con,"SELECT * FROM stud_info");
					//$fetch=mysqli_fetch_assoc($query1);
					echo "<table border='1' cellspacing='0'>";
						echo "<tr>";
							echo "<th width='30'>";
								echo"id";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"r_no";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"name";
							echo "</th>";
							
							echo "<th width=120'>";
								echo"branch";
							echo "</th>";
							
							echo "<th width='300'>";
								echo"class";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"addresss";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"contact_no";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"email";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"uname";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"pass";
							echo "</th>";
							
						echo "</tr>";
						while($fetch=mysqli_fetch_assoc($rs))
						{
							echo "<tr>";
								echo"<td>".$fetch['id']."</td>";
								echo"<td>".$fetch['r_no']."</td>"; 
								echo"<td>".$fetch['name']."</td>";
								echo"<td>".$fetch['branch']."</td>";
								echo"<td>".$fetch['class']."</td>";
								echo"<td>".$fetch['addresss']."</td>";
								echo"<td>".$fetch['contact_no']."</td>";
								echo"<td>".$fetch['email']."</td>";
								echo"<td>".$fetch['uname']."</td>";
								echo"<td>".$fetch['pass']."</td>";
							echo "</tr>";
						}
					echo"</table>";
}
?>
