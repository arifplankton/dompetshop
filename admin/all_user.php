
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
<b>Daftar Nama User Dompet Original</b>
</div>
</br>
<div id="right">

    <?php
	echo"<form>";
echo "<table border='1' width='100%' height='100%'>";
	echo "<tr>";
echo"<td size='54'>Kode Costumer</td>";
echo"<td>Nama</td>";
echo"<td>Username</td>";
echo"<td>Password</td>";
echo"<td>Alamat</td>";
echo"<td>Provinsi</td>";
echo"<td>Kode Pos</td>";
echo"<td>No Telpon</td>";
echo"<td colspan='3'>Ubah</td>";

echo"</tr>";
if(isset($_GET['id'])=="viewall")
{
$qry=mysql_query("SELECT * FROM costumer order by costumer.kd_costumer DESC ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{

echo "<tr>";
echo "<td><a ".$row['kd_costumer'].">".$row['kd_costumer']."</a></td>";
echo "<td><a ".$row['kd_costumer'].">".$row['nm_costumer']."</a></td>";
echo "<td><a ".$row['kd_costumer'].">".$row['username']."</a></td>";
echo "<td><a ".$row['kd_costumer'].">".$row['password']."</a></td>";
echo "<td><a ".$row['kd_costumer'].">".$row['alamat']."</a></td>";
echo "<td><a ".$row['kd_costumer'].">".$row['provinsi']."</a></td>";
echo "<td><a ".$row['kd_costumer'].">".$row['kd_pos']."</a></td>";
echo "<td><a ".$row['kd_costumer'].">".$row['no_tlp']."</a></td>";

echo "<td><a href=edit_user.php?kd_costumer=".$row['kd_costumer'].">edit</a></td>";
echo "<td><a href=user_removed.php?kd_costumer=".$row['kd_costumer'].">delete</a></td>";
echo "<td><a href=user.php?kd_costumer=".$row['kd_costumer'].">lihat</a></td>";

echo "</tr>";
}
echo "</table>";
echo"<form>";

}
?>
  <?php
if(isset($_GET['nam']))
{
$nam=$_GET['nam'];


$qry=mysql_query("SELECT * FROM costumer WHERE nama='$nam' order by costumer.kd_costumer DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
while($row=mysql_fetch_array($qry))
{
//echo $row['title'];
echo "<tr>";
echo "<td><a href=user.php?id=".$row['id'].">".$row['nama']."</a></td>";
echo "<td><a href=edit_user.php?id=".$row['id'].">edit</a></td>";
echo "<td><a href=user_removed.php?id=".$row['id'].">delete</a></td>";
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