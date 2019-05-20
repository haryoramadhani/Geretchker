<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color: rgb(237, 236, 251);">
<?php 
// Mulai sesi
session_start();
require 'functions.php';
require 'item.php';

if(isset($_GET['id']) && !isset($_POST['update']))  { 
    $sql = "SELECT * FROM mobil WHERE id=".$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_object($result); 
    $item = new Item();
    $item->id = $product->id;
    $item->merek = $product->merek;
    $item->harga = $product->harga;
    $iteminstock = $product->jumlahstock;
    $item->jumlahstock = 1;
    //Periksa produk dalam keranjang
    $index = -1;
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart);$i++)
        if ($cart[$i]->id == $_GET['id']){
            $index = $i;
            break;
        }
        if($index == -1) 
            $_SESSION['cart'][] = $item; //$ _SESSION ['cart']: set $ cart sebagai variabel _session
        else {

            if (($cart[$index]->jumlahstock) < $iteminstock)
                 $cart[$index]->jumlahstock ++;
                 $_SESSION['cart'] = $cart;
        }
}
//Menghapus produk dalam keranjang
if(isset($_GET['index']) && !isset($_POST['update'])) {
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}
// Perbarui jumlah dalam keranjang
if(isset($_POST['update'])) {
  $arrjumlahstock = $_POST['jumlahstock'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->jumlahstock = $arrjumlahstock[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>
<h2> mobil yang akan kamu beli: </h2> 
<form method="POST">
<table id="t01">
<tr>
    <th>Option</th>
    <th>Id</th>
    <th>merek</th>
    <th>harga</th>
    <th>jumlahstock</th>

    <th>Total</th>
</tr>
<?php 
     $cart = unserialize(serialize($_SESSION['cart']));
     $s = 0;
     $index = 0;
    for($i=0; $i<count($cart); $i++){
        $s += $cart[$i]->harga * $cart[$i]->jumlahstock;
 ?> 
   <tr>
        <td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a> </td>
        <td> <?php echo $cart[$i]->id; ?> </td>
        <td> <?php echo $cart[$i]->merek; ?> </td>
        <td>Rp. <?php echo $cart[$i]->harga; ?> </td>
        <td> <input type="number" min="1" value="<?php echo $cart[$i]->jumlahstock; ?>" name="jumlahstock[]"> </td>  
        <td> Rp.<?php echo $cart[$i]->harga * $cart[$i]->jumlahstock; ?> </td> 
   </tr>
    <?php 
        $index++;
    } ?>
    <tr>
        <td colspan="5" style="text-align:right;font-weight:bold">Total
         <input id="saveimg" type="image" src="svg/baseline-shopping_cart-24px.svg" name="update" alt="Save Button">
         <input type="hidden" name="update">
        </td>
        <td> Rp.<?php echo $s; ?> </td>
    </tr>
</table>
</form>
<br>
<a href="index2.php">Continue Shopping</a> | <a href="bind.php">bind mobil</a>
<?php 
if(isset($_GET["id"]) || isset($_GET["index"])){
 header('Location: cart.php');
} 
?>
</body>
 </html>