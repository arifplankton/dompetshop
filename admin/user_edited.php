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
$customer_id=$_POST['customer_id'];
$customer_nm=$_POST['customer_nm'];
$customer_uname=$_POST['customer_uname'];
$customer_pwd=$_POST['customer_pwd'];
$customer_almt=$_POST['customer_almt'];
$customer_prov=$_POST['customer_prov'];
$customer_kdpos=$_POST['customer_kdpos'];
$customer_telp=$_POST['customer_telp'];
?>


<?php

$qry=mysql_query("UPDATE customer SET customer_nm='$customer_nm',customer_uname='$customer_uname',
	customer_pwd='$customer_pwd',customer_almt='$customer_almt',customer_prov='$customer_prov',customer_kdpos='$customer_kdpos',
	customer_telp='$customer_telp'
	 WHERE customer_id='$customer_id'", $con);
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