<?php 
// http://phpbego.wordpress.com
require "config.php";

	
		$sql = "SELECT * FROM produk" ;
		$hasil = mysql_query($sql);
		$strhtml = "<h3 align = 'center'>LAPORAN DOMPET ORIGINAL</h3>";
		$strhtml = "<h3>Artikel Blog Dompet Original</h3>";
		$strhtml .= "<table>
			<tr>
				<th>No</th>
				<th>Id Produk</th>
				<th>Kategori</th>
				<th>Nama Produk</th>
				<th>Tanggal Input</th>
				<th>Harga Beli</th>
				<th>Laba (%)</th>
				<th>Harga Jual</th>
				<th>Gambar</th>
				<th>Deskripsi</th>
			</tr>";
		$no = 0;
		while ($row = mysql_fetch_array($hasil)){
		$no++;
		$strhtml .= "<tr>
				<td>$no</td>
				<td>$row[produk_id]</td>
				<td>$row[kategori_id]</td>
				<td>$row[produk_nm]</td>
				<td>$row[tgl_input]</td>
				<td>$row[hrg_beli]</td>
				<td>$row[laba]</td>
				<td>$row[hrg_jual]</td>
				<td>$row[gambar]</td>
				<td>$row[produk_deskripsi]</td>
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
<?php 
// http://phpbego.wordpress.com
require "config.php";

	
		$sql = "SELECT * FROM produk" ;
		$hasil = mysql_query($sql);
		$strhtml = "<h3 align = 'center'>LAPORAN DOMPET ORIGINAL</h3>";
		$strhtml = "<h3>Artikel Blog Dompet Original</h3>";
		$strhtml .= "<table>
			<tr>
				<th>No</th>
				<th>Id Produk</th>
				<th>Kategori</th>
				<th>Nama Produk</th>
				<th>Tanggal Input</th>
				<th>Harga Beli</th>
				<th>Laba (%)</th>
				<th>Harga Jual</th>
				<th>Gambar</th>
				<th>Deskripsi</th>
			</tr>";
		$no = 0;
		while ($row = mysql_fetch_array($hasil)){
		$no++;
		$strhtml .= "<tr>
				<td>$no</td>
				<td>$row[produk_id]</td>
				<td>$row[kategori_id]</td>
				<td>$row[produk_nm]</td>
				<td>$row[tgl_input]</td>
				<td>$row[hrg_beli]</td>
				<td>$row[laba]</td>
				<td>$row[hrg_jual]</td>
				<td>$row[gambar]</td>
				<td>$row[produk_deskripsi]</td>
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
