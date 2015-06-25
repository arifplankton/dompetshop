
<?php
include 'header.php';
include 'config.php';

?>

<?php
$subtotal = $_POST['subtotal']; 



$total = $subtotal + 10000;
?>

<div class="container theme-showcase" role="main">
      
      
<div class="jumbotron">
        <h1>Detail Pengiriman </h1>
        <p align="justify">Selamat datang di dashboard akun customer anda.selamat menikmati berbelanja di dompetshop.com marketplace #1 di indonesia yang menyediakan berbagai macam dompet untuk pria maupun wanita so happy shopping :D</p>


 <div class="form">
<form action="send_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>                         
              
</select>
</dd>

<dl>
<dt><label for="title">Atas Nama</label></dt>
<dd><input type="text" name="an" id="atas_nama" value="<?php echo"" . $_SESSION['customer_nm'] .  "" ;?>" size="35"/></dd>
</dl>

<dl>
<dt><label for="title">Alamat Kirim</label></dt>
<dd><input type="text" name="alamat" id="alamat_kirim"  size="35" value="<?php echo"" . $_SESSION['customer_almt'] .  "" ;?>" /></dd>
</dl>

<d1>
<dt><label for="title">Provinsi</label></dt>
                    
                <dd> <select size="1" name="provinsi_id" id="provinsi_id" size="50">          

					<?php
					$qry=mysql_query("SELECT * FROM provinsi ", $con);
					if(!$qry)
					{					die("Query Failed: ". mysql_error());

					}

					while($row=mysql_fetch_array($qry))
					{
					echo "<option value='".$row['provinsi_nm']."'>".$row['provinsi_nm']."</option>";
					}
					?>
  
</select>
</dd>
</d1>

<dl>
<dt><label for="title">Kode Pos</label></dt> 
<dd><input type="text" name="kd_pos" id="kode_pos" size="35" value="<?php echo"" . $_SESSION['customer_kdpos'] .  "" ;?>" /></dd>
</dl>

<dl>
<dt><label for="title">No Telpon</label></dt> 
<dd><input type="text" name="no_tlp" id="telpon" size="35" value="<?php echo"" . $_SESSION['customer_telp'] .  "" ;?>" /></dd>
</dl>


<dl>
<dt><label for="title">Total Bayar</label></dt> 
<dd><input type="text" name="tot_bayar" id="total_byr" value="<? echo $total; ?>" size="35"/></dd>
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
