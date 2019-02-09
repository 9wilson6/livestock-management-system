<?php 
$table=$_REQUEST['table'];
$count=$_REQUEST['count'];

require_once("dbconfig.php");
if ($table=="cattle") {

$query=" DELETE FROM cattle WHERE count =".$count;
$results=mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($results==1) {
	header("LOCATION:viewrecords.php");
}else{
	echo("Item not deleted");
}
}



elseif ($table=="invetory") {
$query=" DELETE FROM invetory WHERE rec_no =".$count;
$results=mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($results==1) {
	header("LOCATION:inventory_records.php");
}else{
	echo("Item not deleted");
}	
}elseif ($table=="users") {
	
$query=" DELETE FROM farmer WHERE id =".$count;
$results=mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($results==1) {
	header("LOCATION:manageUsers.php");
}else{
	echo("Item not deleted");
}	

}
 ?>
