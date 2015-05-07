<?php
session_start();
error_reporting(0);
include "config.php";
include "tanggal.php";

$input=$_GET[input];
$sid = session_id();
$inputform=$_GET[inputform];

if($input=='add'){
	
	$sql = mysql_query("SELECT kd_produk FROM cart WHERE kd_produk='$_GET[id]' AND id_session='$sid'");
	$num = mysql_num_rows($sql);
	if ($num==0){
		mysql_query("INSERT INTO cart(kd_produk,
											id_session,
											tgl_cart,
											qty)
									VALUES	('$_GET[id]',
											'$sid',
											'$tgl_sekarang',
											'1')");
	}
	else {
		mysql_query("UPDATE cart SET qty = qty + 1 WHERE id_session = '$sid' AND kd_produk='$_GET[id]'");
	}
	deletecart();
	header('location:cart.php');
	}				
elseif ($input=='delete'){
	mysql_query("DELETE FROM cart WHERE id_cart='$_GET[id]'");
	header('location:cart.php');
	}
elseif ($input=='inputform'){
	function cart_content(){
	$ct_content = array();
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM cart WHERE id_session='$sid'");
	
	while ($r=mysql_fetch_array($sql)) {
		$ct_content[] = $r;
	}
	return $ct_content;
}
	$ct_content = cart_content();
	$jml = count($ct_content);
	$now = date("Ymd");
	for($i=0; $i<$jml; $i++){
	mysql_query("INSERT INTO order_product(name,
											email,
											phone,
											address,
											kd_produk,
											jumlah,
											tanggal,
											id_pemesan) 
									VALUES ('$_POST[name]',
											'$_POST[email]',
											'$_POST[telp]',
											'$_POST[address]',
											{$ct_content[$i]['kd_produk']},
											{$ct_content[$i]['qty']},
											'$now',
											'$sid')");
		}
	for($i=0; $i<$jml; $i++){
		mysql_query("DELETE FROM cart WHERE id_cart = {$ct_content[$i]['id_cart']}");
		}
		echo "<script>window.alert('Terima Kasih Pesanan Anda Sedang Kami Proses');
        window.location=('index.php')</script>";
	}								
												

function deletecart(){
	$del = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
	mysql_query("DELETE FROM cart WHERE tgl_cart < '$del'");
	}
	

