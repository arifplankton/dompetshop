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
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM blog WHERE id=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);

 $row['id'];
 $row['title'];
 $row['tgl_post'];
 $row['gambar'];
 $row['contents'];

}

?>
 <div class="form">
<form action="article_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>
<dl>

<dd><input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" /></dd>
</dl>
<dt><label for="title">Judul </label></dt>
<dd><input type="text" name="title" id="title" value="<?php echo $row['title']; ?>" /></dd>
</dl>
<dl>
<dt><label for="tgl_post">Date</label></dt>
<dd><input type="date" name="tgl_post" id="tgl_post" value="<?php echo $row['tgl_post']; ?>" /></dd>
</dl>
<dl>
<dt><label for="gambar">Gambar</label></dt>
<dd><input type="file" name="gambar" id="file_gambar" /></dd>
</dl>
<dl>
<label for="cont">Contents </label>
<textarea name="contents" id="contents" cols="125" rows="35" ><?php echo $row['contents']; ?></textarea>
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