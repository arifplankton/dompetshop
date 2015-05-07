

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

          
        
               
     <h2>Konfirm Bayar</h2>

 <div class="form">
<form action="confirm_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

                               
                           
                     


  
</select>
</dd>
<dl>
<dt><label for="title">Kode Konfirm</label></dt>
<dd><input type="text" name="kd_konfirm" id="kd_konfirm" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">No Pesan</label></dt>
<dd><input type="text" name="no_pesan" id="no_pesan" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Kode Provinsi</label></dt>
<dd><input type="text" name="kd_provinsi" id="kd_provinsi" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Tanggal Konfirm</label></dt>
<dd><input type="date" name="tgl_konfirm"  required class="" placeholder="YYYY-MM-DD"  size="35" /></dd>
</dl>

<dl>
<dt><label for="title">Total Bayar</label></dt>
<dd><input type="text" name="tot_bayar" id="tot_bayar" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Status</label></dt> 
<dd><input type="text" name="status" id="status" size="35"/></dd>
</dl>

<dl>
<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</dl>

</form>



</body>

</div>
</div>
</body>
