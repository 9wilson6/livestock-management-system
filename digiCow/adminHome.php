<?php 
$tittle="ADMIN DASHBOARD";
$x=0;
require_once("adminheaderlinks.php");
 require_once("registerScript.php");
 ?>

<body>
<div class="pagecontainer">
	<div class="container">
	<div class="container__buttons  bg-transparent mt-5">
		<a href="adminHome.php" class="btn btn-info container__navbuttons ">Add Farmer</a>
		<a href="manageUsers.php" class="btn btn-info container__navbuttons ">Manage Farmers</a>
        <a href="logout.php?user=admin" class="btn btn-lg btn-danger btn-sm float-right"> Logout</a>
	<!-- 	<button class="btn btn-light container__navbuttons ">.....</button>
		<button class="btn btn-light container__navbuttons ">.....</button> -->
	</div>

		      <div class="row">
       
            <div class="col-md-1 col-lg-2"></div>

            <div class="col-md-10 col-lg-8 form__container">
                 

                <div class="form__group">
                <div class="heading--primary">Register Farmer</div>
                 <!-- <div class="my-5"></div> -->
                </div>
<div class="form_padding">
                    <form action="adminHome.php" method="post" autocomplete="off">
            
                        <?php if (!empty($error)) {?><div class="form__group"> <div class="form__input text-light bg-warning mb-5">
                           <?php echo($error) ?>
                        </div></div><?php } ?>
                         <?php if (!empty($msg)) {?><div class="form__group"> <div class="form__input text-light bg-warning mb-5">
                           <?php echo($msg) ?>
                        </div></div><?php } ?>
             
            <div class="form-group mb-5">
                <input type="text" class="form-control control-lg" name="username" required min="4" placeholder="username" id="username">
                <!-- <label for="username  " class="form-control control-lg">Username</label> -->
            </div>
            <div class="form-group mb-5">
                <input type="email" name="email" class="form-control control-lg" required min="4" placeholder="email" id="email">
                <!-- <label for="email" class="form__label text-left">Email</label> -->
            </div>
            <div class="form-group mb-5">
                <input type="password" name="password" class="form-control control-lg"  placeholder="password" required min="7" id="password">
                <!-- <label for="password" class="form-control control-lg">Password</label> -->
            </div>
            <div class="form-group mb-5">
                <input type="submit" name="submit" class="btn btn-block myLargeButtons btn-info" value="submit">
            </div>
        </form>
</div>
        <div class="my-5"></div>
            </div>
            <div class="col-md-1 col-lg-2"></div>
        </div>
</div>
</div>
</body>

</html>