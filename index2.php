<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color: rgb(237, 236, 251);">

<?php 
require 'functions.php';
//List product dari database
$sql = 'SELECT * FROM mobil';
$result = mysqli_query($conn, $sql);
 ?>
<h2 style="color: black;"> Pilih mobil : </h2>
<div style="margin-left: 1300px; margin-top: -60px;">
<a style="color: black;" href="menupelanggan.php"><img src="svg/baseline-home-24px.svg"><p style="margin-left: 20px; margin-top: -25px;">home</p></a>
</div>
 <table id="t01">
 <tr>
    <th>Id</th>
    <th>Nama Mobil</th>
    <th>Harga</th>
    <th>Quantity (in stock)</th>
    <th>Buy</th>
 </tr>
    <?php while($product = mysqli_fetch_object($result)) { ?> 
    <tr>
        <td> <?php echo $product->id; ?> </td>
        <td> <?php echo $product->merek; ?> </td>
        <td> Rp.<?php echo $product->harga; ?> </td>
        <td> <?php echo $product->jumlahstock; ?> </td>
        <td> <a href="cart.php?id= <?php echo $product->id; ?> &action=add">Order Now</a></td>
    </tr>
    <?php } ?>
 </table>
</body>

 </html>