<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigiCow | Dashboard</title>
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
			<div class=" col-sm-1 col-md-1 col-lg-1"></div>
			<div class=" col-sm-2 col-md-2 col-lg-2"><button class="btn-warning  btn-block section_dashboard__button" id="cattle">CATTLE</button></div>
			<div class=" col-sm-2 col-md-2 col-lg-2"><button class="btn-success  btn-block section_dashboard__button" id="records">RECORDS</button></div>
			<div class=" col-sm-2 col-md-2 col-lg-2"><button class="btn-info btn-block  section_dashboard__button" id="invetory">FEED</button></div>
			<div class=" col-sm-2 col-md-2 col-lg-2"><button class="btn-secondary  btn-block section_dashboard__button" id="forum">FORUM</button></div>
			<div class=" col-sm-2 col-md-2 col-lg-2"><button class="btn-danger  btn-block section_dashboard__button" id="report"> <i class="fa fa-tasks  clearfix text-danger float-right"></i>REPORT</button></div>
			<div class=" col-sm-1 col-md-1 col-lg-1"></div>
		</div>
		<div class="section_dashboard__borderbottom"></div>
	</div>

</section>
<?php   require_once "scripts.php" ?>
</body>
</html>