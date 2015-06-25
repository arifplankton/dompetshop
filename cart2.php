<?php
include "config.php";
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM pesan");
	$row = mysql_num_rows($sql);
	$jml = mysql_fetch_array($sql);
	
	echo "<span class='KetCart'></span>";
	?>
	<div class="alert alert-info">
kamu memiliki &nbsp<?php  echo $row  ?> item di keranjang

</div>