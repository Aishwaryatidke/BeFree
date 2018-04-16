<?php
session_start();
$con=mysqli_connect("localhost","root","Aish123","login") or die("not connected");

if(isset($_POST['submit']))
					{
					
						
					    $Username = $_POST["Username"];
					    $Password = $_POST["Password"];
					    $Type=$_POST['Type'];
						if($Type=="Student")
						{
							$query="SELECT * FROM user WHERE Username='$Username' AND Password='$Password'";
							$query_run=mysqli_query($con,$query);
							$counts=mysqli_num_rows($query_run);
							if($counts==1)
							{ 
								
								session_id($uname);
								echo session_regenerate_id();
								//session_start();

								//$_SESSION['id']=$uname;
								$_SESSION['Username']=$Username;
								//$Username = $_SESSION['Username'];
								$_SESSION['Type']=$Type;
								//header('location:.\pofile.html?Name=$Name&&Type=$Type');
								echo '<script type="text/javascript">alert("'.$Username.' Login successfully...!!!");window.location=\'uprofile.php\';</script>';
								
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
							}
					}		
 
					if($Type=="Teacher")
					{
						
					    $Username=$_POST['Username'];
					    $Password=$_POST['Password'];
							$query="SELECT * FROM teacher WHERE Username='$Username' AND Password='$Password'";
							$query_run=mysqli_query($con,$query);
							$counts=mysqli_num_rows($query_run);
							if($counts==1)
							{
								session_id($Username);
								echo session_regenerate_id();
								//session_start();
								$_SESSION['Username']=$Username;
								//$Username = $_SESSION['Username'];
								$_SESSION['Type']=$Type;
								//header('location:.\profile.html?tName=$T=tName&&Type=$Type');
								echo '<script type="text/javascript">alert("'.$Username.' Login successfully...!!!");window.location=\'thome.php\';</script>';
								
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
							}
					}		
					if($Type=="Company")
					{
						
					    $Username=$_POST['Username'];
						$Password=$_POST['Password'];
							$query="SELECT * FROM register WHERE Username='$Username' AND Password='$Password'";
							$query_run=mysqli_query($con,$query);
							$counts=mysqli_num_rows($query_run);
							if($counts==1)
							{
								echo session_id($Username);
								echo session_regenerate_id();
								//session_start();
								$_SESSION['Username']=$Username;
								//$Name = $_SESSION['Username'];
								$_SESSION['Type']=$Type;
								//header('location:.\cprofile.html?tName=$tName&&Type=$Type');
								echo '<script type="text/javascript">alert("'.$Name.' Login successfully...!!!");window.location=\'chome.php\';</script>';
								
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
							}
					}		
		
					if($Type=="Gynecologist")
					{
						
					    $Username=$_POST['Username'];
					    $Password=$_POST['Password'];
							$query="SELECT * FROM gynecologist WHERE Username='$Username' AND Password='$Password'";
							$query_run=mysqli_query($con,$query);
							$counts=mysqli_num_rows($query_run);
							if($counts==1)
							{
								session_id($Username);
								echo session_regenerate_id();
								//session_start();
								$_SESSION['Username']=$Username;
								//$Uername = $_SESSION['Username'];
								$_SESSION['Type']=$Type;
								//header('location:gprofile.html?tName=$T=tName&&Type=$Type');
								echo '<script type="text/javascript">alert("'.$Username.' Login successfully...!!!");window.location=\'ghome.php\';</script>';
								
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
							}
					}							
}		
?>
