<?php

include'header.php';
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
</br>

<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

    <?php

  require_once("config.php");
  $sql = "select * from blog order by blog_id asc";
  $hasil = mysql_query($sql);
  if (!$hasil){
    die("Gagal Query blog");
  }
?>
<div class="table table-bordered">
<div class="jumbotron">
<h2> Data Artikel Dompet Original</h2>
<table class="table table-bordered">
<tr class="success">
  <th>Id</th><th>Title</th><th>Tangal Post</th><th>Gambar</th><th>Contents</th><th>Update Delete</th>
</tr>  
<?php  
  while ($data = mysql_fetch_array($hasil)) {
    echo "<td>{$data['blog_id']}</td>"
        ."<td>{$data['blog_judul']}</td>"
        ."<td>{$data['tgl_post']}</td>"
        ."<td>{$data['blog_gambar']}</td>"
        ."<td>{$data['blog_isi']}</td>";
        echo "<td><a href=edit_article.php?blog_id={$data['blog_id']}>Edit
  <a href=deleting_article.php?blog_id={$data['blog_id']}>Hapus</td>";
  echo "</tr>";
  }
?>
</table>
</div>


<div class='well' align='right'><a class='btn btn-primary'  href='printblog.php'>Cetak PDF</a></div>

<?php
include 'footer.php';
?>