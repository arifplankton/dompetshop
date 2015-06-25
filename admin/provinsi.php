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

if(isset($_GET['provinsi_id']))
{
$id=$_GET['provinsi_id'];
$qry=mysql_query("SELECT * FROM provinsi WHERE provinsi_id=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{
?>
<dl>
<dt><label for="title">Id Provinsi</label></dt>
<dd><?echo "<h3>".$row['provinsi_id']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">Nama Provinsi</label></dt>
<dd><?echo "<h3>".$row['provinsi_nm']."</h3>";?></dd>
</dl>

<dl>
<dt><label for="title">Ongkos Provinsi</label></dt>
<dd><?echo "<h3>".$row['provinsi_ongkos']."</h3>";?></dd>
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
   

     