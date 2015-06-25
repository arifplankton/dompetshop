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
?>

<body>
      
     <h2>Konfirmasi Bayar</h2>

 <div class="form">
<form action="bayar_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>                         
              
</select>
</dd>

<dl>
<dt><label for="title">Kode Kirim</label></dt>
<dd><input type="text" name="kd_kirim" id="kd_kirim" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Tanggal Konfirm</label></dt>
<dd><input type="date" name="tgl_konfirm" id="tgl_konfirm" value="" size="25"/></dd>
</dl>

<dl>
<dt><label for="title">Rekening</label></dt>
<dd>
<select  size="1" name="rek" id="rek" size="50">
	<option>Pilih Rekening</option>

	<option></option>
  <option value="1">BCA</option>
  <option value="2">BNI</option>
  <option value="3">BRI</option>
  <option value="4">MANDIRI</option>
  </select>
</dd>
</dl

<dl>
<dt><label for="title">Total Bayar</label></dt>
<dd><input type="text" name="tot_bayar" id="tot_bayar" value="" size="25"/></dd>
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
