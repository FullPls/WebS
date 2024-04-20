<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Федерация ушу Алтайского края</title>
		<meta http-equiv="Contetn-type"content="text/html;charset=UTF8"/>
		<link rel="shortcut icon" href="img/icons/logo16.png" type="image/png">
		<link rel="stylesheet" href="css/to_registration.css">
		<link rel="stylesheet" href="css/headfoot.css">
		<link rel="stylesheet" href="libs/bootstrap-reboot.min.css">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

	<!-- Шрифты с Google Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<style>
		.container.mt-4
		{
			text-align: center;
		}
		.form-signin{
			text-align: center;
		}

		.alreadyreg a
		{
			text-decoration: none;
			color: black;
			font-weight: 600;
		}

		.alreadyreg a:hover
		{
			text-decoration: underline;
		}

	</style>
	</head>
	<body>
		
		<?php require 'tpl/header.php';?>

		<?php 
		require('connect.php');
		if(isset($_POST['login']) && isset($_POST['pass'])){
			$username = $_POST['login'];
			$pass = $_POST['pass'];
			$name = $_POST['name'];
			$phone = $_POST['phone'];

			$query = "INSERT INTO LK (username, Pass, FIO, Phone) VALUES ('$username','$pass','$name','$phone')";
			$result = mysqli_query($connection, $query);

			if($result){
				$smsg = "Регистрация прошла успешно! Теперь вы можете войти в личный кабинет.";
				// header('Location: cabinet.php');
			}
			else{
				$fsmsg = "Ошибка регистрации";
				// header('Location: logout2.php');
			}
		}
		?>

		<br>	
		<div class="reg">
			<div class="container mt-4">
				<h2>Форма регистрации</h2>
				<form  class="form-signin" method="POST">
					<?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"> <?php echo $smsg; ?></div><?php } ?>
					<?php if(isset($fsmsg)){ ?> <div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?></div><?php } ?>
					
					<input type="text" class="form-control" name="login" id="login" placeholder="Введите электронную почту" required>	
					<br>
					<input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше ФИО" required>	
					<br>
					<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль" required>	
					<br>
					<input type="text" class="form-control" name="phone" id="phone" placeholder="Введите номер телефона">	
					<br>
					<button class="btn btn-success" type="submit">Регистрация</button>
					<div class="alreadyreg">
					<a href="login.php">Уже зарегистрированы?</a>
					</div>
				</form>
			</div>
		</div>

		<?php require 'tpl/footer.php';?>	

	</body>
</html>		