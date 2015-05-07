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

    <?php

  require_once("config.php");
  $sql = "select * from blog order by id desc";
  $hasil = mysql_query($sql);
  if (!$hasil){
    die("Gagal Query blog");
  }
?>
<div class="right_content">
<h2> Data Artikel Domper Original</h2>
<table border="5" width="50%" align=center style='border-collapse:collapse'>
<tr>
  <th>Id</th><th>Title</th><th>Tangal Post</th><th>Gambar</th><th>Contents</th><th>Update Delete</th>
</tr>  
<?php  
  while ($data = mysql_fetch_array($hasil)) {
    echo "<td>{$data['id']}</td>"
        ."<td>{$data['title']}</td>"
        ."<td>{$data['tgl_post']}</td>"
        ."<td>{$data['gambar']}</td>"
        ."<td>{$data['contents']}</td>";
        echo "<td><a href=edit_article.php?id={$data['id']}>Edit
  <a href=deleting_article.php?id={$data['id']}>Hapus</td>";
  echo "</tr>";
  }
?>
</table>
</div>
<?php
include 'footer.php';
?>