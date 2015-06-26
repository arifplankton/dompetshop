<?php 
// http://phpbego.wordpress.com
require "config.php";
?>

<?php echo "LAPORAN DOMPET ORIGINAL";
	
		$sql = "SELECT * FROM pesan" ;
		$hasil = mysql_query($sql);

		$strhtml = "<h3>Laporan Semua Pesan</h3>";
		$strhtml .= "<table>
			<tr>
				<th>No</th>
				<th>Id Pesan</th>
				<th>Customer Id</th>
				<th>Produk Id</th>
				<th>Id Session</th>
				<th>Tanggal Pesan</th>
				<th>Jumlah Pesan</th>
				<th>Status</th>
				
			</tr>";
		$no = 0;
		while ($row = mysql_fetch_array($hasil)){
		$no++;
		$strhtml .= "<tr>
				<td>$no</td>
				<td>$row[pesan_id]</td>
				<td>$row[customer_id]</td>
				<td>$row[produk_id]</td>
				<td>$row[id_session]</td>
				<td>$row[tgl_pesan]</td>
				<td>$row[pesan_jml]</td>
				<td>$row[status]</td>
				
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
