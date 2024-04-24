<?php 
session_start();
$host = 'localhost'; // адрес сервера
   $db_name = 'Wushu'; // имя базы данных
   $user = 'root'; // имя пользователя
   $password = ''; // пароль
   $connection = mysqli_connect($host, $user, $password, $db_name);
   
if(isset($_POST['productname'])){
    
    $productname = $_POST['productname'];
    
    $email = $_SESSION["email"];
    $query ="SELECT uid FROM LK WHERE email='$email'";
    $result = mysqli_query($connection, $query);
    $uid = $result->fetch_assoc()['uid'];
    
    $query ="SELECT Id FROM Products WHERE productname='$productname'";
    $result = mysqli_query($connection, $query);
    $Id = $result->fetch_assoc()['idProduct'];
    
    $query ="SELECT price FROM Products WHERE productname='$productname'";
    $result = mysqli_query($connection, $query);
    $price = $result->fetch_assoc()['price'];
    echo $query;
    
    $query ="SELECT img FROM Products WHERE productname='$productname'";
    $result = mysqli_query($connection, $query);
    $img = $result->fetch_assoc()['img'];
    
    
    
    $query ="SELECT COUNT(*) FROM `Cart` WHERE  productname = '$productname'  && uid = $uid";
    $result = mysqli_query($connection, $query);
    $countRow = $result->fetch_assoc()['COUNT(*)'];
    
    if($countRow < 1)
    {
        $query ="INSERT INTO Cart VALUES ($uid, $idProduct, '$productname', 1, $price, $price, '$img')";
        
        $result = mysqli_query($connection, $query);
        
    }else{//Если уже есть такой товар в корзине пользователя, увеличим кол-во на 1
        $query ="SELECT count FROM Cart WHERE Cart.uid = $uid AND Cart.Id = $idProduct";
        $result = mysqli_query($connection, $query);
        $count = $result->fetch_assoc()['count'];
        $count++;
        
        
        $query ="SELECT price FROM Cart WHERE productname='$productname'";
        $result = mysqli_query($connection, $query);
        $price = $result->fetch_assoc()['price'];
    
    
        $cost=$count * $price;
        
        $query ="UPDATE Cart SET `count` = $count, `cost` = $cost WHERE Cart.uid = $uid AND Cart.Id = $idProduct";
        $result = mysqli_query($connection, $query);
    }
    
    
    
    
    if($result){
        echo "Товар добавлен в корзину";
    } 
    else if (mysqli_errno($connection)==1064){//Пользователь не авторизирован
        echo "Вы не авторизированы!";
    }
    else {
        echo mysqli_errno($connection);
    }
}
?>  
