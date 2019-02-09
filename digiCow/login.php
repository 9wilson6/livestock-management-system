<?php
$error="";
if (isset($_POST['submit'])) {
 require_once "dbconfig.php";
 if (empty($_POST['username']) || empty($_POST['password'])) {
  $error="All fields must be set";
 }else{
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password=hash( 'sha256', mysqli_real_escape_string($conn, $_POST['password']) );
$query="SELECT * FROM farmer WHERE username='$username'";
$results=mysqli_query($conn, $query) or die(mysqli_error($conn));

if (mysqli_num_rows($results)>0) {

  foreach ($results as $result ) {
    $dbusername=$result['username'];
    $dbpassword=$result['password'];
    if ($password==$dbpassword && $username==$dbusername) {
     session_start();
     $id=$result['id'];
     $_SESSION['id']=$id;
     $_SESSION['username']=$username;
     header("LOCATION:dashboard.php");
    }else{
  $error="invalid credentials";
}
  }
}else{
  $error="invalid credentials";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DigiCow | Register</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/icon-fonts.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <?php require_once "header.php" ?>

<section class="section-form">

    <div class="mycontainer">
  <div class="myform">
    <form action="login.php" class="form" method="post" autocomplete="off">
      <div class="heading--primary">Login</div>
         
      <?php if (!empty($error)) {?>
        <div class="form-group mb-5">
      
        <div class="bg-danger text-light text-center text-uppercase"> <?php echo($error) ?></div>
         


       </div>
      <?php } ?>
      
      <div class="form-group mb-5">
        <input type="text" class="form-control control-lg " name="username" placeholder="username" id="username">
        
      </div>
      <div class="form-group mb-5">
        <input type="password" name="password" class="form-control control-lg "  placeholder="Password" id="password">
       
      </div>
      <div class="form-group mb-5">
        <input type="submit" name="submit" class="btn btn-block myLargeButtons btn-info" value="submit">

      </div>

    </form>

</div>
</div>
</section>
</body>
</html>

    <?php require_once "scripts.php" ?>