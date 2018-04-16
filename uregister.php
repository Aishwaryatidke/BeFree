<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register page for teacher</title>
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
                <li class="active"><a href="index.html">Home</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Information <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="basicinfo.html">Basic Information</a></li>
                    <li><a href="hygiene.html">Hygiene</a></li>
                    <li><a href="myths.html">Rescue from Myths</a></li>
                    <li><a href="#" >Videos</a></li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health Care <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="basicinfo.html">Exercise</a></li>
                    <li><a href="hygiene.html">Food</a></li>
                    <li><a href="myths.html">Mood Swings</a></li>
                  </ul>
                </li>
               <!-- <li><a href="https://eggtimer.herokuapp.com/accounts/login/?next=/calendar/">Period Tracker</a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultancy <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="gynae.html">Know your answer</a></li>
                    <li><a href="https://www.practo.com/consult">Online Consultancy</a></li>
                    
                  </ul>
                </li>
                <li><a href="buy.html">Buy Online</a></li>-->
                <li><a href="contact.html">Contact</a></li>
		<li><a href="login.php">Login</a></li>

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
<form  action="db/uregdb.php" method="post">
    <table>
    <center> <img src="user.png " class="p1"></center>
    <h1>Register Here</h1>


	<tr>
        <td> Name</td>
       <td> <input type="text" name="Name" color="Black" value="" placeholder="Enter your Name" required/></td>
    </tr>
    <tr>
            <td>School Name</td>
           <td> <input type="text" name="sName" color="Black" value="" placeholder="Enter School Name" required/></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><input type="number" name="Age" color="Black" value="" pattern=""title="contain only number" placeholder="Enter Age" required/></td>
    </tr>
	 <tr>
	 <tr>
        <td>Contact</td>
                <td><input type="tel" name="Contact"  color="Black" value="" placeholder="Enter your phone number" required/></td>

    </tr>
        <td>Address</td>
                <td><input type="text" name="City" color="Black" value="" placeholder="Enter your City or village" required/>
				<input type="text" name="Tal" color="Black" value="" placeholder="Tahshil" required/>
				<input type="text" name="Dist" color="Black" value="" placeholder="District" required/>
				<input type="text" name="State" color="Black" value="" placeholder="State" required/>
				</td>

    </tr>

<tr>
        <td>Type</td>
        <td><select id = "myList" name="Type" color="Black" required/>
		<option value="0">-Select-</option>
               <option value = "Student">Student</option>
               <option value = "Teacher">Teacher</option>
                <option value = "Company">Company</option>
 		<option value = "Gynecologist">Gynecologist</option>
               
               
             </select></td>
    </tr>
	 <tr>
        <td>Username</td>
        <td><input type="text" name="Username" color="Black" value="" placeholder="Enter Username" required/></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" name="Password" color="Black" size="15" maxlength="10" pattern="(?=.*\d)(?=.*[A-Z)(?=.*[a-z]).{8,}" 
		title="must contain atleast one number and ane uppercase and lowercase letter" placeholder="Enter Password" required/></td>
    </tr>
<td>Re-Password</td>
        <td><input type="text" name="Password2" size="15" maxlength="10" pattern="(?=.*\d)(?=.*[A-Z)(?=.*[a-z]).{8,}" title="must contain atleast one number and ane uppercase and lowercase letter" placeholder="Enter Password" reuired/></td>
    </tr>
       <tr>
           <td><input type="submit" name="submit"  value="Register"></td>
       </tr>
     <tr><td> <a href ="login.php" >Back To Login</a></td>
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
</body>

</html>
