<?php if (isset($_POST['submit'])) {
	require_once('dbconfig.php');
	date_default_timezone_set("Africa/Nairobi"); 
	$sender_id= $_POST['sender_id'];
	$post=$_POST['post'];
	$datetym=strtotime(date('Y-m-d H:i:s'));
	$query="INSERT INTO messages(sender_id, datetym,message) VALUES('$sender_id', '$datetym', '$post')";
	$results=mysqli_query($conn, $query);
	if ($results==1) {
		header("LOCATION: forum.php");
	}else{
		die("request not successful");
	}
	
} ?>