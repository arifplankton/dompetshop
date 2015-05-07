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
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href=articles.php?cat=".$row['blog'].">".$row['blog']."</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
}
?>
</div>

<div id="l_space">
<h2>News::</h2>
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
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";
echo "<img src=".$row['gambar']." />";
echo "<p>".$row['contents']."</p>";
}
}

/*
based on the category name received from index.php file the last added article is displayed
*/
if(isset($_GET['cat']))
{
//echo $_GET['cat'];
$cat=$_GET['cat'];
$qry=mysql_query("SELECT * FROM blog order by articles.id DESC LIMIT 0, 5", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* mengambil data dari field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";
echo "<img src=".$row['gambar']." />";
echo "<p>".$row['contents']."</p>";
}
}

?>

</div>

 

  <div id="r_space">
<h2>News</h2>
<?php

if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT contents FROM blog WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
$cat=$row['category'];

/*
kode di bawah ini untuk menampilkan semua tittle artikel yang di ambil dr id nya dan menaruhnya di article.php
*/                           
$qry=mysql_query("SELECT * FROM blog order by articles.id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
while($row=mysql_fetch_array($qry))
{
//echo $row['title'];
echo "<li><a href=articles.php?id=".$row['id'].">".$row['title']."</a></li>";
}
}

          
if(isset($_GET['cat']))
{
$cat=$_GET['cat'];


$qry=mysql_query("SELECT * FROM blog order by articles.id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
while($row=mysql_fetch_array($qry))
{
echo "<li><a href=articles.php?id=".$row['id'].">".$row['title']."</a></li>";
}

}
include 'footer.php';
?>
