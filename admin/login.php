<html>
<head> <title> Login Admin </title> </head>
<body>

<link rel="stylesheet" type="text/css" href="css/login.css" />
<div class="container">

	<form action="verify_user.php" method="post" class="form-signin">
		<h1 class="form-signin-heading text-muted">Sign In Admin</h1>
		<input type="text" class="form-control" name="u_name" id="u_name" placeholder="Username" required="" autofocus="">
		<input type="password" class="form-control" name="pass" id="pass"placeholder="Password" required=""> </br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">
			Sign In </button>
	</form>

</div>
</body>
</html>