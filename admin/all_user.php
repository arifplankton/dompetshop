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
$qry=mysql_query("SELECT * FROM customer order by customer.customer_id ASC ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{

echo "<tr>";
echo "<td><a ".$row['customer_id'].">".$row['customer_id']."</a></td>";
echo "<td><a ".$row['customer_id'].">".$row['customer_nm']."</a></td>";
echo "<td><a ".$row['customer_id'].">".$row['customer_uname']."</a></td>";
echo "<td><a ".$row['customer_id'].">".$row['customer_pwd']."</a></td>";
echo "<td><a ".$row['customer_id'].">".$row['customer_almt']."</a></td>";
echo "<td><a ".$row['customer_id'].">".$row['customer_prov']."</a></td>";
echo "<td><a ".$row['customer_id'].">".$row['customer_kdpos']."</a></td>";
echo "<td><a ".$row['customer_id'].">".$row['customer_telp']."</a></td>";

echo "<td><a href=edit_user.php?customer_id=".$row['customer_id'].">edit</a></td>";
echo "<td><a href=user_removed.php?customer_id=".$row['customer_id'].">delete</a></td>";
echo "<td><a href=user.php?customer_id=".$row['customer_id'].">lihat</a></td>";

echo "</tr>";
}
echo "</table>";
echo"<form>";

}
?>
  <?php
if(isset($_GET['customer_id']))
{
$nama=$_GET['customer_id'];


$qry=mysql_query("SELECT * FROM customer WHERE nama='$customer_id' order by customer.customer_id ASC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
while($row=mysql_fetch_array($qry))
{
//echo $row['title'];
echo "<tr>";
echo "<td><a href=user.php?id=".$row['customer_id'].">".$row['nama']."</a></td>";
echo "<td><a href=edit_user.php?id=".$row['customer_id'].">edit</a></td>";
echo "<td><a href=user_removed.php?id=".$row['customer_id'].">delete</a></td>";
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