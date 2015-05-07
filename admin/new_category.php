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
        
               
     <h2>Posting Baru</h2>
<form id="form1" name="form1" method="post" action="category_created.php">
Enter a New Category Name : 
<label for="cat"></label>
<input type="text" name="cat" id="cat" />
<input type="submit" name="submit" id="submit" value="Submit" />
</form>
       
		 </div>

      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>
