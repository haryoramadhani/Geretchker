<?php

require'functions.php';

	if(isset($_POST["submit"])) {
		

		//cek keberhasilan apakah data berhasil dimasukkan dan ada berpa baris yang terpengaruhi
		if(tambah($_POST) > 0)
		{
			echo "
			<script>
			alert('data berhasil dimasukkan');
			document.location.href = 'INDEX.php';

			</script>
			";
		}
		else
		{
			echo "
			<script>
			alert('data gagagl dimasukkan');
			document.location.href = 'INDEX.php';

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
	<form  action="" method="post" enctype="multipart/form-data">
		<div class="card text-black bg-light mb-3 " style="max-width: 23rem;  margin-top:60px; margin-left: 480px;">
		<div class="card-header text-center"><h2 class="text center">tambah data</h2></div>
		<div style="margin-left: 20px;" class="card-body">
				<label for="merek">merek   :</label>
				<input style="width: 280px;" type="text" name="merek" id="merek" required>
			
				<label style="margin-top: 10px; margin-bottom: 10px;" for="tipe">tipe  :</label><br>
                 <select style="width: 92%; height: 35px; margin-bottom: 10px;" id="tipe" name="tipe">
                    <option style="" value="SUV">SUV</option>
                    <option value="HUV">HUV</option>      
                  </select>
                  	<br>
				
				<label for="seri">seri  :</label>
				<input style="width: 280px;" type="text" name="seri" id="seri">
			
				<label for="warna">warna:</label>
				<input style="width: 280px;" type="text" name="warna" id="warna">

				<label style="margin-top: 10px; margin-bottom: 10px;" for="jenismesin">jenis mesin :</label><br>
                 <select style="width: 92%; height: 35px; margin-bottom: 10px;" id="jenismesin" name="jenismesin">
                    <option style="" value="Diesel">Diesel</option>
                    <option value="Gasoline">Gasoline</option>       
                  </select>
                  	<br>
				<label for="harga">harga:</label>
				<input style="width: 280px;" type="text" name="harga" id="harga">

				<label for="jumlahstock">stock:</label>
				<input style="width: 280px;" type="tex;t" name="jumlahstock" id="jumlahstock">

				<label for="detail">detail :</label>
				<input style="width: 280px; height: 100px;" type="tex;t" name="detail" id="detail">
				<br>
				<label for="gambar">Upload:</label>
				<input type="file" name="gambar" id="gambar">
					
				<br>
				<br>
				<button class="btn btn-secondary text-light" style="margin-left: 115px;" type="submit" name="submit">Submit</button>
		</div>
		
			
			
		



	</div>
	</form>

</body>
</html>