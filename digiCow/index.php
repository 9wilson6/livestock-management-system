<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigiCow | Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icon-fonts.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php require_once "header.php" ?>

    <header class="header">
        <div class="header__cont">
            <div class="row">
                <div class="col-sm-12 col-md-2 col-lg-2"></div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="header__logo-box">
                        <img src="assets/cow.png" alt="logo" class="header__logo">
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-2 col-lg-2"></div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="header__text-box">
                        <h1 class="heading-primary">
                            <span class="heading-primary--main">INTELLIGENT DAIRY FARMING</span>
                            <span class="heading-primary--sub">THROUGH INNOVATIVE TECHNOLOGY</span>
                        </h1>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2"></div>
            </div>
        </div>


    </header>
    <section class="LoginRegisterOptions">
    <div class="container">
        <div class="row LoginRegisterOptions__rows">
            <div class="col-sm-12 col-md-6 col-lg-6 mt-4"><a role="button" href="register.php" class=" LoginRegisterOptions__button">REGISTER</a></div>
             <div class="col-sm-12 col-md-6 col-lg-6 mt-4"><a role="button" href="login.php" class=" LoginRegisterOptions__button">LOGIN</a></div>
        </div>
    </div>
</section>
        <?php require_once "scripts.php" ?>
</body>

</html>