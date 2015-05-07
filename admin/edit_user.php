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
        
               
     <h2>Edit Costumer</h2>
 
<?php
if(isset($_GET['kd_costumer']))
{
$kd_costumer=$_GET['kd_costumer'];
$qry=mysql_query("SELECT * FROM costumer WHERE kd_costumer=$kd_costumer", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
$row['kd_costumer'];
$row['nm_costumer'];
$row['username'];
$row['password'];
$row['alamat'];
$row['provinsi'];
$row['kd_pos'];
$row['no_tlp'];
  }

?>
 <div class="form">
<form action="user_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>
   <dl>
<dt><label for="title">Kode Costumer</dt>
<dd><input type="text" name="kd_costumer" id="kd_costumer" value="<?php echo $row['kd_costumer']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Nama Costumer</label></dt> 
<dd><input type="text" name="nm_costumer" id="nm_costumer" value="<?php echo $row['nm_costumer']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Username</label></dt> 
<dd><input type="text" name="username" id="username" value="<?php echo $row['username']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Password</label></dt> 
<dd><input type="text" name="password" id="pasword" value="<?php echo $row['password']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Alamat</label></dt>
<dd><input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Provinsi</label></dt>
<dd><input type="text" name="provinsi" id="provinsi" value="<?php echo $row['provinsi']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Kode Pos</label></dt>
<dd><input type="text" name="kd_pos" id="kd_pos" value="<?php echo $row['kd_pos']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">No Telpon</label></dt>
<dd><input type="text" name="no_tlp" id="no_tlp" value="<?php echo $row['no_tlp']; ?>" /></dd>
</dl>

<dl>
<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</dl>
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