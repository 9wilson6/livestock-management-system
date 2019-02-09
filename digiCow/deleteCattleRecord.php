<?php 
if (isset($_REQUEST['tag_no'])) {
	require_once "dbconfig.php";
	$tag_no=$_REQUEST['tag_no'];
	$query="DELETE FROM cattle WHERE Tag_no='$tag_no'";
	$result=mysqli_query($conn, $query);
	if ($result==1) {
		header("LOCATION:viewCattleRecords_.php");
	}else{
		die("An error Occured while deleting record");
	}
}
 ?>