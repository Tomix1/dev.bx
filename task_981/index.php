<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
</head>
<body>

<?php include 'header.php'; ?>
<div class="banner d-flex align-items-center justify-content-center">
	<div class="banner-overlay"></div>
	<div class="banner-content">
		<h3>Value Proposition</h3>
		<p id="text_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
			labore et dolore magna aliqua.</p>
		<button type="button" class="btn btn-lg btn-warning col-6 mt-4">Start free trial</button>
	</div>
</div>

<div class="container d-flex text-center">
	<div class="col">
		<h4>Your Best Value Proposition</h4>
		<p id="text_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
			labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
	</div>
</div>
<div class="container">
	<?php include 'moto.php'; ?>
	<div class="space"></div>
</div>
<div class="container">
	<div class="row justify-content-center align-items-center text-left d-flex d-none">
		<div class="col-sm-5">
			<h5>Feature that is amazing</h5>
			<p id="text_3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
				ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
				eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
				adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="col-sm-5">
			<img src="img/moto_4.jpg" alt="moto_4" class="rounded">
		</div>
	</div>
</div>

<div class="space"></div>
<div class="social_block">
	<?php include 'social_block.php'; ?>
</div>
<div class="footer">
	<?php include 'footer.php' ?>
</div>

</body>
</html>