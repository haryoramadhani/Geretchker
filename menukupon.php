<?php 
//buat ngecek udah login belum klau dah login bru bisa akses index.php
session_start();
require 'functions.php';
if ( !isset($_SESSION["login"])) {
	header("location: loginas.php");
	exit;
}

$kupon = query2("SELECT * FROM kupon");
 
 if(isset($_POST["cari2"]))
 {
 	$kupon = cari2($_POST["keyword2"]);
 }
 ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Halaman admin</title>
</head>				
<body style="background-color: rgb(237, 236, 251);">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="pos-f-t">
 
  <nav class="navbar navbar-dark bg-secondary">

        <div class="nav-item dropdown">
      <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <div class="navbar-toggler-icon"></div>
       
      </a>
      <div style="margin-top: -40px; margin-left: 440px;"><h1><img style="width: 45px; margin-top: -10px;" src="svg/baseline-person_outline-24px.svg"> Menu Kupon</h1></div>
      <div><form class="form-inline" style=" margin-top: -50px; margin-left: 910px;" action="" method="post">
		<input class="form-control mr-sm-2" type="text" name="keyword2" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword2">
		<button id="tombol-cari" class="btn btn-outline-light my-2 my-sm-0" type="submit" name="cari2"><img src="svg/baseline-search-24px.svg"/></button>
	</form></div>
      <div style="margin-left: -20px;" class="dropdown-menu bg-secondary text">
        <a style="margin-left: 2px;" class="dropdown-item text-light" href="INDEX.php"><img style="" src="svg/baseline-menu-24px.svg"/>Menu Mobil</a>
        <p style="margin-left: 30px;"><img src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"></p>
          <a style="margin-top: -20px;" class="dropdown-item text-light" href="tambahkupon.php"><img style="" src="svg/outline-add_box-24px.svg"/>Tambah Kupon</a>
        <p style="margin-left: 30px;"><img src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"></p>
        <a style="margin-top: -20px;" class="dropdown-item text-light" href="logout.php"><img style="" src="svg/baseline-settings_power-24px.svg"/>Logout</a>
        <p style="margin-left: 30px;"><img src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"></p>
      </div>
     </div>
  </nav>
  	<div id="container">
	<table style="margin-top:20px; margin-left: 180px;" border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>Aksi</th>
		<th>no_undian</th>
		<th>Tgl_undian</th>
		<th>Jenis_hadiah</th>

		
	</tr>
	
	<?php $i = 1; ?>
	<?php foreach ($kupon as $row) : ?>
	<tr>
		
		<td><a class="btn btn-primary" href="ubahkupon.php?no_undian=<?= $row["no_undian"]; ?>"><img src="svg/baseline-update-24px.svg"/>ubah</a> <a class="btn btn-danger" href="hapuskupon.php?no_undian=<?= $row["no_undian"]; ?>" onclick="return confirm('apakah anda yakin akan menghapus data tersebut?')"><img src="svg/baseline-delete_outline-24px.svg"/>hapus</a></td>
	
		<td><?= $row["no_undian"]; ?> </td>
		<td><?= $row["tgl_undian"]; ?></td>
		<td><?= $row["jenis_hadiah"]; ?></td>

		
	</tr>
	<?php $i++; ?>
  <?php endforeach;  ?>
</table>
</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>