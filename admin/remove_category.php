

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
        
               
     <h2>Hapus Kategori</h2>
<?php
$qry=mysql_query("SELECT * FROM category", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
?>
<form id="form1" name="form1" method="post" action=proses/"category_removed.php">
Select a Category to be Removed : 
<label for="category"></label>
<select name="category" id="category">
<?php
while($row=mysql_fetch_array($qry))
{
echo "<option value='".$row['category']."'>".$row['category']."</option>";
}
?>

</select>
<input type="submit" name="submit" id="submit" value="Remove" />
</form>
       
		 </div>

      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>
