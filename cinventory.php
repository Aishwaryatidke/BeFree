
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
session_start();
?>
    <meta charset="UTF-8">
    <title>Inventory for company</title>
    <!--=============================================== 
    Template Design By L.I.F.E
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    
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

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}



		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
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
  <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="chome.php">Home</a></li>
                  <li><a href="cinventory.php">Inventory</a></li>
                </li>
                
               <!-- <li><a href="https://eggtimer.herokuapp.com/accounts/login/?next=/calendar/">Period Tracker</a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultancy <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="gynae.html">Know your answer</a></li>
                    <li><a href="https://www.practo.com/consult">Online Consultancy</a></li>
                    
                  </ul>
                </li>
                <li><a href="buy.html">Buy Online</a></li>-->
               <!--<li><a href="cprofile.php">Profile</a></li>-->
		<li><a href="logout.php">Logout</a></li>

              </ul>
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO --><a class="navbar-brand" href="index.html"><font size="+5">BE <span>FREE</span></font></a><img src="images/lng2.png" alt="logo" width="0" height="1" class="img-responsive img-circle"><!-- IMG BASED LOGO  -->
               <a class="navbar-brand" href="index.html"></a>                       
            </div>
            <div id="navbar" class="navbar-collapse collapse"> </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
<br>
<br>
<br>
<br>
<br>
<br>
    <!--=========== END HEADER SECTION ================-->   
<!--================design=====================-->




<body bgcolor="#EEFDEF">
<h1> YOU"VE FOLLOWING ORDERS PENDING</h1>

<?php
//session_start();
$con = mysqli_connect("localhost","root","Aish123","login")or die("cannot connect");


if (!$con)

  {

  die('Could not connect: ' . mysqli_error($con));

  }

 

mysqli_select_db($con,"login");
session_regenerate_id();
$_SESSION['cName']=$cName;		
$cName=$_SESSION['cName'];


$result = mysqli_query($con,"SELECT sname,email,contact,quantity,address FROM orderpads WHERE company ='$cName'");

 echo $result;

echo "<table border='1'>

<tr>

<th>School Name</th>

<th>Email</th>

<th>Contact No.</th>

<th>Quantity</th>

<th>Address</th>





</tr>";

 

while($row = mysqli_fetch_array($result,
MYSQLI_BOTH))

  {

  echo "<tr>";

  echo "<td>" . $row['sname'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['contact'] . "</td>";

  echo "<td>" . $row['quantity'] . "</td>";
  
   echo "<td>" . $row['address'] . "</td>";


 

echo "<td><form action='companyapprove.php' method='POST'><input type='hidden' name='tempId' value='".$row["quantity"]."'/><input type='submit' name='submit-btn' value='Approve' /></form></td></tr>";

  echo "</tr>";

  }


echo "</table>";

 

mysqli_close($con);

?>



<!--<?php

//session_start();
$con=mysqli_connect("localhost","root","Aish123","login") or die("not connected");


if (!$con)

  {

  die('Could not connect: ' . mysqli_error($con));

  }

 

mysqli_select_db($con,"login");

 /*$sname=mysqli_real_escape_string($connection,$_POST['sname']);
 $email=mysqli_real_escape_string($connection,$_POST['email']);
$contact=mysqli_real_escape_string($connection,$_POST['contact']);
  $quantity=mysqli_real_escape_string($connection,$_POST['quantity']);
$address=mysqli_real_escape_string($connection,$_POST['address']);

  $company=mysqli_real_escape_string($connection,$_POST['company']);*/
  


 
$currentuser=get_current_user();
$result = mysqli_query($con,"SELECT sname,email,contact,quantity,address FROM orderpads where compnay=(select cName from register where Username=('$currentuser')");

 //$result = mysqli_query($con,"SELECT * from orderpads");

echo "<table border='1'>

<tr>

<th>School Name</th>

<th>Email</th>

<th>Mobile</th>

<th>Quantity </th>

<th>Address </th>
<th>Company </th>

</tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

  {

  echo "<tr>";

  echo "<td>" . $row['sname'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['contact'] . "</td>";
  
   echo "<td>" . $row['quantity'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";

 echo "<td>" . $row['company'] . "</td>";

 
//echo "<td><form action='email.php' method='POST'><input type='hidden' name='tempId' value='".$row["pname"]."'/><input type='submit' name='submit-btn' value='Approve' /></form></td></tr>";

  echo "</tr>";

  }


echo "</table>";

 

mysqli_close($con);

?>
-->
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


