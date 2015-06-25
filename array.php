<?php
session_start();
if(isset($_POST['add'])){
	$code = $_POST['code'];
	$price = $_POST['price'];
	$qty = isset($_SESSION['cart'][$code]) ? $_POST['qty'] + $_SESSION['cart'][$code] : $_POST['qty'];
	$_SESSION['cart'][$code]['code'] = $code;
	$_SESSION['cart'][$code]['price'] = $price;
	$_SESSION['cart'][$code]['qty'] = $qty;
}
?>
<form name="form-add" action="" method="post">
Code: <input type="text" name="code" />
Price: <input type="text" name="price"/>
Qty: <input type="text" name="qty"/>
<input type="submit" name="add" value="Add"/>
</form>
<form name="form-cart" action="" method="post">
<table>
<tr>
	<td>Code</td>
	<td>Price</td>
	<td>Qty</td>
	<td>Sub Total</td>
</tr>

<?php 
$grandTotal = 0;
if(isset($_SESSION['cart'])){
foreach($_SESSION['cart'] as $cart){?>
<tr>
	<td>
	<?php echo $cart['code'];?>
	<input type="hidden" name="code[]" value="<?php echo $cart['code'];?>"/>
	</td>
	<td><input type="text" name="price[<?=$cart["code"];?>]" value="<?php echo $cart['price'];?>"/></td>
	<td><input type="text" name="qty[<?=$cart['code'];?>]" value="<?php echo $cart['qty'];?>"/></td>
	<?php
	//proses kalkulasi
	$total = $cart['qty'] * $cart['price'];
	$grandTotal += $total;
	?>
	<td><?php echo $total;?></td>
</tr>
<?php }
}
?>