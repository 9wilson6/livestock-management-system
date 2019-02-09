<?php
$error=""; 
$msg="";
if (isset($_POST['submit'])) {
 require_once "dbconfig.php";
 $username = mysqli_real_escape_string($conn, $_POST['username']);
 $email=mysqli_real_escape_string($conn, $_POST['email']);
 $password=hash( 'sha256', mysqli_real_escape_string($conn, $_POST['password']) );
 $query="SELECT * FROM farmer WHERE username='$username' OR email='$email' ";
$results=mysqli_query($conn, $query);
if(mysqli_num_rows($results)>0){
    foreach($results as $result){
        $dbusername=$result['username'];
        $dbemail=$result['email'];
        if($dbemail==$email){
            $error="email already taken";
        }elseif($dbusername==$username){
            $error="username already taken";
        }
    }
}
  if (empty($error)) {
   if (empty($username) || empty($email) || empty($password)) {
    $error="All fields MUST be filled in";
  }else{
$query="INSERT INTO farmer(username, email, password) VALUES('$username','$email','$password')";
$results=mysqli_query($conn, $query);
if ($results==1 & $x==1) {
	$msg="User ". $username." Was registered successfully";
header("Refresh:1; url=login.php");
}
  }
  }

}
?>