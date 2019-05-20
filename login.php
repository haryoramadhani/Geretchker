<?php
session_start();
require 'functions.php';
//cek cookie
//buat buktiinnya klik sidebar sebelah kanan chrome terus pilih keluar
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	$result = mysqli_query($conn,"SELECT username FROM admin WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
	
}
if ( isset($_SESSION["login"])) {
	header("Location: INDEX.php");
	exit;
}

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
if (mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_assoc($result);
	if(password_verify($password, $row["password"])){
		$_SESSION["login"] = true;

		if (isset($_POST['remember'])) {
			setcookie('id', $row['id'], time()+60);
			setcookie('key', hash('sha256', $row['username']), time()+60);
		}
		header("Location: INDEX.php");
		exit;
	}
}
	$error = true;
}

?>
<!DOCTYPE html>
<html>
<head>
	  <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Halaman login</title>
</head>
<body style="background-image: url('img/martix.jpeg');">

	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	
<form action="" style="background-image: url('img/martix.jpeg');" method="post">
	<div  class="card text-black bg-light mb-3 " style="max-width: 30rem;  margin-top:30px;">
		<div class="card-header text-center"><h2 class="text center">Login</h2><br>
			<a class="badge badge-pill badge-secondary" href="registrasi.php">Daftar Akun</a><p><?php if( isset($error)): ?>
		<p style="color: red; font-style: italic;">username / password salah</p>
	<?php endif; ?></p></div>
		<div style="margin-left: 6px;" class="card-body">
			<label for="username">username :</label>
			<input style="border-left: none; border-top: none; border-bottom:grey 2px solid; " type="text" name="username" id="username">
		
			<label for="password">password :</label>
			<input style="border-left: none; border-top: none; border-bottom:grey 2px solid; " type="password" name="password" id="password">
			<br>
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember me</label>
				<br>

			<button class="btn btn-outline-secondary text-dark" style="margin-left: 100px;" type="submit" id="login" name="login">login</button>
	</div>
</div>

</form>
</body>
</html>