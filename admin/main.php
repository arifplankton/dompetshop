<?php

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
 <div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_center">
        
       <div class="column2">
        
        <br class="clear" />
      </div>
     
      
      



     