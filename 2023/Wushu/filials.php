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
						<li id="btn1" class="filbutton">
							<a target="_blank" title="Открыть в 2Гис" >г.Барнаул, ул.Ленинградская, 7б</a>
						</li>
						<li id="btn2" class="filbutton">
							<a target="_blank" title="Открыть в 2Гис" >г.Барнаул, ул.Геблера, 33б</a>
						</li>
						<li id="btn3" class="filbutton">
							<a target="_blank" title="Открыть в 2Гис" >г.Барнаул, пр. Красноармейский, 59а</a>
						</li>
						<li>
							<a target="_blank" title="Открыть в 2Гис" >г.Барнаул, ул.Мало-Табольская, 28</a>
						</li>
					</ul>
				</div>
				<div class="photos">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img id="img1" src="img/filials/horizon.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img id="img2" src="img/filials/horizon2.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img id="img3" src="img/filials/horizon3.jpg" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>

				</div>
			</div>

			<div class="onmap">
				
				<a class="dg-widget-link" href="http://2gis.ru/barnaul/firm/70000001022401449/center/83.67350578308107,53.36043830302833/zoom/15?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Барнаула</a>
					<div class="dg-widget-link">
						<a href="http://2gis.ru/barnaul/firm/70000001022401449/photos/70000001022401449/center/83.67350578308107,53.36043830302833/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div>
					<div class="dg-widget-link">
						<a href="http://2gis.ru/barnaul/center/83.678885,53.356931/zoom/15/routeTab/rsType/bus/to/83.678885,53.356931╎Федерация Ушу Алтайского края?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Федерация Ушу Алтайского края</a>
					</div>
					<script src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
					<script >new DGWidgetLoader({"width":990,"height":400,"borderColor":"#a3a3a3","pos":{"lat":53.36043830302833,"lon":83.67350578308107,"zoom":15},"opt":{"city":"barnaul"},"org":[{"id":"70000001022401449"}]});</script>
					<noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
			</div>
		</div>


		<br>
		<?php require 'tpl/footer.php';?>	

		<script>
			  
let img=document.getElementById("img1");
let imageList1 = ["img/filials/horizon.jpg",
	"img/filials/horizon2.jpg",
	"img/filials/horizon3.jpg"],
	imageList2 = ["img/filials/Malotob.jpg",
	"img/filials/elans.jpg",
	"img/filials/Malotob.jpg"
	],
	imageList3 = ["img/filials/horizon.jpg",
	"img/filials/horizon2.jpg",
	"img/filials/horizon3.jpg"],
	 age = 0;

btn1.select = btn1.onclick;
btn1.onclick=function(){
	
	img1.src = imageList1[0];
	img2.src = imageList1[1];
	img3.src = imageList1[2];
}
btn2.onclick=function(){
	
	img1.src = imageList2[0];
	img2.src = imageList2[1];
	img3.src = imageList2[2];
}
btn3.onclick=function(){
	
	img1.src = imageList3[0];
	img2.src = imageList3[1];
	img3.src = imageList3[2];
}
	
		</script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	</body>
</html>		