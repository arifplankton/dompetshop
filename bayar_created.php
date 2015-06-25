	<?php

	$kd_kirim=$_POST['kd_kirim'];
	$tgl_konfirm=$_POST['tgl_konfirm'];
	$rek=$_POST['rek'];
	$tot_bayar=$_POST['tot_bayar'];
	$status=$_POST['status'];

	?>


<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO konfirmasi_bayar (kd_konfirm,kd_kirim,tgl_konfirm,rek,tot_bayar,status)
	VALUES('','$kd_kirim','$tgl_konfirm','$rek','$tot_bayar','')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{

?>

<script language="javascript">
			document.location="index.php?id=viewall";
			</script>
			<?php
}

?>
  