<?php 
// http://phpbego.wordpress.com
require "config.php";

	
		$sql = "SELECT * FROM blog" ;
		$hasil = mysql_query($sql);
		$strhtml = "<h3>Artikel Blog Dompet Original</h3>";
		$strhtml .= "<table>
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>Judul</th>
				<th>Tanggal Pos</th>
				<th>Gambar</th>
				<th>Isi</th>
			</tr>";
		$no = 0;
		while ($row = mysql_fetch_array($hasil)){
		$no++;
		$strhtml .= "<tr>
				<td>$no</td>
				<td>$row[blog_id]</td>
				<td>$row[blog_judul]</td>
				<td>$row[tgl_post]</td>
				<td>$row[blog_gambar]</td>
				<td>$row[blog_isi]</td>
		   </tr>";
		}
		$strhtml .= "</table>";
		$now = date("F j, Y, H:i a", time()+60*60*7 );
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
