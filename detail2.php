<?php
require 'functions.php';
$mobil = query("SELECT * FROM mobil WHERE id=5");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body style="background-color: rgb(237, 236, 251);">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="row">
  <div class="col-8">
    <h2 style="margin-top: 30px; margin-left: 30px; font-weight: bold;">Spesifikasi</h2>
    <div style=" background-color: white; margin-top: 20px;  margin-left: 30px;" class="card-body">
    	<?php $i = 1; ?>
		<?php foreach ($mobil as $row) : ?>
		<h2><?= $row["detail"]; ?> </h2>

	<?php $i++; ?>
  <?php endforeach;  ?>
</div>
</div>
<div class="col">
	<div style="margin-top: 2px; margin-left: 330px;">
	<a style="color: black; " href="menupelanggan.php"><img src="svg/baseline-home-24px.svg">kembali</a>
	</div>
	 <div style="background-image: url('img/mecha2.jpg'); margin-top: 80px; width: 72%;  margin-left: 30px;" class="card-body">

	<img src="img/alfa1.jpg">
	</div>
</div>
</div>
<div class="row">
	<div class="col-4">
	 <div style="background-image: url('img/mecha2.jpg'); margin-top: 20px; width: 90%;  margin-left: 30px;" class="card-body">

	<img style="width: 100%; height: 180px;" src="img/bagasialfa.jpg">
	


</div>
</div>
<div class="col-4">
	 <div style="background-image: url('img/mecha2.jpg'); margin-top: 20px; margin-left: 0px; width: 90%;" class="card-body">

	<img style="width: 100%; height: 180px;" src="img/interioralfa.jpg">
	</div>
</div>

</body>
</html>

