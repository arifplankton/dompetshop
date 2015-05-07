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


$idpro=$_POST['idpro'];
$ida=$_POST['ida'];
$ttp=$_POST['ttp'];
$tglp=$_POST['tglp'];



?>
<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO laporan_pendapatan(id_produk,id_anggota,total_pendapatan,tgl)VALUES('$idpro','$ida','$ttp','$tglp')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("produk Sukses Di Buat!!");
			document.location="create_produk.php?id=viewall";
			</script><?
}
?>
