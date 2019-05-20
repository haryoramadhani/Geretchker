<?php
session_start();
if ( !isset($_SESSION["login"])) {
	header("location: loginas.php");
	exit;
}
require 'functions.php';
$no_test = $_GET["no_test"];

		if( hapustestdrive($no_test) > 0)
		{
			echo "
			<script>
			alert('data berhasil dihapus');
			document.location.href = 'menutestdrive.php';

			</script>
			";
		}
		else
		{
			echo "
			<script>
			alert('data gagal dihapus');
			document.location.href = 'menutestdrive.php';

			</script>
			";
		}

?>