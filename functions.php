<?php
$conn = mysqli_connect("localhost", "root", "","geretchker");

$result = mysqli_query($conn, "SELECT * FROM mobil");
$result1 =mysqli_query($conn, "SELECT * FROM member");
$result2 =mysqli_query($conn, "SELECT * FROM kupon");
$result3 =mysqli_query($conn, "SELECT * FROM test_drive");
function query3($query3)
{
	global $conn;
	$result3 = mysqli_query($conn, $query3);
	$rows = [];
	while($row = mysqli_fetch_assoc($result3))
	{
		$rows[] = $row;
	}
	return $rows;
}
function cari1($keyword1){
	$query1 ="SELECT * FROM member 
				WHERE 
			id_member LIKE '%$keyword1%' OR
			tgl_pendaftaran LIKE '%$keyword1%' OR 
			tgl_kadaluarsa LIKE '%$keyword1%'
			";

	return query1($query1);


}
function cari2($keyword2){
	$query2 ="SELECT * FROM kupon 
				WHERE 
			no_undian LIKE '%$keyword2%' OR
			tgl_undian LIKE '%$keyword2%' OR 
			jenis_hadiah LIKE '%$keyword2%'
			";

	return query2($query2);


}
function cari3($keyword3){
	$query3 ="SELECT * FROM test_drive 
				WHERE 
			waktu_test LIKE '%$keyword3%' OR
			no_test LIKE '%$keyword3%' OR 
			tgl_test LIKE '%$keyword3%' OR 
			keterangan LIKE '%$keyword3%'
			";

	return query3($query3);


}
function tambahtestdrive($data3)
{
	global $conn;
	//diubah $_POST menjadi $data
	// htmlspecialchar untuk mencegah user menginput inputan tag html atau yang lain
		$waktu_test = htmlspecialchars($data3["waktu_test"]);
		$no_test = htmlspecialchars($data3["no_test"]);
		$tgl_test = htmlspecialchars($data3["tgl_test"]);
		$keterangan = htmlspecialchars($data3["keterangan"]);

				$query3 = "INSERT INTO test_drive
					VALUES
					('$waktu_test','$no_test','$tgl_test','$keterangan')";
					mysqli_query($conn, $query3);
					return mysqli_affected_rows($conn);

}
function hapustestdrive($no_test)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM test_drive WHERE no_test = $no_test");
	return mysqli_affected_rows($conn);
}
function ubahtestdrive($data3)
{
	global $conn;
	//diubah $_POST menjadi $data
	// htmlspecialchar untuk mencegah user menginput inputan tag html atau yang lain
		$waktu_test = htmlspecialchars($data3["waktu_test"]);
		$no_test = htmlspecialchars($data3["no_test"]);
		$tgl_test = htmlspecialchars($data3["tgl_test"]);
		$keterangan = htmlspecialchars($data3["keterangan"]);

		$query3 = "UPDATE test_drive SET 
							waktu_test = '$waktu_test',
							no_test = '$no_test',
							tgl_test = '$tgl_test'
							WHERE no_test = $no_test
				 
				";
					
					mysqli_query($conn, $query3);
					return mysqli_affected_rows($conn);
}



