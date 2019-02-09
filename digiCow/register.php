<?php 
$x=1;
require_once("registerScript.php") ?>
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

        <form action="register.php" class="form" method="post" autocomplete="off">
            <div class="heading--primary">Register</div>
                        <?php if (!empty($error)) {?><div class="form-group mb-5"> <div class="form__input text-light bg-warning mb-5">
                           <?php echo($error) ?>
                        </div></div><?php } ?>
                         <?php if (!empty($msg)) {?><div class="form-group mb-5"> <div class="form__input text-light bg-warning mb-5">
                           <?php echo($msg) ?>
                        </div></div><?php } ?>
             
            <div class="form-group mb-5">
                <input type="text" class="form-control control-lg" name="username" required min="4" placeholder="username" id="username">
                <!-- <label for="username  " class="form__label">Username</label> -->
            </div>
            <div class="form-group mb-5">
                <input type="email" name="email" class="form-control control-lg" required min="4" placeholder="email" id="email">
                <!-- <label for="email" class="form__label">Email</label> -->
            </div>
            <div class="form-group mb-5">
                <input type="password" name="password" class="form-control control-lg"  placeholder="password" required min="7" id="password">
                <!-- <label for="password  " class="form__label">Password</label> -->
            </div>
            <div class="form-group mb-5">
                <input type="submit" name="submit" class="btn btn-block myLargeButtons btn-info" value="submit">
            </div>
        </form>



        </div>
    </div>

    </section>
