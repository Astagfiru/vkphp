<?php
	session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk');
	$update = "UPDATE users SET img = '{$_POST["img"]}', education = '{$_POST["education"]}', city = '{$_POST["city"]}', password = '{$_POST["password"]}', surname = '{$_POST["surname"]}', name = '{$_POST["name"]}', phone = '{$_POST["phone"]}', email = '{$_POST["email"]}' WHERE id = {$_SESSION["id"]}";
	$query = mysqli_query($con, $update);
	header("Location: account.php");
?>