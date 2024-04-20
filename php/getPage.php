<?php 
$host = 'localhost'; // адрес сервера
   $db_name = 'Wushu'; // имя базы данных
   $user = 'root'; // имя пользователя
   $password = ''; // пароль
   $connection = mysqli_connect($host, $user, $password, $db_name);

	$query ="SELECT COUNT(*) FROM `WushuNews`";
	$result = mysqli_query($connection, $query);

	
	if($result){
		$countProduct = $result->fetch_assoc()['COUNT(*)'];
		echo ceil($countProduct/5);
		
	} else {
		echo "Error to connect DB"; 
	}
?>	