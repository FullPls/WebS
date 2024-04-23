<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Федерация ушу Алтайского края</title>
		<meta http-equiv="Contetn-type"content="text/html;charset=UTF8"/>
		<link rel="shortcut icon" href="img/icons/logo16.png" type="image/png">
		<link rel="stylesheet" href="css/to_test.css">
		<link rel="stylesheet" href="css/headfoot.css">
		<link rel="stylesheet" href="libs/bootstrap-reboot.min.css">

	<!-- Bootstrap сетка -->
		<link rel="stylesheet" href="libs/bootstrap-grid.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

	<!-- Шрифты с Google Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	
	</head>
	<body>
		<?php require 'tpl/header.php';?>
	<br>
		<div class="chestfilial">
			<div class="container">
				<div class="filialnum">
					<h2>Филиалы</h2>
					<ul>
						<li id="btn1" class="filbutton" >
							<a >Г.Барнаул, ул.Ленинградская, 7б</a>
						</li>
						<li id="btn2" class="filbutton" >
							<a >г.Барнаул, ул.Геблера, 33б</a>
						</li>
						<li id="btn3" class="filbutton" >
							<a >г.Барнаул, пр. Красноармейский, 59а</a>
						</li>
						<li id="btn4" class="filbutton" >
							<a >г.Барнаул, ул. Мало-Табольская, 28</a>
						</li>
					</ul>
				</div>
				<div class="photos">
						<h2>Расписание филиала</h2>
						<img id="img1" src="img/timetable/T_horizon.jpg" class="d-block w-100" alt="...">			
				</div>
			</div>
		</div>	

		<br>
		<?php require 'tpl/footer.php';?>	

	<script>		  

let imageList1 = 
   ["img/timetable/T_horizon.jpg",
	"img/timetable/T_elans.jpg",
	"img/timetable/krasno.jpg",
	"img/timetable/malotab.jpg"];

btn1.onclick=function(){
	img1.src = imageList1[0];
}
btn2.onclick=function(){
	img1.src = imageList1[1];
}
btn3.onclick=function(){
	img1.src = imageList1[2];
}
btn4.onclick=function(){
	img1.src = imageList1[3];
}
		</script>
	</body>
</html>		