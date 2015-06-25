<?
$arhari=array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
$arbulan=array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$tanggal=date("d");
$vbulan=date("n");
$vhari=date("w");
$tahun=date("Y");
$hari=$arhari[$vhari];
$bulan=$arbulan[$vbulan];
echo"$hari, $tanggal $bulan $tahun";
?>