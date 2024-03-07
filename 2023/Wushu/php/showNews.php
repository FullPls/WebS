<?php 
$host = 'localhost'; // адрес сервера
   $db_name = 'Wushu'; // имя базы данных
   $user = 'root'; // имя пользователя
   $password = ''; // пароль
   $connection = mysqli_connect($host, $user, $password, $db_name);

$numberZero = $_POST['page']*5-5;

$query ="SELECT * FROM WushuNews WHERE idNews > $numberZero LIMIT 5";
$result = mysqli_query($connection, $query);

	if($result){
		while ($row = mysqli_fetch_assoc($result)) { 
			 $rows[] = $row; 
		} 

		for($i=0;$i<count($rows);$i++) { 
			$newsname = $rows[$i]['nameNews']; 
			$text = $rows[$i]['textNews'];
			$img = $rows[$i]['img'];
			
			$array = array(
				$newsname,
				$text,
				$img
			);
			
			$js_array = json_encode($array, JSON_UNESCAPED_UNICODE);
			echo $js_array;
		}
		
	} else {
		echo "Error to connect DB";
		}

?>	