function query2($query2)
{
	global $conn;
	$result2 = mysqli_query($conn, $query2);
	$rows = [];
	while($row = mysqli_fetch_assoc($result2))
	{
		$rows[] = $row;
	}
	return $rows;
}
function ubahkupon($data2)
{
	global $conn;
	//diubah $_POST menjadi $data
	// htmlspecialchar untuk mencegah user menginput inputan tag html atau yang lain
		$no_undian = htmlspecialchars($data2["no_undian"]);
		$tgl_undian = htmlspecialchars($data2["tgl_undian"]);
		$jenis_hadiah = htmlspecialchars($data2["jenis_hadiah"]);
		

		$query2 = "UPDATE kupon SET 
							no_undian = '$no_undian',
							tgl_undian = '$tgl_undian',
							jenis_hadiah = '$jenis_hadiah'
							WHERE no_undian = $no_undian
				 
				";
					
					mysqli_query($conn, $query2);
					return mysqli_affected_rows($conn);
}
function tambahkupon($data2)
{
	global $conn;
	//diubah $_POST menjadi $data
	// htmlspecialchar untuk mencegah user menginput inputan tag html atau yang lain
		$no_undian = htmlspecialchars($data2["no_undian"]);
		$tgl_undian = htmlspecialchars($data2["tgl_undian"]);
		$jenis_hadiah = htmlspecialchars($data2["jenis_hadiah"]);


				$query2 = "INSERT INTO kupon
					VALUES
					('$no_undian','$tgl_undian','$jenis_hadiah')";
					mysqli_query($conn, $query2);
					return mysqli_affected_rows($conn);

}

function query1($query1)
{
	global $conn;
	$result1 = mysqli_query($conn, $query1);
	$rows = [];
	while($row = mysqli_fetch_assoc($result1))
	{
		$rows[] = $row;
	}
	return $rows;
}

function tambahmember($data1)
{
	global $conn;
	//diubah $_POST menjadi $data
	// htmlspecialchar untuk mencegah user menginput inputan tag html atau yang lain
		$id_member = htmlspecialchars($data1["id_member"]);
		$tgl_pendaftaran = htmlspecialchars($data1["tgl_pendaftaran"]);
		$tgl_kadaluarsa = htmlspecialchars($data1["tgl_kadaluarsa"]);


				$query1 = "INSERT INTO member
					VALUES
					('$id_member','$tgl_pendaftaran','$tgl_kadaluarsa')";
					mysqli_query($conn, $query1);
					return mysqli_affected_rows($conn);

}
function hapuskupon($no_undian)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM kupon WHERE no_undian = $no_undian");
	return mysqli_affected_rows($conn);
}
function hapusmember($id_member)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM member WHERE id_member = $id_member");
	return mysqli_affected_rows($conn);
}
function ubahmember($data1)
{
	global $conn;
	//diubah $_POST menjadi $data
	// htmlspecialchar untuk mencegah user menginput inputan tag html atau yang lain
		$id_member = htmlspecialchars($data1["id_member"]);
		$tgl_pendaftaran = htmlspecialchars($data1["tgl_pendaftaran"]);
		$tgl_kadaluarsa = htmlspecialchars($data1["tgl_kadaluarsa"]);
		

		$query1 = "UPDATE member SET 
							id_member = '$id_member',
							tgl_pendaftaran = '$tgl_pendaftaran',
							tgl_kadaluarsa = '$tgl_kadaluarsa'
							WHERE id_member = $id_member
				 
				";
					
					mysqli_query($conn, $query1);
					return mysqli_affected_rows($conn);
}


