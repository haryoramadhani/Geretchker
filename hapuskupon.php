<?php
session_start();
if ( !isset($_SESSION["login"])) {
	header("location: loginas.php");
	exit;
}
require 'functions.php';
$no_undian = $_GET["no_undian"];

		if( hapuskupon($no_undian) > 0)
		{
			echo "
			<script>
			alert('data berhasil dihapus');
			document.location.href = 'menukupon.php';

			</script>
			";
		}
		else
		{
			echo "
			<script>
			alert('data gagal dihapus');
			document.location.href = 'menukupon.php';

			</script>
			";
		}

?>