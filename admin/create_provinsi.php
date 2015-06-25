

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
        
               
     <h2>Create Provinsi</h2>

 <div class="form">
<form action="provinsi_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

                  
               
</dd>

<dl>
<dt><label for="title">Nama Provinsi</label></dt>
<dd><input type="text" name="provinsi_nm" id="provinsi_nm" value="" size="35" /></dd>
</dl>

<dl>
<dt><label for="title">Ongkos Kirim</label></dt>
<dd><input type="text" name="provinsi_ongkos" id="provinsi_ongkos" value="" size="35" /></dd>
</dl>

<dl>
<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</form>
       
		 </div>

      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>
