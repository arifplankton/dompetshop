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
include 'header.php';
include"main.php";
?>
<div class="right_content">            
        
               
    
<div id="left">
<b>Daftar Semua yang Konfirm</b>
</div>
</br>
<div id="right">

    <?php
	echo"<form>";
echo "<table border='1' width='100%' height='100%'>";
	echo "<tr>";
echo"<td size='30'>Id Konfirm</td>";
echo"<td>Id Kirim</td>";
echo"<td>Tanggal Konfirm</td>";
echo"<td>Total Baayar</td>";
echo"<td>Konfirm Status</td>";


echo"</tr>";
if(isset($_GET['id'])=="viewall")
{
$qry=mysql_query("SELECT * FROM konfirm_byr order by konfirm_byr.konfirm_id ASC ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{

echo "<tr>";
echo "<td><a ".$row['konfirm_id'].">".$row['konfirm_id']."</a></td>";
echo "<td><a ".$row['konfirm_id'].">".$row['kirim_id']."</a></td>";
echo "<td><a ".$row['konfirm_id'].">".$row['tgl_konfirm']."</a></td>";
echo "<td><a ".$row['konfirm_id'].">".$row['tot_byr']."</a></td>";
echo "<td><a ".$row['konfirm_id'].">".$row['konfirm_status']."</a></td>";



echo "</tr>";
}
echo "</table>";
echo"<form>";

}
?>
  <?php
if(isset($_GET['provinsi_id']))
{
$nama=$_GET['provinsi_id'];


$qry=mysql_query("SELECT * FROM provinsi WHERE provinsi_id='$nama' order by provinsi.provinsi_id ASC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
while($row=mysql_fetch_array($qry))
{
//echo $row['title'];s
echo "<tr>";
echo "<td><a href=edit_provinsi?provinsi_id=".$row['provinsi_id'].">".$row['nama']."</a></td>";
echo "<td><a href=deleting_provinsi?provinsi_id=".$row['provinsi_id'].">edit</a></td>";
echo "<td><a href=provinsi.php?provinsi_id=".$row['provinsi_id'].">delete</a></td>";
echo "</tr>";
}
echo "</table>";
}
?>
</div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>