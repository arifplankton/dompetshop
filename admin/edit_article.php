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
if(isset($_GET['blog_id']))
{
$blog_id=$_GET['blog_id'];
$qry=mysql_query("SELECT * FROM blog WHERE blog_id=$blog_id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);

 $row['blog_id'];
 $row['blog_judul'];
 $row['tgl_post'];
 $row['blog_gambar'];
 $row['blog_isi'];

}

?>
 <div class="form">
<form action="article_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>
<dl>
<dt><label for="title">Id Blog</label></dt>
<dd><input type="text" name="blog_id" id="blog_id" value="<?php echo $row['blog_id']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Judul </label></dt>
<dd><input type="text" name="blog_judul" id="blog_judul" value="<?php echo $row['blog_judul']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Date</label></dt>
<dd><input type="date" name="tgl_post" id="tgl_post" value="<?php echo $row['tgl_post']; ?>" /></dd>
</dl>

<dl>
<dt><label for="title">Gambar</label></dt>
<dd><input type="file" name="blog_gambar" id="file_gambar" /></dd>
</dl>

<dl>
<label for="title">Contents </label>
<textarea name="blog_isi" id="blog_isi" cols="100" rows="25" ><?php echo $row['blog_isi']; ?></textarea>
</p>
<p align="center">
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /></dd>
</p>
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