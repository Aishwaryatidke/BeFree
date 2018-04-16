<html>
<head>
<title>search results</title>
</head>
<body>
 <div class="container-fluid" >

 <center><h2 style="color:red">Results</h2></center><br><br><br>
 <div class = "well well-lg" >
<?php
$conn = mysqli_connect("localhost", "root", "Aish123");
mysqli_select_db('login', $conn);
//search code
//error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];
if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM tbl_comment WHERE comment LIKE '%$name%'";
	$result = mysqli_query($conn,$sele);

	if($mak = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){

	echo '<br> <u>Comment_Sender_Name</u>: '.$row['comment_sender_name'];
	echo '<br><u>Comment</u>: '.$row['comment'];
		echo '<br><u>Date</u>: '.$row['date'];
			echo '<br>';
	}
}else{
echo'<h2> Search Result</h2>';
print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}
?>
</div>
</div>
</body>
</html>
