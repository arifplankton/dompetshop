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
if(!empty($_FILES['blog_gambar']['tmp_name'])){
	$blog_judul=$_POST['blog_judul'];
	$tgl_post=$_POST['tgl_post'];
	$blog_gambar=$_FILES["blog_gambar"]["name"];
	$blog_isi=$_POST['blog_isi'];
	$file_gambar = "gambar/".$blog_gambar;

	move_uploaded_file($_FILES["blog_gambar"]["tmp_name"], $file_gambar);


include 'config.php';

$qry=mysql_query("INSERT INTO blog(blog_id,blog_judul,tgl_post,blog_gambar,blog_isi)
	VALUES('','$blog_judul',now(),'$file_gambar','$blog_isi')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Artikel Sukses Di Buat!!");
			document.location="create_article.php";
			</script><?php
}
}
?>
