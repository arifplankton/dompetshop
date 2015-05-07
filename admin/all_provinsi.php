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
  $sql = "select * from provinsi order by kd_provinsi asc";
  $hasil = mysql_query($sql);
  if (!$hasil){
    die("Gagal Query provinsi");
  }
?>
<div class="right_content">
<h2> Data Provinsi Dompet  Original</h2>
<table border="5" width="50%" align=center style='border-collapse:collapse'>
<tr>
  <th>Kode Provinsi</th><th>Nama Provinsi</th><th>Ongkos Kirim</th>
</tr>  
<?php  
  while ($data = mysql_fetch_array($hasil)) {
    echo "<td>{$data['kd_provinsi']}</td>"
        ."<td>{$data['nm_provinsi']}</td>"
        ."<td>{$data['ongkos_kirim']}</td>";
        echo "<td><a href=edit_provinsi.php?kd_provinsi={$data['kd_provinsi']}>Edit
  <a href=deleting_provinsi.php?kd_provinsi={$data['kd_provinsi']}>Hapus</td>";
  echo "</tr>";
  }
?>
</table>
</div>
<?php
include 'footer.php';
?>