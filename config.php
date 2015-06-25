<?php
/* connecting to MySql */
$host="localhost";
$user="root";
$pass="";
$con = mysql_connect($host,$user,$pass);
if(!$con)
{
die("connection to database failed".mysql_error());
}

/* selecting the database "complete_cms" */
$dataselect = mysql_select_db("poket",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}
?>