<?php
session_start();
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='admin')
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
}
else
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
?>

<?php

$kd_provinsi=$_POST['kd_provinsi'];
$nm_provinsi=$_POST['nm_provinsi'];
$ongkos_kirim=$_POST['ongkos_kirim'];

?>

<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO provinsi(kd_provinsi,nm_provinsi,ongkos_kirim)VALUES('$kd_provinsi','$nm_provinsi','$ongkos_kirim')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Provinsi Sukses Di Buat!!");
			document.location="index.php";
			</script><?php
}
?>
