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

$ida=$_POST['ida'];
$idp=$_POST['idp'];
$ido=$_POST['ido'];
$nf=$_POST['nf'];
$jml=$_POST['jml'];
$tgp=$_POST['tgp'];

?>
<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO faktur_penjualan (id_anggota,id_pengurus,id_produk,no_faktur,jml,tgl_penjualan)VALUES('$ida','$idp','$ido','$nf','$jml','$tgp')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("laporan Sukses di entry klik ok untuk melanjutkan!!");
			document.location="lap_stok.php";
			</script><?
}
?>
