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

    
    <div class="right_content">            
        
               
     <h2>Edit Provinsi</h2>
 
<?php
if(isset($_GET['provinsi_id']))
{
$prov=$_GET['provinsi_id'];
$qry=mysql_query("SELECT * FROM provinsi WHERE provinsi_id=$prov", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
 $row['provinsi_id'];
 $row['provinsi_nm'];
 $row['provinsi_ongkos'];
}

?>
 <div class="form">
<form action="provinsi_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

<dl>
<dt><label for="title">Id Provinsi</label></dt>
<dd><input type="text" name="provinsi_id" id="provinsi_id" value="<?php echo $row['provinsi_id']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Nama Provinsi</label></dt>
<dd><input type="text" name="provinsi_nm" id="provinsi_nm" value="<?php echo $row['provinsi_nm']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Ongkos Kirim</label></dt>
<dd><input type="text" name="provinsi_ongkos" id="provinsi_ongkos" value="<?php echo $row['provinsi_ongkos']; ?>"/></dd>
</dl>

<p align="center">
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /></dd>
</p>
</form>
		 </div>
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>
</div>
</body>
</html>
<?include 'footer.php';?>