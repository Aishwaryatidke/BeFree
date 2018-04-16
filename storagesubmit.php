<?php
session_start();
$connection=mysqli_connect("localhost","root","Aish123","login") or die("not connected");

  if(isset($_POST["submit"])){

 /*if(($result = mysqli_query($connection,"SELECT * FROM storage")) <= 1){

  $avapads=mysqli_real_escape_string($connection,$_POST['avapads']);
 
  mysqli_query($connection,"insert into storage(avapads)  values('$avapads')");
}

 else{*/
   $avapads=mysqli_real_escape_string($connection,$_POST['avapads']);
   $sName=mysqli_real_escape_string($connection,$_POST['sName']);
   mysqli_query($connection,"update storage set avapads=avapads+('$avapads') where sName=('$sName')");
  // mysqli_query($connection,"insert sName into storage

		
	mysqli_close($connection);

  
}
?>

<?php

  if(isset($_POST["show"])){

$sql = "select avapads from storage";

    if($result = mysqli_query($connection, $sql)){

        if(mysqli_num_rows($result) > 0){

            echo "<table>";

                echo "<tr>";

                    echo "<th>Available pads</th>";

                   

                echo "</tr>";
         }

            while($row = mysqli_fetch_array($result)){

                echo "<tr>";

                    echo "<td>" . $row['avapads'] . "</td>";
                echo "</tr>";
                    

            }

            echo "</table>";

            // Free result set

            mysqli_free_result($result);

        } else{

            echo "No records .";

        }
}
?>

  
 

 
