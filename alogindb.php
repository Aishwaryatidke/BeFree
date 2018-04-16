<?php  
 session_start();
$connection=mysqli_connect("localhost","root"," ","login") or die("not connected");

	if(isset($_POST['submit']))
	{
	  $aUsername=$_POST['aUsername'];
	  $Password=$_POST['Password'];
	  $query="SELECT * FROM admin WHERE 'aUsername` ='$aUsername' AND `Password` ='$Password';";
	  $run=mysqli_query($con,$query);
	  $row=mysqli_num_rows($run);
	  if($row<1)
	  {
	    ?>
		<script>
		   alert('Username or password not match!!');
		   window.open('alogin.php','_self');
		</script>
		<?php
		}
		else
		{
		  echo '<script type="text/javascript">alert("'.$Username.' Login successfully...!!!");window.location=\'ahome.html\';</script>';
								
		}
	  }
		?>



