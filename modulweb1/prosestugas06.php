	<!DOCTYPE html>
	<html>
	<head>
		<title>Data Registrasi</title>
	</head>
	<body>
	<h1>Data Registrasi</h1>
	<hr>
	<table boorder="0">
	<tr>
		<td>nama</td>
		<td>:</td>
		<td><?php echo $_POST["nama"];?></td>	
	</tr>
	<tr>

		<td>alamat</td>
		<td>:</td>
		<td><?php echo $_POST["alamat"]; ?></td>
	</tr>
	<tr>
		<td>tempat lahir</td>
		<td>:</td>
		<td><?php echo $_POST["tempat lahir"]; ?></td>
	</tr>
	<tr>
		<td>tanggal lahir</td>
		<td>:</td>
		<td><?php echo $_POST["tanggal lahir"];?></td>	
	</tr>
	<tr>
		<td>jenis kelamin</td>
		<td>:</td>
		<td><?php echo $_POST["jenis kelamin"];?></td>	
	</tr>
		<td>pendidikan</td>
		<td>:</td>
		<td><?php echo $_POST["pendidikan"];?></td>	
	</tr>
	</table>
	<a href="tugas06.php">Back To Home</a>
	</body>
	</html>