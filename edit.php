<?php
	session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk');
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = {$_SESSION['id']}");
	$stroka = $query->fetch_assoc();
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center mt-3">Редактировать профиль</h1>
	<form action="update.php" method="POST" class="col-4 mx-auto mt-3">
		<h3>Phone</h3>
		<input name="phone" type="text" class="form-control mt-2" value="<?php echo $stroka['phone']?>">
		<h3>email</h3>
		<input name="email" type="text" class="form-control mt-2" value="<?php echo $stroka['email']?>">
		<h3>name</h3>
		<input name="name" type="text" class="form-control mt-2" value="<?php echo $stroka['name']?>">
		<h3>surname</h3>
		<input name="surname" type="text" class="form-control mt-2" value="<?php echo $stroka['surname']?>">
		<h3>password</h3>
		<input name="password" type="text" class="form-control mt-2" value="<?php echo $stroka['password']?>">
		<h3>city</h3>
		<input name="city" type="text" class="form-control mt-2" value="<?php echo $stroka['city']?>">
		<h3>education</h3>
		<input name="education" type="text" class="form-control mt-2" value="<?php echo $stroka['education']?>">
		<h3>img</h3>
		<input name="img" type="text" class="form-control mt-2" value="<?php echo $stroka['img']?>">
		<button class="btn btn-success btn-block mt-2">Готово</button>
	</form>
</body>
</html>