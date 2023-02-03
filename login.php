<!DOCTYPE html>
<html>
<head><title> membuat form login dengan javascript </title>
	<link rel ="stylesheet" type = "text/css"href="stylelogin.css">
</head>
<body>
</br>
<br/>
<center><h2>FROM LOGIN</h2></center>
<br/>
<div class ="login">
	<br/>
	<form action="proses_login.php" method="post" onSubmit="return validasi()">
		<div>
			<label>username:</label><br>
			<input type="" name="username" id="username"/>
		</div>
		<div>
			<label>password:</label><br>
			<input type="password" name="password" id="password"/>
		</div>
		<div>
				<input type="submit" value="login" class=""/>
		</div>
	</form>
</div>
</body>
<script type="text/javascript">
	function validasi(){
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username!=""&&password!=""){
			return true;
		} else{
			alert('username dan password harus diisi');
			return False;}}
</script>
</html>