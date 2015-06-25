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
<b>Daftar Semua Pesan</b>
</div>
</br>
<div id="right">

    <?php
	echo"<form>";
echo "<table border='1' width='100%' height='100%'>";
	echo "<tr>";
echo"<td size='30'>Id Pesan</td>";
echo"<td>Id Customer</td>";
echo"<td>Id Produk</td>";
echo"<td>Id Session</td>";
echo"<td>Tanggal Pesan</td>";
echo"<td>Jml Pesan </td>";
echo"<td>Status </td>";


echo"</tr>";
if(isset($_GET['id'])=="viewall")
{
$qry=mysql_query("SELECT * FROM pesan order by pesan.pesan_id ASC ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{

echo "<tr>";
echo "<td><a ".$row['pesan_id'].">".$row['pesan_id']."</a></td>";
echo "<td><a ".$row['pesan_id'].">".$row['customer_id']."</a></td>";
echo "<td><a ".$row['pesan_id'].">".$row['produk_id']."</a></td>";
echo "<td><a ".$row['pesan_id'].">".$row['id_session']."</a></td>";
echo "<td><a ".$row['pesan_id'].">".$row['tgl_pesan']."</a></td>";
echo "<td><a ".$row['pesan_id'].">".$row['pesan_jml']."</a></td>";
echo "<td><a ".$row['pesan_id'].">".$row['status']."</a></td>";




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