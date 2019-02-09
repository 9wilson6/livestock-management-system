<?php 
if (isset($_REQUEST['rec_no'])) {
	require_once "dbconfig.php";
	$rec_no=$_REQUEST['rec_no'];
	$query="DELETE FROM health WHERE rec_no='$rec_no'";
	$results=mysqli_query($conn, $query);
	if ($results==1) {
		header("LOCATION:viewHealthRecords_.php");
	}
}

 ?>