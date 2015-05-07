<?php
include 'config.php';
include 'header.php';
?>
<body>   
<div class="right_content">    
     <h2>Kirim</h2>

 <div class="form">
<form action="send_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

 </select>
</dd>
<dl>
<dt><label for="title">Kode Kirim</label></dt>
<dd><input type="text" name="kd_kirim" id="kd_kirim" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Kode Konfirm</label></dt>
<dd><input type="text" name="kd_konfirm" id="kd_konfirm" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Total Kirim</label></dt>
<dd><input type="text" name="tot_kirim" id="tot_kirim" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Tanggal Kirim</label></dt>
<dd><input type="date" name="tgl_kirim" id="tgl_kirim" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Alamat</label></dt> 
<dd><input type="text" name="alamat" id="alamat" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Kode Provinsi</label></dt>
<dd><input type="text" name="kd_provinsi" id="kd_provinsi" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Kode Pos</label></dt>
<dd><input type="text" name="kd_pos" id="kd_pos" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">No Telpon</label></dt>
<dd><input type="text" name="no_tlp" id="no_tlp" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Status</label></dt>
<dd><input type="text" name="status" id="status" value="" size="35"/></dd>
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
<?php
include 'footer.php';
?>