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
include 'main.php';


?>
<body>
<div class="right_content">  
 <div class="form">  

<h3>User Dompet Original</h3>
<?php
/*
isset() is used to check wheather arctile id is received through url from "index.php" file and if it is set corresponding arctile is displayted using SELECT statement.
*/

if(isset($_GET['kd_costumer']))
{
$kd_costumer=$_GET['kd_costumer'];
$qry=mysql_query("SELECT * FROM costumer WHERE kd_costumer=$kd_costumer", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{
?>
<dl>
<dt><label for="title">Kode Costumer</label></dt>
<dd><?echo "<h3>".$row['kd_costumer']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">Nama Costumer</label></dt>
<dd><?echo "<h3>".$row['nm_costumer']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">Username</label></dt>
<dd><?echo "<h3>".$row['username']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">Password</label></dt>
<dd><?echo "<h3>".$row['password']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">Alamat</label></dt>
<dd><?echo "<h3>".$row['alamat']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">Provinsi</label></dt>
<dd><?echo "<h3>".$row['provinsi']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">Kode Pos</label></dt>
<dd><?echo "<h3>".$row['kd_pos']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">No Telpon</label></dt>
<dd><?echo "<h3>".$row['no_tlp']."</h3>";?></dd>
</dl>
<?
}
}

?>

</div>
              </div><!-- end of right content-->
                 
  </div>   <!--end of center content -->               
                    
 <div class="clear"></div>
 </div> <!--end of main content-->
</div>
   

     