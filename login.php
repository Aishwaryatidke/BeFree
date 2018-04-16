<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> Login Page</title>
    
<!--=============================================== 
    Template Design By L.I.F.E
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Be Free : Hygiene</title>

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
</HEAD>
<BODY>
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
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Information <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="basicinfo.html">Basic Information</a></li>
                    <li><a href="hygiene.html">Hygiene</a></li>
                    <li><a href="myths.html">Rescue from Myths</a></li>
                    <li><a href="videoes.html" >Videos</a></li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health Care <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="exercise.html">Exercise</a></li>
                    <li><a href="food.html">Food</a></li>
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
                      <LINK rel="stylesheet" type="text/css" href="rstyle.css">
         <section id="sliderArea">
          <div class="login-box">

        <center> <img src="user.png" class="p1"></center>
        <h1>Login Here</h1>
        <form  method ="POST" action="logindb1.php">
            <p>Username</p>
            <input width="100" type="text" name="Username" placeholder="Enter Username" required/>
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password" required/>
		<tr>
        <td>Type</td>
        <td><select id = "myList" name="Type">
               <option value = "Student">Student</option>
               <option value = "Teacher">Teacher</option>
                <option value = "Company">Company</option>
 		<option value = "Gynecologist">Gynecologist</option>  
             </select></td>
    </tr>
            <input type="submit" name="submit" value="Login"/>	
            <a href ="a" >Forget Password</a>
            <p>If not Register Click Here</p>
            <a href ="cregister.php ">Click here for Company Register</a><br>
			<a href ="tregister.php ">Click here for Teacher Register</a><br>
			<a href ="gregister.php ">Click here for Gynaecologist Register</a><br>
			<a href ="uregister.php ">Click here for User Register</a>
        </form>

    </div>
       </section>  
</section>                                                            
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
                                                                                 
                                                                                
</BODY>
</HTML>




