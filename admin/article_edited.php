

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
$id=$_POST['id'];
$title=$_POST['title'];
$tgl_post=$_POST['tgl_post'];
$gambar=$_FILES["gambar"]["name"];
$contents=$_POST['contents'];
?>

<?php
if($gambar)
{

$name=$_FILES['gambar']['name'];
$gambar=$_FILES['gambar']['tmp_name'];
$err=$_FILES['gambar']['error'];
if($err==0)
{
move_uploaded_file($gambar, $name);
}

$qry=mysql_query("UPDATE blog SET gambar='$gambar' WHERE id='$id'", $contents);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
}
?>

<?php

$qry=mysql_query("UPDATE blog SET title='$title',tgl_post='$tgl_post',gambar='$gambar',contents='$contents' WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Artikel Sukses Di Update!!");
			document.location="index.php";
			</script><?php
}

?>

<a href=index.php>Go back to Admin Panel</a>
</div>
</div>
</body>
</html>