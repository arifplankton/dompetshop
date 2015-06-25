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
  $sql = "select * from provinsi order by provinsi_id asc";
  $hasil = mysql_query($sql);
  if (!$hasil){
    die("Gagal Query provinsi");
  }
?>
<div class="right_content">
<h2> Data Provinsi Dompet  Original</h2>
<table border="3" width="35%" align=center style='border-collapse:collapse'>
<tr>
  <th>Kode Provinsi</th><th>Nama Provinsi</th><th>Ongkos Kirim</th>
</tr>  

<?php  
  while ($data = mysql_fetch_array($hasil)) {
    echo "<td>{$data['provinsi_id']}</td>"
        ."<td>{$data['provinsi_nm']}</td>"
        ."<td>{$data['provinsi_ongkos']}</td>";
        echo "<td><a href=edit_provinsi.php?provinsi_id={$data['provinsi_id']}>Edit
  <a href=deleting_provinsi.php?provinsi_id={$data['provinsi_id']}>Hapus</td>";
  echo "</tr>";
  }
?>
</table>
</div>

