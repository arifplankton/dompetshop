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
if(!empty($_FILES['gambar']['tmp_name'])){
	$title=$_POST['title'];
	$tgl_post=$_POST['tgl_post'];
	$gambar=$_FILES["gambar"]["name"];
	$contents=$_POST['contents'];
	$file_gambar = "gambar/".$gambar;

	move_uploaded_file($_FILES["gambar"]["tmp_name"], $file_gambar);


include 'config.php';

$qry=mysql_query("INSERT INTO blog(id,title,tgl_post,gambar,contents)VALUES('','$title','$tgl_post','$file_gambar','$contents')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Artikel Sukses Di Buat!!");
			document.location="index.php";
			</script><?php
}
}
?>
