<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> Register page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

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

-->

    
     
</HEAD>                                                                          
</BODY>
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
                <li class="active"><a href="thome.php">Home</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inventory<span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="formpage.php ">Order Sanitary Napkins</a></li>
			<li><a href="updatedform.php">Storage</a></li>
                    
                  </ul>
                </li>
                              
                <!--<li><a href="">Profile</a></li>-->
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

    <!--=========== END HEADER SECTION ================-->  
<!--================design=====================-->
<link rel="stylesheet" type="text/css" href="rstyle.css">

<div class="login-box1">
<form   method="POST" action="ordersubmit.php">
    <table>
    <center> <img src="11.jpg " class="p1"></center>
    <h1>Order form</h1>


	<tr>
        <td> School Name</td>
       <td> <input type="text" name="sname" value="" placeholder="Enter School Name" required/></td>
    </tr>
    <tr>
            <td>Email</td>
           <td> <input type="email" name="email" value="" placeholder="Enter Email" required/></td>
    </tr>
        
    <tr>
        <td>Conact Number</td>
        <td><input type="text" name="contact" color="Black" value="" placeholder="EnterContact Number" required/></td>
    </tr>
 <tr>
        <td>Quantity </td>
        <td><input type="text" name="quantity" color="Black" value="" placeholder="EnterQuntity of Pads in Packet" required/></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input type="text" name="address" placeholder="Enter address" reuired/></td>
    </tr>
	<tr>
	<td>Company Name</td>
	<td>
               
	<?php
               $con=mysqli_connect("localhost","root","Aish123","login") or die("not connected");
                //session_start();
		$query = 'select cName from register';
                ?>
		
                <select id="myList" name="company">
                <?php
		$result=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($result))
              {
              ?>
            <option><?php echo $row["cName"]; ?></option>
            <?php
         }
       ?>
       </select>
	</td>
			
	
	</tr>
       <tr>
           <td><input type="submit" name="submit" value="Submit"></td>
       </tr>
    

    </table>
	</form>
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

</HTML>




