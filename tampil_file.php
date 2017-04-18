<?php 


echo "<table border=1>
	<tr>
		<th>
			Nama File
		</th>
		<th>
			Ukuran File
		</th>
		<th>
			Action
		</th>
	</tr>";

include 'koneksi.php';

$tampil=mysqli_query($connection, "SELECT * FROM upload_file ORDER BY id DESC");

			while ($r=mysqli_fetch_array($tampil)) {
				echo "<tr>
				<td>$r[nama]</td>
				<td>$r[ukuran] Bytes</td>
				<td><a href=hapus_fileupload.php?id=$r[id]&file=$r[data]> Hapus </a></td>
				</tr>";
			}

echo "</table>";

 ?>
