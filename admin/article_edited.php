

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
$id=$_POST['blog_id'];
$title=$_POST['blog_judul'];
$tgl_post=$_POST['tgl_post'];
$gambar=$_FILES["blog_gambar"]["name"];
$contents=$_POST['blog_isi'];
?>

<?php
if(!empty($_FILES['blog_gambar']['tmp_name'])){
	$blog_judul=$_POST['blog_judul'];
	$tgl_post=$_POST['tgl_post'];
	$blog_gambar=$_FILES["blog_gambar"]["name"];
	$blog_isi=$_POST['blog_isi'];
	$file_gambar = "gambar/".$blog_gambar;

	move_uploaded_file($_FILES["blog_gambar"]["tmp_name"], $file_gambar);


}


$qry=mysql_query("UPDATE blog SET blog_judul='$title',tgl_post='$tgl_post',blog_gambar='$gambar',blog_isi='$contents' WHERE blog_id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Artikel Sukses Di Update!!");
			document.location="article_all.php";
			</script><?php
}

?>

<a href=index.php>Go back to Admin Panel</a>
</div>
</div>
</body>
</html>