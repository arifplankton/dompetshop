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
	$kd_kategori=$_POST['kd_kategori'];
	$nm_produk=$_POST['nm_produk'];
	$hrg_beli=$_POST['hrg_beli'];
	$laba=$_POST['laba'];
	$hrg_jual=$_POST['hrg_jual'];
	$gambar=$_FILES["gambar"]["name"];
	$deskripsi=$_POST['deskripsi'];
	$file_gambar = "produk/".$gambar;

	move_uploaded_file($_FILES["gambar"]["tmp_name"],$file_gambar);

include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO barang (kd_produk,kd_kategori,nm_produk,input_date,hrg_beli,laba,hrg_jual,gambar,deskripsi)
	VALUES('','$kd_kategori','$nm_produk',NOW(),'$hrg_beli','$laba','$hrg_jual','$file_gambar','$deskripsi')", $con);
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
