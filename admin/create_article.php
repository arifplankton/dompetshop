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

<div class="right_content">            
        
               
     <h2>Posting Artikel Blog</h2>

 <div class="form">
<form action="article_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>        
               
</dd>

<dl>
<dt><label for="title">Judul :</label></dt>
<dd><input type="text" name="blog_judul" id="blog_judul" value="" size="50" /></dd>
</dl>

<dl>
<dt><label for="title">Date :</label></dt>
<dd><input type="date" name="tgl_post" required class=""   size="50" /></dd>
</dl>

<dl>
<dt><label for="title">Gambar :</label></dt> 
<dd><input type="file" name="blog_gambar" id="blog_gambar" /></dd>
</dl>

<label for="title">Isi Blog :</label>
<textarea name="blog_isi" id="blog_isi" cols="125" rows="35" ></textarea>
<dl>

<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</form>
       
		 </div>

      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>