function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) 
	{
		$rows[] = $row;
	}
	return $rows;
}
function tambah($data)
{
	global $conn;
	//diubah $_POST menjadi $data
	// htmlspecialchar untuk mencegah user menginput inputan tag html atau yang lain
		$merek = htmlspecialchars($data["merek"]);
		$id_member = htmlspecialchars($data["tipe"]);
		$seri = htmlspecialchars($data["seri"]);
		$warna = htmlspecialchars($data["warna"]);
		$jenismesin = htmlspecialchars($data["jenismesin"]);
		$harga = htmlspecialchars($data["harga"]);
		$jumlahstock = htmlspecialchars($data["jumlahstock"]);
		$detail = htmlspecialchars($data["detail"]);

		$gambar = upload();
		if( !$gambar ) {
			return true;
		}

				$query = "INSERT INTO mobil
					VALUES
					('','$merek','$tipe','$seri','$warna','$jenismesin','$harga','$jumlahstock','$detail','$gambar')

					";
					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);

}
function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mobil WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function ubah($data)
{
	global $conn;
	//diubah $_POST menjadi $data
	// htmlspecialchar untuk mencegah user menginput inputan tag html atau yang lain
		$id = $data["id"];
		$merek = htmlspecialchars($data["merek"]);
		$tipe = htmlspecialchars($data["tipe"]);
		$seri = htmlspecialchars($data["seri"]);
		$warna = htmlspecialchars($data["warna"]);
		$jenismesin = htmlspecialchars($data["jenismesin"]);
		$harga = htmlspecialchars($data["harga"]);
		$jumlahstock = htmlspecialchars($data["jumlahstock"]);
		$detail = htmlspecialchars($data["detail"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		
		if ($_FILES['gambar']['error'] === 4) {
			$gambar = $gambarLama;
		}
		else{
			$gambar = upload();
		}
		
		$query = "UPDATE mobil SET 
							merek = '$merek',
							tipe = '$tipe',
							seri = '$seri',
							warna = '$warna',
							jenismesin = '$jenismesin',
							harga = '$harga',
							jumlahstock = '$jumlahstock',
							detail = '$detail',
							gambar = '$gambar'
							WHERE id = $id
				 
				";
					
					mysqli_query($conn, $query);
					return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query ="SELECT * FROM mobil 
				WHERE 
			tipe LIKE '%$keyword%' OR
			merek LIKE '%$keyword%' OR 
			seri LIKE '%$keyword%' OR 
			warna LIKE '%$keyword%' OR
			jenismesin LIKE '%$keyword%' OR
			harga LIKE '%$keyword%' OR
			jumlahstock LIKE '%$keyword%'
			";

	return query($query);


}
function upload(){
	$tipeFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tdk ada gmbar yang diupload
	// 4 merupakan tidak ada gambar yng di upload
	if( $error === 4)
	{
		echo "<script>
				alert'('pilih gambar terlebih dahulu');
			  </script>";
		return true;
	}
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	//explode('delimiter','$tipefile') buat memecah string nya jadi array

	$ekstensiGambar = explode('.',$tipeFile);
	//end buat ngambil element akhir array dari ekstensiGambar
	// contoh['anang','jpg'] maka yang diambil adalah formatnya yaitu jpg
	//strtolower biar ekstensinya yang di upload jadi huruf non kapital semua
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('yang anda upload bukan gambar');
			  </script>";
		return false;
	}
	//untuk cek ukurannya terlalu besar
	if( $ukuranFile > 4000000)
	{
		echo "<script>
			alert('ukuran gambar terlalu besar');
			 </script>";
		return false;

	}

	//cara menghindari agar file tidak tereplace oleh user lain jika userr tersebut memiliki tipe file yang sama ketika mengupload
	//generate tipe baru dengan uniqid agar membangkitkan bilangan atau huruf random
	$tipeFileBaru = uniqid();
	$tipeFileBaru .= '.';
	$tipeFileBaru .= $ekstensiGambar;

	//lolos pengecekkan siap upload
	move_uploaded_file($tmpName, 'img/' . $tipeFileBaru);
	return $tipeFileBaru;
}
{
	function registrasi($data){
		global $conn;

		$username = strtolower(stripslashes($data["username"]));
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$password2 = mysqli_real_escape_string($conn, $data["password2"]);

		$result = mysqli_query($conn,"SELECT username FROM admin WHERE username = '$username'");
		if( mysqli_fetch_assoc($result)){
			echo "<script>
					alert('username sudah terdaftar');
					</script>";
					return false;
		}
		//cek konfir password
		if( $password !== $password2 ){
			echo "<script>
					alert('user baru tidak sesuai');
				 </script>";
				 return false;
		}
		//encrypt passw
		$password = password_hash($password, PASSWORD_DEFAULT);

		mysqli_query($conn,"INSERT INTO admin VALUES ('','$username','$password')");

		return mysqli_affected_rows($conn);

	}
}

?>