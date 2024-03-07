<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Федерация ушу Алтайского края</title>
		<meta http-equiv="Contetn-type"content="text/html;charset=UTF8"/>
		<link rel="shortcut icon" href="img/icons/logo16.png" type="image/png">
		<link rel="stylesheet" href="css/to_cabinet.css">
		<link rel="stylesheet" href="css/headfoot.css">
		<link rel="stylesheet" href="libs/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

	<!-- Bootstrap сетка -->
		<link rel="stylesheet" href="libs/bootstrap-grid.min.css">

	<!-- Шрифты с Google Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	
	</head>
	<body>
		<?php require 'tpl/header.php';?>

		<?php 
		require ('connect.php');
		session_start();
		$current_user = $_SESSION["username"];	
		 $query = "SELECT * FROM LK WHERE username='$username' and Pass='$pass'";
		 $result = mysqli_query($connection, $query);
		 $count = mysqli_num_rows($result);
			
			if($count != 0){
				
		 	}
		 	else{
		 		echo "<script>alert('Ошибка, неверный логин или пароль!');</script>";
		 	}	
		?>	

		<br>

		<div class="chestfilial">
			<div class="container">
				<div class="filialnum">
					<h2>Личные данные</h2>
					<ul>						
						<li>Фио:
							<a href="#"><?php 
							$query ="SELECT FIO FROM LK WHERE username='$current_user'";
							$result = mysqli_query($connection, $query);
							$_SESSION["FIO"] = $result->fetch_assoc()['FIO'];
							echo $_SESSION["FIO"]; 
							?>		
							</a>
						</li>
						<li>Телефон:
							<a href="#"><?php
							$query ="SELECT Phone FROM LK WHERE username='$current_user'";
							$result = mysqli_query($connection, $query);
							$_SESSION["Phone"] = $result->fetch_assoc()['Phone'];
							echo $_SESSION["Phone"]; 
							?>	
							</a>
						</li>
						<li>Почта:
							<a href="#"><?php echo $_SESSION["username"]; ?></a>
						</li>	
						<br>	 
						<a href="logout.php" class="btn btn-success">Выйти из аккаунта</a>			
					</ul>				
				</div>
				<div class="photos">
					<h2>Расписание в вашем филиале</h2>
					<img class="fil_photo" src="img/timetable/T_horizon2.jpg" alt="no">
				</div>
			</div>
			<div class="onmap">
				
			</div>
		</div>

		<?php require 'tpl/footer.php';?>

	</body>
</html>		