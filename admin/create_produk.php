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
				
       
 	<script type="text/javascript" language="javascript">
	function hitung(){
	var hrg_beli = document.getElementById('hrg_beli').value;
	var laba = document.getElementById('laba').value;
	if(laba =='10'){
		var laba2 = ( parseInt(hrg_beli) * 0.01);
		var jual = laba2 + parseInt(hrg_beli);
	}else if( laba =='25'){
		var laba2 = ( parseInt(hrg_beli) * 0.25);
		var jual = laba2 + parseInt(hrg_beli);

	}else if( laba =='50'){
		var laba2 = ( parseInt(hrg_beli) * 0.5);
		var jual = laba2 + parseInt(hrg_beli);
	}
	var harga = parseInt(jual);

	document.getElementById('hrg_jual').innerHTML = harga;
	document.getElementById('hrg_jual').value = harga;
	}				
	</script>

<h2>Entry Produk</h2>

 <div class="form">
<form action="produk_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>



<d1>
<dt><label for="title">Kategori</label></dt>
                    
                <dd> <select size="1" name="kategori_id" id="kategori_id" size="50">          

					<?php
					$qry=mysql_query("SELECT * FROM kategori ", $con);
					if(!$qry)
					{					die("Query Failed: ". mysql_error());

					}

					while($row=mysql_fetch_array($qry))
					{
					echo "<option value='".$row['kategori_nm']."'>".$row['kategori_nm']."</option>";
					}
					?>
  
</select>
</dd>
</d1>

<dl>
<dt><label for="title">Nama Produk</label></dt>
<dd><input type="text" name="produk_nm" id="produk_nm" value="" size="25"/></dd>
</dl>

<dl>
<dt><label for="title">Harga Beli</label></dt>
<dd><input  type="text" name="hrg_beli" id="hrg_beli"  size="25"/></dd>
</dl>

<dl>
<dt><label for="title">Laba</label></dt>
<dd>
<select  size="1" name="laba" id="laba" size="50" onclick="hitung()">
	<option>Pilih Laba</option>
  <option value="10">10%</option>
  <option value="25">25%</option>
  <option value="50">50%</option>
  </select>
</dd>
</dl

<dl>
<dt><label for="title">Harga Jual</label></dt>
<dd><input  type="text" name="hrg_jual" id="hrg_jual"  size="25"/></dd>
</dl>

<dl>
<dt><label for="title">Gambar</label></dt> 

<dd><input type="file" name="gambar" id="gambar" /></dd>
</dl>

<label for="title">Deskripsi</label>
<textarea name="produk_deskripsi" id="produk_deskripsi" cols="50" rows="10" ></textarea>
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
