<?php
session_start();
error_reporting(0);
include "config.php";
include "tanggal.php";

$input=$_GET[input];
$sid = session_id();
$inputform=$_GET[inputform];
$customer=$_GET['customer_id'];


if($input=='add'){
	
	$sql = mysql_query("SELECT produk_id FROM pesan WHERE produk_id = '$_GET[id]' AND id_session='$sid'");
	$num = mysql_num_rows($sql);
	if ($num==0){
		mysql_query("INSERT INTO pesan(produk_id,
											customer_id,tgl_pesan,pesan_jml,status)
									VALUES	('$_GET[id]',
											'$customer',
											now(),
											'1','$status')");
	}
	else {
		mysql_query("UPDATE pesan SET pesan_jml = pesan_jml + 1 WHERE id_session = '$sid' AND produk_id = '$_GET[id]'");
	}
	deletecart();
	header('location:chart.php');
	}				
elseif ($input=='delete'){
	mysql_query("DELETE FROM pesan WHERE pesan_id='$_GET[id]'");
	header('location:chart.php');
	}
elseif ($input=='inputform'){
	function cart_content(){
	$ct_content = array();
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM pesan WHERE id_session='$sid'");
	
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
		mysql_query("DELETE FROM pesan WHERE pesan_id = {$ct_content[$i]['pesan_id']}");
		}
		echo "<script>window.alert('Terima Kasih Pesanan Anda Sedang Kami Proses');
        window.location=('index.php')</script>";
	}								
												

function deletecart(){
	$del = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
	mysql_query("DELETE FROM cart WHERE tgl_cart < '$del'");
	}
	

