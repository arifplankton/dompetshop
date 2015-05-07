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
include"main.php";
?>
<div class="right_content">            
        
               
     <h2>Blog</h2>
<div id="left">


<ul>

</ul>
</div>
<div id="right">

    <?php
if(isset($_GET['id'])=="viewall")
{
$qry=mysql_query("SELECT * FROM blog order by blog.id DESC ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
echo "<table>";
/* mengambil data dr field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<tr>";
echo "<td><a href=articles.php?id=".$row['id'].">".$row['title']."</a></td>";
echo "<td><a href=edit_article.php?id=".$row['id'].">edit</a></td>";
echo "<td><a href=deleting_article.php?id=".$row['id'].">delete</a></td>";
echo "</tr>";
}
echo "</table>";
}
?>
  
</div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	 </div>
