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
if(isset($_GET['provinsi_id']))
{
$id=$_GET['provinsi_id'];
$qry=mysql_query("DELETE FROM provinsi WHERE  provinsi_id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Provinsi Sukses Di Hapus!!");
			document.location="al_provinsi.php?id=viewall";
			</script><?
}
}
?>
