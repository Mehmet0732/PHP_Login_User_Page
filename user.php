<!DOCTYPE html>
<html>
<head>
	<title>Kullanıcı Tanımlama</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="usercontrol.php">
		

		<input type="text" name="user" placeholder="Kullanıcı Adı">
		<input type="password" name="password" placeholder="Şifre">
		<input type="mail" name="mail" placeholder="mail">
		<input type="submit" value="Kayıt Et">

	</form>

</body>
</html>

<?php
header("Refresh: 20; url=admin.php");

?>