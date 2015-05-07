<?php
include 'config.php';
?>

<?php
$uname=$_POST['username'];
$pass=$_POST['password'];

$qry=mysql_query("SELECT * FROM costumer WHERE username='$username'", $con);
if(!$qry)
{
die("Query Fail ". mysql_error());
}
else
{
$row=mysql_fetch_array($qry);
//echo $row["user"]." ".$row["password"]."<br/>";

if($_POST['username']==$row["username"]&& md5($_POST['pass'])==$row["password"])
{
session_start();
$_SESSION['name']=$_POST['username'];
$uname=$_POST['username'];
header("Location:index.php");
}
else
{
header("Location:index.php?id=username or password you entered is incorrect");
}
}

?>