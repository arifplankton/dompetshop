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

	$a_nama=$_POST['a_nama'];
	$alamat=$_POST['alamat'];
	$kd_provinsi=$_POST['kd_provinsi'];
	$kd_pos=$_POST['kd_pos'];
	$no_tlp=$_POST['no_tlp'];
	$tot_bayar=$_POST['tot_bayar'];
	$status=$_POST['status'];

	?>


<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO kirim (kd_kirim,a_nama,alamat,kd_provinsi,kd_pos,no_tlp,tot_bayar,status)
	VALUES('','$a_nama','$alamat','$kd_provinsi','$kd_pos','$no_tlp','$tot_bayar','belum kirim')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{

?>

<script language="javascript">
			document.location="konfirm_bayar.php?id=viewall";
			</script>
			<?php
}

?>
  