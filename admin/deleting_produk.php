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
include 'config.php';
?>

<?php
if(isset($_GET['produk_id']))
{
$id=$_GET['produk_id'];
$qry=mysql_query("DELETE FROM produk WHERE  produk_id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Provinsi Sukses Di Hapus!!");
			document.location="all_produk.php?id=viewall";
			</script><?
}
}
?>
