<?php


include 'config.php';
include 'header.php';

/*
menampilkan List dari table blog dan membatasinya menggunakan fungsi limit apabila 6 maka yg tampil 6 list saja
*/
$qry=mysql_query("SELECT * FROM blog LIMIT 0, 6", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}


while($row=mysql_fetch_array($qry))
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href=articles.php?cat=".$row['blog_id'].">".$row['blog_id']."</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
}
?>
</div>

<div id="l_space">
<h2></h2>
<?php


if(isset($_GET['blog_id']))
{
$id=$_GET['blog_id'];
$qry=mysql_query("SELECT * FROM blog WHERE blog_id=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['blog_judul']."</h2>";
echo "<img src=".$row['file_gambar']." />";

echo "<p>".$row['blog_isi']."</p>";
}
}

  
include 'footer.php';
?>
