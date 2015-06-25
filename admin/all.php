<!-- http://phpbego.wordpress.com -->
<DOCTYPE html>
<html>
	<head>
		<title>PHPBeGO :: Simple KRS with mPDF</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
		<?php 

		require "config.php";

		$sql = "SELECT * FROM blog" ;
		$hasil = mysql_query($sql);
		echo "<div class='well'><a class='btn btn-primary' href='printpdf.php'>Cetak PDF</a></div>";
		$strhtml = "<h3>Kartu Rencana Studi</h3>";
		$strhtml .= "<table class='table table-bordered'>
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
		echo $strhtml;

		?>
		<div class='well'><a class='btn btn-primary' href='printblog.php'>Cetak PDF</a></div>";
		</div>
	</body>
</html>
	
