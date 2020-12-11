<?php 
	session_start();
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 	<style type="text/css">
 		.search-input{
			border-radius: 15px;
			border:none;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 10px;		
			background: #224b7a;
			color: white;
			outline: none;
			width: 250px;
		}
 	</style>
 </head>
 <body>
<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vk');
	$query = mysqli_query($con, "SELECT * FROM users WHERE id = {$_SESSION['id']}");
	$stroka = $query->fetch_assoc();
?>
<div class="col-12" style="background-color: #4680C2">
	<div class="col-8 mx-auto">
		<div class="row">
			<div class="col-2">
				<img src="img/vk.png" class="w-25">
			</div>
			<div class="col-8">
				<input class="mt-1 search-input" placeholder="Поиск" >
			</div>
		</div>
	</div>
</div>

<div class="col-8 mx-auto">
	<div class="row">
		<div class="col-2">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div class="col-3 text-center">
			<div>
				<img src="<?php echo $stroka['img']; ?>" class="w-100 img">
				<div style="background-color: rgba(0,0,0,0.7)">
					<p data-toggle="modal" data-target="#exampleModal" class="text-white update">Обновить фотографию</p>
				</div>
			</div>
			
			<form action="edit.php">
				<button class="btn btn-primary mt-3">Редактировать</button>
			</form>
			
		</div>
		<div class="col-7 pt-3">
			<div class="col-12 border-bottom" >
				<h5><?php echo $stroka['name']; ?></h5>
				<p class="text-secondary">Изменить статус</p>
			</div>
			<div class="col-12">
				<p>Phone — <?php echo $stroka['phone']?></p>
				<p>email — <?php echo $stroka['email']?></p>
				<p>name — <?php echo $stroka['name']?></p>
				<p>surname — <?php echo $stroka['surname']?></p>
				<p>password — <?php echo $stroka['password']?></p>
				<p>city — <?php echo $stroka['city']?></p>
				<p>education — <?php echo $stroka['education']?></p>
				<p>img — <?php echo $stroka['img']?></p>
			</div>
		</div>
	</div>
</div>

<!--модальное окно-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Загрузка новой фотографии</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Друзьям будет проще узнать Вас, если Вы загрузите свою настоящую фотографию.
		Вы можете загрузить изображение в формате JPG, GIF или PNG.</p>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="phone" style="display: none" value="<?php echo $stroka['phone']; ?>">
			<input type="text" name="password" style="display: none" value="<?php echo $stroka['password']; ?>">
			<input type="file" name="avatarka"  placeholder="Выбрать файл">
			<button class="btn btn-primary mt-3">Сохранить и продолжить</button>
		</form>
		
      </div>
      <div class="modal-footer">
        
        <p>Если у Вас возникают проблемы с загрузкой, попробуйте выбрать фотографию меньшего размера.</p>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 </body>
 </html>