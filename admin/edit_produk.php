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

    
    <div class="right_content">            
        
               
     <h2>Edit Post</h2>
 
<?php
if(isset($_GET['produk_id']))
{
$produk_id=$_GET['produk_id'];
$qry=mysql_query("SELECT * FROM produk WHERE produk_id=$produk_id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);

 $row['produk_id'];
 $row['blog_judul'];
 $row['kategori_id'];
 $row['produk_nm'];
 $row['tgl_input'];
 $row['hrg_beli'];
 $row['laba'];
 $row['hrg_jual']; 
 $row['gambar'];
 $row['produk_deskripsi'];
 
}

?>
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


 <div class="form">
<form action="produk_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

<dl>
<dt><label for="title">Id Produk</label></dt>
<dd><input type="text" name="produk_id" id="produk_id" value="<?php echo $row['produk_id']; ?>" /></dd>
</dl>

<d1>
<dt><label for="title">Kategori</label></dt>
                    
                <dd> <select size="1" name="kategori_id" id="kategori_id" size="50" >          

          <?php
          $qry=mysql_query("SELECT * FROM kategori ", $con);
          if(!$qry)
          {         die("Query Failed: ". mysql_error());

          }

          while($row=mysql_fetch_array($qry))
          {
          echo "<option value='".$row['kategori_nm']."'>".$row['kategori_nm']."</option>";
          }
          ?>
  
</select><?php echo $row['kategori_id']; ?>
</dd>
</d1>

<dl>
<dt><label for="title">Nama Produk</label></dt>
<dd><input type="text" name="produk_nm" id="produk_nm" value="" size="25"/><?php echo $row['produk_nm']; ?></dd>
</dl>

<dl>
<dt><label for="title">Harga Beli</label></dt>
<dd><input  type="text" name="hrg_beli" id="hrg_beli"  size="25"/><?php echo $row['hrg_beli']; ?></dd>
</dl>

<dl>
<dt><label for="title">Laba</label><?php echo $row['laba']; ?></dt>
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
<dd><input  type="text" name="hrg_jual" id="hrg_jual"  size="25"/><?php echo $row['hrg_jual']; ?></dd>
</dl>

<dl>
<dt><label for="title">Gambar</label></dt> 

<dd><input type="file" name="gambar" id="gambar" /><?php echo $row['gambar']; ?></dd>
</dl>

<label for="title">Deskripsi</label>
<textarea name="produk_deskripsi" id="produk_deskripsi" cols="50" rows="10" ><?php echo $row['produk_deskripsi']; ?></textarea>
<dl>

<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</dl>

</form>
		 </div>
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>
</div>
</body>
</html>
<?include 'footer.php';?>