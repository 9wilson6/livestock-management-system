<?php function getUserNo($name){
require_once("dbconfig.php");
$query="SELECT * FROM farmer WHERE username='$name'";
$result=mysqli_query($conn, $query);
die(print_r($result));


} 
$username="wilson";
getUserNo($username);

?>