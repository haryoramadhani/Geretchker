<?php
session_start();
if ( !isset($_SESSION["login"])) {
	header("location: loginas.php");
	exit;
}

require'functions.php';


$no_undian = $_GET["no_undian"];
//query daa mahasiswa berdasarkan id
// array numerik harus di inputkan index arraynya juga
$mbl= query2("SELECT * FROM kupon WHERE no_undian = $no_undian")[0];



	if(isset($_POST["submit4"])) {
	


		//cek keberhasilan apakah data berhasil dimasukkan dan ada berpa baris yang terpengaruhi
		if(ubahkupon($_POST) > 0)
		{
			echo "
			<script>
			alert('data berhasil diubah');
			document.location.href = 'menukupon.php';
			</script>
			";
		}
		else
		{
			echo "
			<script>
			alert('data gagagl diubah');
			document.location.href = 'menukupon.php';
			</script>
			";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title> Ubah Data
		
	</title>
</head>
<body style="background-color: rgb(237, 236, 251);">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<form  action="" method="post" enctype="multipart/form-data">
	

	<form action="" method="post">
	
		<div class="card text-black bg-light mb-3 " style="max-width: 23rem;  margin-top:30px; margin-left: 500px;">
		<div class="card-header text-center"><h2 class="text center"><img src="svg/baseline-update-24px.svg" style="width: 11%; height: 11%;"> Ubah Data</h2></div>
			<div style="margin-left: 20px;" class="card-body">
				<label for="no_undian">no_undian :</label>
				<input style="width: 280px;" type="text" name="no_undian" id="no_undian" required value="<?= $mbl["no_undian"]; ?>">
                  	<br>

				<label for="tgl_undian">tgl_undian  :</label>
				<input style="width: 280px;" type="text" name="tgl_undian" id="tgl_undian" value="<?= $mbl["tgl_undian"]; ?>">

				<label for="jenis_hadiah">jenis_hadiah  :</label>
				<input style="width: 280px;" type="text" name="jenis_hadiah" id="jenis_hadiah" value="<?= $mbl["jenis_hadiah"]; ?>">

				<br><br>
				<button class="btn btn-secondary text-light" style="margin-left: 115px;" type="submit" name="submit4">submit</button>
			</div>
		</div>
	</form>

</body>
</html>