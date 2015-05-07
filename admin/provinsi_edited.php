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

$kd_provinsi=$_POST['kd_provinsi'];
$nm_provinsi=$_POST['nm_provinsi'];
$ongkos_kirim=$_POST['ongkos_kirim'];
?>


<?php

$qry=mysql_query("UPDATE provinsi SET kd_provinsi='$kd_provinsi',nm_provinsi='$nm_provinsi',ongkos_kirim='$ongkos_kirim'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("provinsi Sukses Di Update!!");
			document.location="all_user.php?id=viewall";
			</script><?
}

?>

<a href=all_provinsi .php?id=viewall>Go back </a>
</div>
</div>
</body>
</html>