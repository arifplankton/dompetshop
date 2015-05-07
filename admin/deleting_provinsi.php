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
if(isset($_GET['kd_provinsi']))
{
$kd_provinsi=$_GET['kd_provinsi'];
$qry=mysql_query("DELETE FROM provinsi WHERE kd_provinsi='kd_provinsi'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Provinsi Sukses Di Hapus!!");
			document.location="all_provinsi.php";
			</script><?
}
}
?>
