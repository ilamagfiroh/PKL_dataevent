<!DOCTYPE html>
<html>
<head><title> membuat form login dengan javascript </title>
	<link rel ="stylesheet" type = "text/css"href="styledata.css">
</head>
<body>
</br>
<br/>
<center><h2>FORM REGISTRASI</h2></center>
<br/>
<div class ="login">
	<br/>
	<form action="registrasi.php" method="post" onSubmit="return validasi()">
	<tr>
		<td>Nama </td><br>
		<td><input type="" name="nama" placeholder="masukkan nama"></td><br>
	</tr>
	<tr>
		<td>Username</td><br>
		<td><input type="" name="username" placeholder="masukkan Username"></td><br>
	</tr>
	<tr>
		<td>Password</td><br>
		<td><input type="password" name="password" placeholder="masukkan password"></td><br>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="simpan"></td>
	</tr>
	</form>
</div>
</body>
</html>
