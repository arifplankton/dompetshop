<?php 
mysql_connect("localhost","root","");
mysql_select_db("poket");

$sql = mysql_query("SELECT * FROM blog order by blog_id");
$data = array ();
while ($row=mysql_fetch_assoc($sql)){
array_push($data,$row);
}

$judul = "Data Semua Artikel Dompet Original";
$header = array {
	array ("label"=>"ID", "length"=>30, "align"=>"L"),
	array ("label"=>"Judul", "length"=>30, "align"=>"L"),
	array ("label"=>"Tanggal", "length"=>30, "align"=>"L"),
	array ("label"=>"Gambar", "length"=>30, "align"=>"L"),
	array ("label"=>"Isi", "length"=>30, "align"=>"L"),
};

require_once ("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf-> AddPage();

$pdf -> PDF_setfont('Arial','B', '12');
$pdf -> SetFillColor (139,69,19);
$pdf -> SetTextColor (255);
$pdf -> SetDrawColor (222,184,135);
foreach ($header as $kolom) {
	$pdf -> ceil($kolom ['lenght'], 5, $kolom ['label'],1,'0',$kolom ['align'], true);
	# code...
}
$pdf -> Ln ();

$pdf -> SetFillColor (245,222,179);
$pdf -> SEtTextColor (0);
$pdf -> SetFont ('');
$fill = false;
foreach ($data as $bari) {
	$i = 0;
	foreach ($baris as $cell) {
		$pdf -> Cell ($header [$i] ['length'] ,5,$cell,1,0,$kolom['align'],$fill);
		$++;
	}
	$fill = !$fill;
	$pdf -> Ln();
}

$pdf -> Output();


?>