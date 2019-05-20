<?php
session_start();
//menimpa superglobal dengan array kosong
$_SESSION = [];
session_unset();
session_destroy();
header("Location: loginas.php");
exit();


?>