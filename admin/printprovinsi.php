<?php 
// http://phpbego.wordpress.com
require "config.php";

	
		$sql = "SELECT * FROM provinsi" ;
		$hasil = mysql_query($sql);
		
		$strhtml = "<h3>Laporan Semua Provinsi</h3>";
		$strhtml .= "<table>
			<tr>
				<th>No</th>
				<th>Id Provinsi</th>
				<th>Nama Provinsi</th>
				<th>Ongkos Kirim</th>
				
			</tr>";
		$no = 0;
		while ($row = mysql_fetch_array($hasil)){
		$no++;
		$strhtml .= "<tr>
				<td>$no</td>
				<td>$row[provinsi_id]</td>
				<td>$row[provinsi_nm]</td>
				<td>$row[provinsi_ongkos]</td>
				
		   </tr>";
		}
		$strhtml .= "</table>";
		$now = date("j F, Y, H:i a", time()+60*60*7 );
		$strhtml .= "<p>Dicetak Pada : $now <p>";

// Panggil mPdf
require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/style.css');
$fileName = 'reportPdf--' . date('d-m-Y') . '-' . date('H.i.s');

$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','D');
