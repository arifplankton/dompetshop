<?php
include 'config.php';
include 'header.php';
?>
<body>   
<div class="right_content">    
     <h2>User Baru</h2>

 <div class="form">
<form action="user_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

 </select>
</dd>
<dl>
<dt><label for="title">Kode Costumer</label></dt>
<dd><input type="text" name="kd_costumer" id="kd_costumer" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Nama Costumer</label></dt>
<dd><input type="text" name="nm_costumer" id="nm_costumer" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Username</label></dt>
<dd><input type="text" name="username" id="username" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Password</label></dt>
<dd><input type="password" name="password" id="password" value="" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Alamat</label></dt> 
<dd><input type="text" name="alamat" id="alamat" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Provinsi</label></dt>
<dd><input type="text" name="provinsi" id="provinsi" value="" size="35"/></dd>
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