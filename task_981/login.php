<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
</head>
<body>

<div class="header">
	<?php include 'header.php' ?>
</div>

<div class="container pt-5 mt-5">
	<div class="row justify-content-center text-center">
		<div class="col-4 mt-5 pt-5">
			<h6>Try the product out for free.</h6>
			<div class="form-group">
				<label for="exampleInputEmail1"></label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
				<label for="exampleInputEmail1"></label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
				<label for="exampleInputEmail1"></label>
				<button type="submit" class="btn btn-dark col-12">Start free trial</button>
			</div>
		</div>
	</div>
</div>

<div class="footer w-100" style="position: absolute; bottom: 0; left: 0">
	<?php include 'footer.php' ?>
</div>

</body>
</html>