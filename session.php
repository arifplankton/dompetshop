<?php
session_start();
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='arif')
{
header("Location:login.php?id=You are not authorised to access this page unless you are customer of this website");
}
}
else
{
header("Location:login.php?id=You are not authorised to access this page unless you are customer of this website");
}
?>