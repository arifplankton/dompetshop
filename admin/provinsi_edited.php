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
$provinsi_id=$_POST['provinsi_id'];
$provinsi_nm=$_POST['provinsi_nm'];
$provinsi_ongkos=$_POST['provinsi_ongkos'];
?>


<?php

$qry=mysql_query("UPDATE provinsi SET  provinsi_nm='$provinsi_nm',provinsi_ongkos='$provinsi_ongkos' 
	 WHERE provinsi_id='$provinsi_id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("provinsi Sukses Di Update!!");
			document.location="all_provinsi.php?id=viewall";
			</script><?
}

?>

<a href=all_provinsi.php?provinsi_id=viewall>Go back </a>
</div>
</div>
</body>
</html>