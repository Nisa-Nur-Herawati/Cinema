<!DOCTYPE html>
<html>
<head>
	<title>tugas6.php</title>
</head>
<h2>From Registrasi</h2>
<form action="tugas06proses.php" method="POST">
<pre>
Isi Data Dibawah ini :
<br>
nama	    <input type="text" name="nama"/>
<br/>
alamat    <textarea name="alamat"></textarea>
<br/>
tempat lahir <input type="text" name="tempat lahir"/>
<br/>
tanggal lahir <input type="text" name="tanggal lahir"/>
<br/>
jenis kelamin <input type="radio" name="jenis kelamin" value="laki-laki"/>laki-laki <input type="radio" name="jenis kelamin" value="perempuan"/>perempuan
<br/>
Pendidikan	<select name="pendidikan">
<option value="S1">S1/option>
<option value="SMA">SMA/option>
<option value="SMP">SMP/option>
<option value="SD">SD/option>
</select>
</br>
<input type="Submit"/> <input type="reset" value="Cancel"/>
</pre>
</body>
</html>