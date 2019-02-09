<?php 
define("HOST", "localhost");
define("DATABASE_NAME", "digicow");
define("PASSWORD", "");
define("USER", "root");

$conn= mysqli_connect(HOST, USER, PASSWORD, DATABASE_NAME) or die(mysqli_error());

 ?>