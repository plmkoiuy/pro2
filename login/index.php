<html>
<head>
	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1>Login</h1>
			<form action="checklogin.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="username" class="form-control"
					name="username" id="username" placeholder="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control"
					name="password" id="password" placeholder="password">
				</div>
				<input type="submit" value="Login"
				class="btn btn-primary">
				<input type="submit" value="register"
				class="btn btn-primary">
			</form>
		</div>
		<div class="col-md-3"></div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>