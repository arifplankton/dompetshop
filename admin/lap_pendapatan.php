

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

          
        
               
     <h2>Entry Laporan Pendapatan</h2>

 <div class="form">
<form action="lap_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

                               
                           
                     


  
</select>
</dd>



<dl>
<dt><label for="title">ID Produk</label></dt>
<dd><input type="text" name="idpro" id="idpro" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">ID Anggota</label></dt>
<dd><input type="text" name="ida" id="ida" value="" size="54"/></dd>
</dl>


<dl>
<dt><label for="title">Total penjualan per Bulan</label></dt>
<dd><input type="text" name="ttp" id="ttp" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Tanggal Laporan</label></dt>
<dd><input type="text" name="tglp" id="tglp" value="" size="54"/></dd>
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
