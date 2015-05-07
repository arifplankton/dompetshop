<?php

  include "config.php";  
  include "header.php" ;
         
    ?>

     <div class="container">
      <div>
        <div>
       <?php


/*
Selecting the last added articles to display in the secton - "Breaking news" from the table "articles"
*/
$qry=mysql_query("SELECT * FROM blog order by id desc ", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

/* Fetching and dispalying the datas to breakign news section from the databse table "articles" */
/*
the php in-built function substr() is used to limit the no of characters displayed in breakign news section to 200 and when "Read more" is clicked article id is transfered through url to articles.php for displaying in full 
*/
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";

echo "<p>".substr($row['contents'],0,1000)."</br><a href=articles.php?id=".$row['id']." ><b> Read more</b></a></p>";
}


?>



     </div>
      </div>
    </div>
    </body>

</html>

<?php
include "footer.php" ;
     ?>