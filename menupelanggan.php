<?php
require 'functions.php';

$mobil = query("SELECT * FROM mobil");

 if(isset($_POST["cari"]))
 {
 	$mobil = cari($_POST["keyword"]);
 }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Halaman pelanggan</title>
</head>				
<body style="background-color: rgb(237, 236, 251);">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="pos-f-t">
 
  <nav class="navbar navbar-dark bg-secondary">

        <div class="nav-item dropdown" wid>
      <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <div class="navbar-toggler-icon"></div>
       
      </a>
      <div style="margin-top: -40px; margin-left: 440px;"><h1><img style="width: 45px; margin-top: -10px;" src="svg/baseline-person_outline-24px.svg"> Halaman Pelanggan</h1></div>
      <div><form class="form-inline" style=" margin-top: -50px; margin-left: 910px;" action="" method="post">
		<input class="form-control mr-sm-2" type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
		<button id="tombol-cari" class="btn btn-outline-light my-2 my-sm-0" type="submit" name="cari"><img src="svg/baseline-search-24px.svg"/></button>
	</form></div>
      <div style="margin-left: -20px; " class="dropdown-menu bg-secondary text">
         <p style="margin-left: 30px;"><img src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"></p>
        <a style="margin-top: -20px;" class="dropdown-item text-light" href="index2.php"><img style="" src="svg/baseline-shopping_cart-24px.svg"/>Belanja</a>
        <p style="margin-left: 30px;"><img src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"></p>
        
        <a style="margin-top: -20px;" class="dropdown-item text-light" href="index2.php"><img style="" src="svg/baseline-exit_to_app-24px.svg"/>Login As</a>
        <p style="margin-left: 30px;"><img src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"><img style="margin-left: -6px;" src="svg/baseline-more_horiz-24px.svg"></p>
      </div>
     </div>

  </nav>
  	<div id="container">
	<table style="margin-top:20px; margin-left: 180px;" border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Detail</th>
		<th>gambar</th>
		<th>merek</th>
		<th>tipe</th>
		<th>seri</th>
		<th>warna</th>
		<th>jenis mesin</th>
		<th>harga</th>
		<th>jumlah stock</th>
		
		
	</tr>
	
	<?php $i = 1; ?>

	<?php foreach ($mobil as $row) : ?>
		
	<tr>
		<td><?php echo $i; ?></td>
		<td><a class="btn btn-secondary" href="detail1.php?id=<?= $row["id"]; ?>">Detail</a></td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="120"></td>
		<td><?= $row["merek"]; ?> </td>
		<td><?= $row["tipe"]; ?></td>
		<td><?= $row["seri"] ?></td>
		<td><?= $row["warna"]; ?></td>
		<td><?= $row["jenismesin"]; ?></td>
		<td><?= $row["harga"]; ?></td>
		<td><?= $row["jumlahstock"]; ?></td>

		
			<?php $i++; ?>
  <?php endforeach;  ?>
	</tr>


	
</table>
</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>