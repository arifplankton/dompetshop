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
<td><li><a href=create_new.php ><img src="images/newpost.png" />Buat Post Blog Baru</a></li></td>
<td><li><a href=article_all.php ><img src="images/delete update.png" />All Blog</a></li></td>
<td><li><a href="create_provinsi.php" ><img src="images/kategori.png" />Buat Kategori Posting</a></li></td>
<td><li><a href=all_provinsi.php ><img src="images/post.png"/>All Provinsi</a></li></td>
</tr>

<tr>
<td><li><a href=create_provinsi.php?id=viewall><img src="images/post.png" />Buat Provinsi</a></li></td>
<td><li><a href= ><img src="images/report.png"/>..</a></li></td>
<td><li><a href= ><img src="images/inventory.png"/>..</a></li></td>
</tr>

<tr>
<td><li><a href=all_articles.php?id=viewall><img src="images/post.png" />Lihat Semua posting</a></li></td>
<td><li><a href=report.php ><img src="images/report.png"/>Report</a></li></td>
<td><li><a href=lap_stok.php ><img src="images/inventory.png"/>Entry laporan Harian</a></li></td>
</tr>

<tr>
<td><li><a href=all_user.php?id=viewall><img src="images/users.png" />Daftar Anggota</a></li></td>
<td><li><a href=create_user.php ><img src="images/adduser.png" />Tambahkan Anggota Baru</a></li></td>
<td><li><a href=create_produk.php ><img src="images/produk.png"/>add Produk</a></li></td>
</tr>


<tr>
<td><li><a href=><img src="images/setor.png" />Laporan penyetoran</a></li></td>
<td><li><a href=lap_pendapatan.php ><img src="images/addp.png" />Buat laporan pendapatan</a></li></td>
<td><li><a href=pendapatan.php ><img src="images/keuangan.png"/>Pendapatan Produk </a></li></td>
</tr>
</table> 
</body>
</html>
