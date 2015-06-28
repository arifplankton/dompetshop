<?php

  include "config.php";  
  include "header.php" ;
         
    ?>

     <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <div class="container">

        <div class="row">
            
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        
        <!-- /.row -->
<?php


/*
Selecting the last added articles to display in the secton - "Breaking news" from the table "articles"
*/
$qry=mysql_query("SELECT * FROM blog order by blog_id desc ", $con);
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
    ?>    <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <?php echo "<p>".$row['tgl_post']."</p>";?>
            </div>
            <div class="col-md-3">
                <a href="">
                            <img src="./admin/<?php echo $row['blog_gambar'];?>" width="250px" height="200px" />

                    
                </a>
                
           </div>
            <div class="col-md-8">
                <h3>
                    <a href="<?php echo $row['blog_id'];?>"><?php echo "<h2>".$row['blog_judul']."</h2>";?></a>
                </h3>
                <p>by <a href="#">admin</a>
                </p>
                <?php echo "<p>".substr($row['blog_isi'],0,500)."</p>";?>
                <a class="btn btn-primary" <?php echo "href=articles.php?id=".$row['blog_id'].""?>>Read more</a>
           </div>
        </div>
        <!-- /.row -->





       



<?php
}




?>



                

    
</html>

<?php
include "footer.php" ;
     ?>