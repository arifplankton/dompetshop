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
	$kategori_id=$_POST['kategori_id'];
	$produk_nm=$_POST['produk_nm'];
	$hrg_beli=$_POST['hrg_beli'];
	$laba=$_POST['laba'];
	$hrg_jual=$_POST['hrg_jual'];
	$gambar=$_FILES["gambar"]["name"];
	$produk_deskripsi=$_POST['produk_deskripsi'];
	$file_gambar = "produk/".$gambar;

	move_uploaded_file($_FILES["gambar"]["tmp_name"],$file_gambar);

include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO produk (produk_id,kategori_id,produk_nm,tgl_input,hrg_beli,laba,hrg_jual,gambar,produk_deskripsi)
	VALUES('','$kategori_id','$produk_nm',NOW(),'$hrg_beli','$laba','$hrg_jual','$file_gambar','$produk_deskripsi')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?>

<script language="javascript">
			alert("produk Sukses Di Buat!!");
			document.location="create_produk.php?id=viewall";
			</script>
			<?php
}

}
?>
