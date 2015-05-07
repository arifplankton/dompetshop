

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

          
        
               
     <h2>Entry Produk</h2>

 <div class="form">
<form action="lapstok_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

                               
                           
                     


  
</select>
</dd>



<dl>
<dt><label for="title">id anggota</label></dt>
<dd><input type="text" name="ida" id="ida" value="" size="54"/></dd>
</dl>
<dl>
<dt><label for="title">id pengurus</label></dt>
<dd><input type="text" name="idp" id="idp" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">id_produk</label></dt>
<dd><input type="text" name="ido" id="ido" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">no faktur</label></dt>
<dd><input type="text" name="nf" id="nf" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">jumlah</label></dt>
<dd><input type="text" name="jml" id="jml" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Tanggal Penjualan</label></dt>
<dd><input type="text" name="tgp" id="tgp" value="" size="54"/></dd>
</dl>



<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</dl>

</form>



</body>

</div>
</div>
</body>
