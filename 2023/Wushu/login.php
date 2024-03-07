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
		
		.buttons a
		{
			text-decoration: none;
			color: black;
			font-weight: 600;
		}

		.buttons a:hover
		{
			text-decoration: underline;
		}
	
	</style>
	</head>
	<body>
		
		<?php require 'tpl/header.php';?>
		
		<?php 
				session_start();
				require('connect.php');
				
				if(isset($_POST['username']) and isset($_POST['pass'])){
					$username = $_POST['username'];
					$pass = $_POST['pass'];

					$query = "SELECT * FROM LK WHERE username='$username' and Pass='$pass'";

					$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

					$count = mysqli_num_rows($result);

					if($count == 1){
						$_SESSION['username'] = $username;
					}
					else{
						echo "<script>alert('Ошибка, неверный логин или пароль!');</script>";
					}
				}

				if (isset($_SESSION['username'])) {
					$username = $_SESSION['username'];
					header('Location: cabinet.php');	
				}	

				?>

		<br>	
		<div class="reg">
			<div class="container mt-4">
				<h2>Авторизация</h2>
				<form  class="form-signin" method="POST">
					<input type="text" class="form-control" name="username" id="username" placeholder="Введите адрес электронной почты" required>	
					<br>
					<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль" required>	
					<br>
					<div class="buttons">
						<button class="btn btn-success" type="submit">Войти</button>
					<br>
							<p>Нет аккаунта? - <a href="registration.php">Зарегистрируйтесь!</a></p>
					</div>
				</form>
			</div>
			
		</div>
		
		<?php require 'tpl/footer.php';?>	
		
	</body>
</html>		