<?php
	session_start();
	if($_SESSION['id']!=NULL && $_SESSION['name']!=NULL){
		$login='true';
		$s_uid=$_SESSION['customer_id'];
		$s_nama=$_SESSION['customer_nm'];
		}
?>