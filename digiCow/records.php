<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigiCow | Records</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icon-fonts.css">
    <link rel="stylesheet" href="css/icon-fonts.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<?php require_once "homeheader.php" ?>

<body>
<section class="section_dashboard">
	<div class="container">
		<div class="section_dashboard__bordertop"></div>
		<div class="row">
			
			<div class=" col-sm-4 col-md-4 col-lg-4"><button class="btn-warning  btn-block section_dashboard__button" id="milk">Milk</button></div>
			<div class=" col-sm-4 col-md-4 col-lg-4"><button class="btn-success  btn-block section_dashboard__button" id="health">Health</button></div>
			<div class=" col-sm-4 col-md-4 col-lg-4"><button class="btn-info btn-block  section_dashboard__button" id="breeding">Breeding</button></div>
			
			<div class=" col-sm-1 col-md-1 col-lg-1"></div>
		</div>
		<div class="section_dashboard__borderbottom"></div>
	</div>

</section>
<?php   require_once "scripts.php" ?>
</body>
</html>