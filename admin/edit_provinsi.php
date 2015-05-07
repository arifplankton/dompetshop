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
if(isset($_GET['kd_provinsi']))
{
$kd_provinsi=$_GET['kd_provinsi'];
$qry=mysql_query("SELECT * FROM provinsi WHERE kd_provinsi=$kd_provinsi", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);

 $row['kd_provinsi'];
 $row['nm_provinsi'];
 $row['ongkos_kirim'];
}

?>
 <div class="form">
<form action="provinsi_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>
<dl>
<dt><label for="title">Kode Provinsi</label></dt>
<dd><input type="text" name="kd_provinsi" id="kd_provinsi" value="<?php echo $row['kd_provinsi']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Nama Provinsi</label></dt>
<dd><input type="text" name="nm_provinsi" id="nm_provinsi" value="<?php echo $row['nm_provinsi']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Ongkos Kirim</label></dt>
<dd><input type="text" name="ongkos_kirim" id="ongkos_kirim" value="<?php echo $row['ongkos_kirim']; ?>"/></dd>
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