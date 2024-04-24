<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Федерация ушу Алтайского края</title>
		<meta http-equiv="Contetn-type"content="text/html;charset=UTF8"/>
		<link rel="shortcut icon" href="img/icons/logo16.png" type="image/png">
		<link rel="stylesheet" href="css/to_filial.css">
		<link rel="stylesheet" href="css/headfoot.css">
		<link rel="stylesheet" href="libs/bootstrap-reboot.min.css">

	<!-- Bootstrap сетка -->
		<link rel="stylesheet" href="libs/bootstrap-grid.min.css">

	<!-- Шрифты с Google Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	
	</head>
	<body>
		<?php require 'tpl/header.php';?>

		<br>
        
        <div class="main"> 
        
            <div class="container mt-5">
                
                <div class="row" row>
                
                    <div class="col-6">
                        <button class="menu-but"><ion-icon name="menu-outline"></ion-icon></button>
                    </div>
                    <div class="col-6">
                        <span>Каталог</span>
                    </div>
                    
                    <div class="col-1 ">
                        <button class="but but_minus disabled"><ion-icon class ="minus" name="remove-outline"></ion-icon></button>
                        <input type="text" class="page" disabled value="1">
                        /
                        <input class="total-pages" disabled value="1">
                        <button class="but but_plus"><ion-icon class ="plus" name="add-outline"></ion-icon></button>
                    </div>
                </div>
            </div>
            
            
            
            <div class="container mt-5">
                <div class="row px-5" row>
                    
                </div>
            </div>
            
            
            <div class="container mt-2 mb-5">
                
                <div class="row" row>
                    
                    <div class="col-1 ">
                        <button class="but but_minus disabled"><ion-icon class ="minus" name="remove-outline"></ion-icon></button>
                        <input type="text" class="page" disabled value="1">
                        /
                        <input class="total-pages" disabled value="1">
                        <button class="but but_plus"><ion-icon class="plus" name="add-outline"></ion-icon></button>
                    </div>
                </div>
            </div>
            
        </div>
		<script src="js/code.jquery.com_jquery-3.7.0"></script>
		<script src="js/showCatalog.js"></script>
		<script src="js/addCart.js"></script>

		<?php require 'tpl/footer.php';?>	

	</body>
</html>		