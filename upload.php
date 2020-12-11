<?php
	session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk');
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = {$_SESSION['id']}");
	$stroka = $query->fetch_assoc();

	$img_dir = "img/";
	$img_name = $img_dir . basename($_FILES['avatarka']['name']);

	$upload = move_uploaded_file($_FILES['avatarka']['tmp_name'], $img_name);
	if ($upload==true) {
		echo "it works";
		$query = mysqli_query($con, "UPDATE users SET img = '{$img_name}' WHERE id = {$_SESSION['id']}");
	}
?>
<a href="account.php?id=<?php echo $stroka['id']?>">go back</a>