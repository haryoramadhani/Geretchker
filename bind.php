<?php 
session_start();
require 'functions.php';
require 'item.php';



$tanggal = date("Y-m-d");
$sql1 = "INSERT INTO `order` (`id`, `order`, `datecreation`, `status`, `nama`) VALUES ('', 'bind','$tanggal', '1', 'admin')";
mysqli_query($conn, $sql1);
$ordersid = mysqli_insert_id($conn); 
$cart = unserialize(serialize($_SESSION['cart'])); 
for($i=0; $i<count($cart); $i++) {
$sql2 = 'INSERT INTO orderdetail (idmobil, idorder, harga, jumlahstock) VALUES ('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->harga.', '.$cart[$i]->jumlahstock.')';
mysqli_query($conn, $sql2);
}
unset($_SESSION['cart']);
 ?>
 Thanks for buying products. Click <a href="index2.php">here</a> to continue purchasing products.