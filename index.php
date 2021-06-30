<?php 
require 'koneksi.php';

$sql = "SELECT * FROM siswa";
$siswas = mysqli_query($koneksi, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" width="100%">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Jurusan</th>
		</thead>
		<tbody>
			<?php $i=1; foreach ($siswas as $siswa) { ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $siswa['nama'] ?></td>
					<td><?= $siswa['jurusan'] ?></td>
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>
</body>
</html>