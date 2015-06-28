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

<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<?php
include 'config.php';
include 'header.php';
include"main.php";
?>
<div class="table table-bordered">
<div class="jumbotron">        
                   
<h2>Daftar Produk Dompet Original</h2>



    <?php
	echo"<form>";
echo "<table class='table table-bordered' >";
	echo "<tr  class='success'>";
echo"<td size='54'>Kode produk</td>";
echo"<td>Kategori</td>";
echo"<td>Nama Produk</td>";
echo"<td>Tanggal Post</td>";
echo"<td>Harga Beli</td>";
echo"<td>Laba</td>";
echo"<td>Harga Jual</td>";
echo"<td>Gambar</td>";
echo"<td>Deskripsi</td>";
echo"<td colspan='3'>Ubah</td>";

echo"</tr>";
if(isset($_GET['id'])=="viewall")
{
$qry=mysql_query("SELECT * FROM produk order by produk.produk_id ASC ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{

echo "<tr>";
echo "<td><a ".$row['produk_id'].">".$row['produk_id']."</a></td>";
echo "<td><a ".$row['produk_id'].">".$row['kategori_id']."</a></td>";
echo "<td><a ".$row['produk_id'].">".$row['produk_nm']."</a></td>";
echo "<td><a ".$row['produk_id'].">".$row['tgl_input']."</a></td>";
echo "<td><a ".$row['produk_id'].">".$row['hrg_beli']."</a></td>";
echo "<td><a ".$row['produk_id'].">".$row['laba']."</a></td>";
echo "<td><a ".$row['produk_id'].">".$row['hrg_jual']."</a></td>";
echo "<td><a ".$row['produk_id'].">".$row['gambar']."</a></td>";
echo "<td><a ".$row['produk_id'].">".$row['produk_deskripsi']."</a></td>";

echo "<td><a href=edit_produk.php?viewall=".$row['produk_id'].">edit</a></td>";
echo "<td><a href=deleting_produk.php?produk_id=".$row['produk_id'].">delete</a></td>";
echo "<td><a href=produk.php?viewall=".$row['produk_id'].">lihat</a></td>";

echo "</tr>";
}
echo "</table>";
echo"<form>";

}
?>
  <?php
if(isset($_GET['produk_id']))
{
$nam=$_GET['produk_id'];


$qry=mysql_query("SELECT * FROM produk WHERE produk_id='$nam' order by produk.produk_id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
while($row=mysql_fetch_array($qry))
{
//echo $row['title'];
echo "<tr>";
echo "<td><a href=produk.php?produk_id=".$row['produk_id'].">".$row['produk_nm']."</a></td>";
echo "<td><a href=edit_produk.php?produk_id=".$row['produk_id'].">edit</a></td>";
echo "<td><a href=deleting_produk.php?produk_id=".$row['produk_id'].">delete</a></td>";
echo "</tr>";
}
echo "</table>";
}
?>

</div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
     <div class='well' align='right'><a class='btn btn-primary'  href='printproduk.php'>Cetak PDF</a></div>               
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 