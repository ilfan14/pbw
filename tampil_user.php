<?php 

include 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pengguna</title>
</head>
<body>

	<h2>Daftar pengguna</h2>
	<form method="POST" action="tambah_user.php">
		<input type="submit" name="" value="Tambah User"></form>
	</br>
</br>
<table border="1">
	<thead>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>Level</th>
			<th>Status</th>
			<th>Aksi</th>
	</thead>
	<tbody>

		<?php
			$tampil=mysqli_query($connection, "SELECT * FROM user");
			$no=1;

			while ($r=mysqli_fetch_array($tampil)) {
				echo "<tr>
				<td>$no</td>
				<td>$r[username]</td>
				<td>$r[password]</td>
				<td>$r[nama_lengkap]</td>
				<td>$r[email]</td>
				<td>$r[level]</td>
				<td>$r[status]</td>
				<td><a href=edit_user.php?id=$r[username]> Edit </a> | <a href=\"hapus_user.php?id=$r[username]\" onClick=\"return confirm('Anda yakin akan menghapus $r[nama_lengkap]?')\"> Hapus </a></td>
				</tr>";
			$no++;
			}
		?>

	</tbody>


</table>

</body>
</html>
