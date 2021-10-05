	<!DOCTYPE html>
	<html>
	<head>
		<title>Data Registrasi</title>
	</head>
	<body>
	<?php
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$pendidikan=$_POST['pendidikan'];
	?>
	<table boorder="2">
	<tr>
		<td coplas=2 align="center"><b> Data Registrasi<b></td>
</tr>
<tr>
	<td>nama</td>
	<td>:</td>
	<td><?php echo $nama; ?></td>
</tr>
<tr>
	<td>alamat</td>
	<td>:</td>
	<td><?php echo $alamat; ?></td>
</tr>
<tr>
	<td>tempat lahir</td>
	<td>:</td>
	<td><?php echo $tempat_lahir; ?></td>
</tr>
<tr>
	<td>tanggal lahir</td>
	<td>:</td>
	<td><?php echo $tanggal_lahir; ?></td>
</tr>
<tr>
	<td>jenis kelamin</td>
	<td>:</td>
	<td><?php echo $jenis_kelamin; ?></td>
</tr>
</table>
<a href="tugas06.php">Back To Home</a>
</body>
</html>