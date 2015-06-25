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


include 'config.php';
include'header.php';
include'main.php';



?>
<html><head><title>index</title></head>
<body>


<table border="1"  align="center">
<tr>
<td><li><a href=create_article.php ><img src="images/newpost.png" />Add Post Blog Article</a></li></td>
<td><li><a href=article_all.php ><img src="images/Pensils.png" />All Blog</a></li></td>
<td><li><a href="create_provinsi.php" ><img src="images/kategori.png" />Add Provinsi</a></li></td>
<td><li><a href=al_provinsi.php?id=viewall><img src="images/Map.png"/>All Provinsi</a></li></td>
</tr>

<tr>
<td><li><a href=create_produk.php?id=viewall><img src="images/dompet.jpg" />Add Produk</a></li></td>
<td><li><a href=all_produk.php?id=viewall><img src="images/Clipboard.png"/>All Produk</a></li></td>
<td><li><a href=all_user.php?id=viewall><img src="images/users.png" />Daftar Customer</a></li></td>
<td><li><a href=all_pesan.php?id=viewall><img src="images/Mail.png" />All Pesan</a></li></td>
</tr>

<tr>
<td><li><a href=all_kirim.php?kirim_id=viewall><img src="images/Retina-Ready.png" />All Kirim</a></li></td>
<td><li><a href=all_konfirm.php?konfirm_id=viewall><img src="images/Pocket.png" />All Konfirm</a></li></td>
<td><li><a href=><img src="images/keuangan.png" />Laporan Penjualan</a></li></td>
<td><li><a href=pendapatan.php ><img src="images/addp.png"/>Laporan Laba </a></li></td>
</tr>
</table> 
</body>
</html>
