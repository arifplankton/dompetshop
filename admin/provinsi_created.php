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

$provinsi_nm=$_POST['provinsi_nm'];
$provinsi_ongkos=$_POST['provinsi_ongkos'];

?>

<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO provinsi(provinsi_id,provinsi_nm,provinsi_ongkos)
	VALUES('','$provinsi_nm','$provinsi_ongkos')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Provinsi Sukses Di Buat!!");
			document.location="create_provinsi.php";
			</script><?php
}
?>
