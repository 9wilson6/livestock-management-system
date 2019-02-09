<?php 
if(isset($_POST['submit'])) {
	$error="";
	require_once('dbconfig.php');
$username=mysqli_real_escape_string($conn, $_POST['username']);
$password=mysqli_real_escape_string($conn, $_POST['password']);
$password=hash('sha256', $password);
$query="SELECT * FROM admin WHERE username='$username'";
$results=mysqli_query($conn,$query);

if (mysqli_num_rows($results)>0) {
	foreach ($results as $result) {
		$passworddb=$result['password'];

	}
	if ($passworddb==$password) {
		session_start();
		$_SESSION['user']="admin";
		header("LOCATION:adminHome.php");
	}else{

		$error="invalid username/password";
	}
}else{
	$error="invalid username/password";
}

}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigiCow | Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icon-fonts.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<section class="section-form">
    <div class="mycontainer px-5">
        <div class="myform px-5 mx-5">
			<h1 class="heading--primary text-danger">Admin</h1>
			<form method="POST" action="admin.php">
				<?php if (!empty($error)) {?>
					<div class="form-group mb-5">
						<div class="bg-danger text-light admin__form text-center">
							<?php echo($error) ?>
						</div>
					</div>
				<?php } ?>
    <div class="form-group mb-5 px-5 mx-5">
      <input type="text" class="form-control control-lg" name="username" placeholder="username">
    </div>
    <div class="form-group mb-5 px-5 mx-5">
      <input type="password" class="form-control control-lg" name="password" placeholder="password">
    </div>
    <div class="form-group mb-5 px-5 mx-5">
      <button name="submit" class="btn btn-block myLargeButtons btn-info ">Submit</button>
    </div>
  
</form>
		</div>
	</div>


</section>
</body>
</html>