<?php
 session_start();
session_unset();
session_destroy();
if (isset($_REQUEST['user'])) {
header("LOCATION:admin.php");
}else{
header("LOCATION:login.php");
}

 ?>