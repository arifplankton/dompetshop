<?php 
// http://phpbego.wordpress.com
require "config.php";

	
		$sql = "SELECT * FROM customer" ;
		$hasil = mysql_query($sql);
		
		$strhtml = "<h3>Laporan Semua Customer Dompet Original</h3>";
		$strhtml .= "<table>
			<tr>
				<th>No</th>
				<th>Id Customer</th>
				<th>Nama Customer</th>
				<th>Password</th>
				<th>Alamat</th>
				<th>Provinsi</th>
				<th>Kode Pos</th>
				<th>No telphon</th>
				
			</tr>";
		$no = 0;
		while ($row = mysql_fetch_array($hasil)){
		$no++;
		$strhtml .= "<tr>
				<td>$no</td>
				<td>$row[customer_id]</td>
				<td>$row[customer_nm]</td>
				<td>$row[customer_uname]</td>
				<td>$row[customer_pwd]</td>
				<td>$row[customer_almt]</td>
				<td>$row[customer_prov]</td>
				<td>$row[customer_kdpos]</td>
				<td>$row[customer_telp]</td>
				
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
