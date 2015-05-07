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


$kd_costumer=$_POST['kd_costumer'];
$nm_costumer=$_POST['nm_costumer'];
$username=$_POST['username'];
$password=$_POST['password'];
$alamat=$_POST['alamat'];
$provinsi=$_POST['provinsi'];
$kd_pos=$_POST['kd_pos'];
$no_tlp=$_POST['no_tlp'];
?>
<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO costumer(kd_costumer,nm_costumer,username,password,alamat,provinsi,kd_pos,no_tlp)VALUES
	('$kd_costumer','$nm_costumer','$username','$password','$alamat','$provinsi','kd_pos','$no_tlp')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("User Sukses Di Buat!!");
			document.location="index.php?id=viewall";
			</script><?
}
?>
