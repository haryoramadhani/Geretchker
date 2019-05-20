<?php

require'functions.php';

	if(isset($_POST["submit5"])) {
		

		//cek keberhasilan apakah data berhasil dimasukkan dan ada berpa baris yang terpengaruhi
		if( tambahtestdrive($_POST) > 0)
		{
			echo "
			<script>
			alert('data berhasil dimasukkan');
			document.location.href = 'menutestdrive.php';

			</script>
			";
		}
		else
		{
			echo "
			<script>
			alert('data gagagl dimasukkan');
			document.location.href = 'menutestdrive.php';

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
	<title> Tambah Data
		
	</title>
</head>
<body style="background-color: rgb(237, 236, 251);">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<form action="" method="post">
		<div class="card text-black bg-light mb-3 " style="max-width: 23rem;  margin-top:60px; margin-left: 480px;">
		<div class="card-header text-center"><h2 class="text center">tambah data</h2></div>
		<div style="margin-left: 20px;" class="card-body">
				<label for="waktu_test">waktu_test :</label>
				<input style="width: 280px;" type="text" name="waktu_test" id="waktu_test" required>
                 <br>
				
				<label for="no_test">no_test :</label>
				<input style="width: 280px;" type="text" name="no_test" id="no_test">
			
				<label for="tgl_test">tgl_test:</label>
				<input style="width: 280px;" type="text" name="tgl_test" id="tgl_test">

				<label for="keterangan">keterangan:</label>
				<input style="width: 280px;" type="text" name="keterangan" id="keterangan">
					
				<br>
				<br>
				<button class="btn btn-secondary text-light" style="margin-left: 115px;" type="submit" name="submit5">Submit</button>
		</div>
		
			

	</div>
	</form>

</body>
</html>