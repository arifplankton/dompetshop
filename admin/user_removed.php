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
$kd_costumer=$_GET['kd_costumer'];
$qry=mysql_query("DELETE FROM costumer WHERE kd_costumer='$kd_costumer'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("User Sukses Di Hapus!!");
			document.location="all_user.php?id=viewall";
			</script><?
}

?>
