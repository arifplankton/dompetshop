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
$customer_id=$_GET['customer_id'];
$qry=mysql_query("DELETE FROM customer WHERE customer_id='$customer_id'", $con);
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
