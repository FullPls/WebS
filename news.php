<!DOCTYPE php>
<html lang="ru">
	<head>
		<title>Федерация ушу Алтайского края</title>
		<meta http-equiv="Contetn-type"content="text/html;charset=UTF8"/>
		<link rel="shortcut icon" href="img/icons/logo16.png" type="image/png">
		<link rel="stylesheet" href="css/to_news.css">
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
<div class="container mt-5">

                <div class="row" row>
                    <div class="col-1 ">
                        <button class="but but_minus disabled"><ion-icon class ="minus" name="arrow-back-outline"></ion-icon></button>
                        <input type="text" class="page" disabled value="1">
                        /
                        <input class="total-pages" disabled value="1">
                        <button class="but but_plus"><ion-icon class ="plus" name="arrow-forward-outline"></ion-icon></button>
                    </div>
                </div>
            </div>
		<div class="news">
			
			<div class="container newscont">			
			</div>
		</div>

		
		<script src="js/showNews.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
	<?php require 'tpl/footer.php';?>
	</body>
</html>		