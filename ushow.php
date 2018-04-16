<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register page for teacher</title>
    <!--=============================================== 
    Template Design By L.I.F.E
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Be Free : Admin</title>

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
	<style>
	.homeblack:hover {
  background-color: #0000FF;
  padding:30px 10px 18px 10px;
}
.floatleft{
	float:left;
   width:15%;
   background-color:pink;
   height:600px
}
.floatright{
	float:right;
   width:85%;
   background-color:grey;
   height:600px;
}
.wrap{
width:100%
}
</style>
</head>

<body>


 <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->
<!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
  <h1 class="container">Admin Panel</h1>
      <!-- END MENU -->    
    </header>
	<br>
	<br>
	<br>
	<br>
	<br>
    <!--=========== END HEADER SECTION ================-->   
<!--================design=====================-->
<div class="wrap">
	<div class="floatleft">
	<br>
	<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Users<span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="ushow.php ">Student</a></li>
                    <li><a href=" ">Gynecologist</a></li>
					 <li><a href=" ">Teacher</a></li>
					 <li><a href=" ">Compnay</a></li>

  
                  </ul>
                </li>
				<br>
	<li><a href="alogin.php">Logout</a></li>
	</div>
	<div class="floatright">
<?php
session_start();
$connection=mysqli_connect("localhost","root","Aish123","login") or die("not connected");



$Name =mysqli_real_escape_string($connection, $_POST['Name']);
$sName =mysqli_real_escape_string($connection,$_POST['sName']);
$Age=mysqli_real_escape_string($connection,$_POST['Age']);
$Contact=mysqli_real_escape_string($connection,$_POST['Contact']);
$City=mysqli_real_escape_string($connection,$_POST['City']);
$Tal=mysqli_real_escape_string($connection,$_POST['Tal']);
$Dist=mysqli_real_escape_string($connection,$_POST['Dist']);
$State=mysqli_real_escape_string($connection,$_POST['State']);
$Type=mysqli_real_escape_string($connection,$_POST['Type']);
$Username = mysqli_real_escape_string($connection,$_POST['Username']);


mysqli_select_db($connnection,"login");
		
//$cName=$_SESSION['cName'];
 
$result = mysqli_query($connection,"SELECT Name,sName,Age,contact,City,Tal,Dist,State FROM register");

echo "<table border='1'>

<tr>
<th> Name</th>

<th>School Name</th>

<th>Age</th>
<th>Contact</th>
<th>City</th>

<th>Tal</th>

<th>District</th>

<th>State</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";
 echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['sName'] . "</td>";

  echo "<td>" . $row['Age'] . "</td>";

  echo "<td>" . $row['Contact'] . "</td>";

  echo "<td>" . $row['City'] . "</td>";
  
   echo "<td>" . $row['Tal'] . "</td>";
echo "<td>" . $row['Dist'] . "</td>";
echo "<td>" . $row['State'] . "</td>";

 

echo "<td><form action='ahome.html' method='POST'><input type='hidden' name='tempId' value='".$row["quantity"]."'/><input type='submit' name='submit-btn' value='Approve' /></form></td></tr>";

  echo "</tr>";

  }


echo "</table>";

 

mysqli_close($connection);
?>
</div>
	</div>

 <!--=============== end Design ======================-->                                                                          
  <section id="topFeature">
      <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row"> </div>
        </div>
        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row"> </div>
        </div>
        <!-- End Single Top Feature -->

        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row"> </div>
        </div>
        <!-- End Single Top Feature -->
      </div>
    </section>

<!-- jQuery Library  -->
    <script src="js/jquery.js"></script>    
    <!-- Bootstrap default js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>      
    <!-- counter -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Doctors hover effect -->
    <script src="js/snap.svg-min.js"></script>
    <script src="js/hovers.js"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src='js/photoswipe.min.js'></script>
    <script src='js/photoswipe-ui-default.min.js'></script>    
    <script src="js/photoswipe-gallery.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
                                                                 
</body>
</html>
