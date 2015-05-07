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

$qry=mysql_query("UPDATE costumer SET kd_costumer='$kd_costumer',nm_costumer='$nm_costumer',username='$username',
	password='$password',alamat='$alamat',provinsi='$provinsi',kd_pos='$kd_pos',no_tlp='$no_tlp' WHERE kd_costumer='$kd_costumer'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("user Sukses Di Update!!");
			document.location="all_user.php?id=viewall";
			</script><?
}

?>

<a href=all_user.php?id=viewall>Go back </a>
</div>
</div>
</body>
</html>