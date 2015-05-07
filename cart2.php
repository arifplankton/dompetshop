<?php
include "config.php";
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM cart");
	$row = mysql_num_rows($sql);
	$jml = mysql_fetch_array($sql);
	
	echo "<span class='KetCart'>$row item</span>";
	?>