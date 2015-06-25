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
<dt><label for="title">Nama Customer</label></dt>
<dd><input type="text" name="customer_nm" id="customer_nm" value="" size="35" required data-validation-required-message/></dd>
</dl>

<dl>
<dt><label for="title">Username</label></dt>
<dd><input type="text" name="customer_uname" id="customer_uname" value="" size="35" required data-validation-required-message/></dd>
</dl>

<dl>
<dt><label for="title">Password</label></dt>
<dd><input type="text" name="customer_pwd" id="customer_pwd" value="" size="35" required data-validation-required-message/></dd>
</dl>

<dl>
<dt><label for="title">Alamat</label></dt> 
<dd><input type="text" name="customer_almt" id="customer_almt" size="35" required data-validation-required-message/></dd>
</dl>

<dl>
<dt><label for="title">Provinsi</label></dt>
<dd><input type="text" name="customer_prov" id="customer_prov" value="" size="35" required data-validation-required-message/></dd>
</dl>

<dl>
<dt><label for="title">Kode Pos</label></dt>
<dd><input type="text" name="customer_kdpos" id="customer_kdpos" value="" size="35" required data-validation-required-message/></dd>
</dl>

<dl>
<dt><label for="title">No Telpon</label></dt>
<dd><input type="text" name="customer_telp" id="customer_telp" value="" size="35" required data-validation-required-message/></dd>
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