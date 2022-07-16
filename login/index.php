<?php

session_start();

include '../koneksi.php';

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT username FROM petugas WHERE username = '$username' AND password = '$password'";
	$hasil = mysqli_query($koneksi, $query);
	$cek = mysqli_affected_rows($koneksi);

	if($cek == 1)
	{
		$_SESSION['login'] = "logged in";
		header("Location: http://localhost/sarpra/index.php");
	}
	else
	{
		echo "Username atau Password salah";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="http://localhost/sarpra/css/style-login.css">
	<!-- <link rel="stylesheet" href="http://localhost/sarpra/css/login.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="pagewrap-overlay"></div>
	<div class="login-form">
		<h1>Login</h1>
		<form action="" method="post">	
			<div class="form-group">
			<i class="fas fa-user"></i>
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
			<i class="fas fa-lock"></i>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>		
			<div class="form-group">
				<input type="submit" name="login" value="Login" class="btn-login">
			</div>
		</form>
	</div>
</body>
</html>
         