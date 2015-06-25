

<?php
/* connecting to MySql */
$host="localhost";
$user="root";
$password="";
$con = mysql_connect($host,$user,$password);
if(!$con)
{
die("connection to database failed".mysql_error());
}

/* select db */
$dataselect = mysql_select_db("poket",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}
?>