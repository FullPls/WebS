<?php 
    $host = 'localhost'; // адрес сервера
       $db_name = 'Wushu'; // имя базы данных
       $user = 'root'; // имя пользователя
       $password = ''; // пароль
       $connection = mysqli_connect($host, $user, $password, $db_name);

    $numberZero = $_POST['page']*9-9;

    $query ="SELECT * FROM Products WHERE Id > $numberZero LIMIT 9";
    $result = mysqli_query($connection, $query);

    if($result){
        while ($row = mysqli_fetch_assoc($result)) { 
             $rows[] = $row; 
        } 

        for($i=0;$i<count($rows);$i++) { 
            $productname = $rows[$i]['productname']; 
            $price = $rows[$i]['price'];
            $img = $rows[$i]['img'];
            
            $array = array(
                $productname,
                $price,
                $img
            );
            
            $js_array = json_encode($array, JSON_UNESCAPED_UNICODE);
            echo $js_array;
        }
        
    } else {//Если уже есть такой товар в корзине пользователя, увеличим кол-во на 1
        echo "Error to connect DB";
    }
?>  