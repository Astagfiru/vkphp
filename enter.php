<?php 
	session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk');
	$query = mysqli_query($con, "SELECT * FROM users WHERE phone='{$_GET["phone"]}' AND password='{$_GET['password']}'");
	$stroka = $query->fetch_assoc();
?>
<?php
	if($_GET["phone"]=="{$stroka['phone']}" && $_GET["password"] == "{$stroka['password']}") {
		$num = mysqli_num_rows($query);
		if($num>0){
			$_SESSION['id'] = $stroka['id'];
			header("Location: account.php");
		} else{
			echo "Нет такого пользователя";
		}
	}
	
?>