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
if(isset($_GET['customer_id']))
{
$customer_id=$_GET['customer_id'];
$qry=mysql_query("SELECT * FROM customer WHERE customer_id=$customer_id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
$row['customer_id'];
$row['customer_nm'];
$row['customer_uname'];
$row['customer_pwd'];
$row['customer_almt'];
$row['customer_prov'];
$row['customer_kdpos'];
$row['customer_telp'];
  }

?>
 <div class="form">
<form action="user_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

<dl>
<dt><label for="title">Id Customer</label></dt> 
<dd><input type="text" name="customer_id" id="customer_id" value="<?php echo $row['customer_id']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Nama Customer</label></dt> 
<dd><input type="text" name="customer_nm" id="customer_nm" value="<?php echo $row['customer_nm']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Username</label></dt> 
<dd><input type="text" name="customer_uname" id="customer_uname" value="<?php echo $row['customer_uname']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Password</label></dt> 
<dd><input type="text" name="customer_pwd" id="customer_pwd" value="<?php echo $row['customer_pwd']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Alamat</label></dt>
<dd><input type="text" name="customer_almt" id="customer_almt" value="<?php echo $row['customer_almt']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Provinsi</label></dt>
<dd><input type="text" name="customer_prov" id="customer_prov" value="<?php echo $row['customer_prov']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Kode Pos</label></dt>
<dd><input type="text" name="customer_kdpos" id="customer_kdpos" value="<?php echo $row['customer_kdpos']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">No Telpon</label></dt>
<dd><input type="text" name="customer_telp" id="customer_telp" value="<?php echo $row['customer_telp']; ?>" /></dd>
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