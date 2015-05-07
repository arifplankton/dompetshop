<?php 
case"editproduct":
		$edit = mysql_query("SELECT * FROM blog WHERE id='$_GET[id]'");
		$d = mysql_fetch_array($edit);
		echo"<h2>Edit Blog</h2>
			<form method=POST enctype='multipart/form-data' action='aksi.php?mod=product&act=update'>
				<input type=hidden name=id value=$d[id]>
				<table class='TableCart'>
					<tr><td>Judul Blog</td>
						<td><input onfocus=this.value='' type=text name='title' value='$d[title]'></td>
					</tr>

					<tr><td>Date</td>
						<td><input onfocus=this.value='' type=date name='tgl_post' value='$d[tgl_post]'></td>
					</tr>
			
				
				<tr><td></td><td><img width=100 src='../gambar/$d[gambar]' /></td></tr>
				<tr><td>Gambar</td><td><input type=file id=gambar name=gambar size=40></td>
				<tr><td>Deskripsi</td><td><textarea name=contents style='width: 277px; height: 67px;'>$d[contents]</textarea></td></tr>
				<tr><td colspan=2>
						<input type=submit name=submit value=Simpan>
						<input type=button value=Batal onClick=self.history.back()>
					</td>
				</tr>

				</table></form>";
		break;