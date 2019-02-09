<?php 
if (isset($_REQUEST['recno'])) {
	require_once("dbconfig.php");

	$rec_no=$_REQUEST['recno'];
	$query="DELETE FROM milk_record WHERE rec_no='$rec_no'";
	$result=mysqli_query($conn, $query);
	if ($result==1) {
		header("LOCATION:viewMilkRecord_.php");
	}
}else{
	echo $_REQUEST['recno'] ;
}

 ?>