<!DOCTYPE html>
<?php
require 'functions.php';
	if(isset($_POST["register"])){
		if(registrasi($_POST) > 0){

			echo "<script>
					alert('akun baru berhasil ditambahkan');
					document.location.href = 'login.php';
				</script>";
				
		}
		else{
			echo mysqli_error($conn);
		}
	}
?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>hal regis</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body style="background-image: url('img/gamb.jpg');">
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<form style="background-image: url('img/gamb.jpg');" action="" method="post">
		<div  class="card text-black bg-light mb-3 " style="max-width: 30rem;  margin-top:35px; margin-left: 2px;">
		<div class="card-header text-center"><h2 class="text center">Registrasi</h2><a class="badge badge-pill badge-secondary" href="loginas.php">LoginAs</a></div>
		<div style="margin-left: 6px;" class="card-body">
			<label for="username">username :</label>
			<input style="border-left: none; border-top: none; border-bottom:grey 2px solid;" type="username" name="username" id="username">
		
			<label for="password">password :</label>
			<input style="border-left: none; border-top: none; border-bottom:grey 2px solid;" type="password" name="password" id="password">
		
			<label for="password2">konfirmasi password :</label>
			<input style="border-left: none; border-top: none; border-bottom:grey 2px solid; width: 260px; height: 40px;" type="password" name="password2">
			<br><br>
			<button class="btn btn-outline-secondary text-dark" style="margin-left: 80px;" type="submit" name="register">Registrasi</button>
	
	</div>
	</form>
</div>
	

</body>
</html>