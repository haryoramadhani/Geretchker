<?php
session_start();
if ( !isset($_SESSION["login"])) {
	header("location: loginas.php");
	exit;
}
require 'functions.php';
$id_member = $_GET["id_member"];

		if( hapusmember($id_member) > 0)
		{
			echo "
			<script>
			alert('data berhasil dihapus');
			document.location.href = 'menumember.php';

			</script>
			";
		}
		else
		{
			echo "
			<script>
			alert('data gagal dihapus');
			document.location.href = 'menumember.php';

			</script>
			";
		}

?>