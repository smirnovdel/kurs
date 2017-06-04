<?php
/*Получение данных формы*/
$food = $_POST['food'];
$weight = $_POST['weight'];
$price = $_POST['price'];
$time_id = $_POST['time_id'];
/*отправка данных в таблицу БД*/
$query = "INSERT INTO menu (food,weight,price,time_id) VALUES ('$food','$weight','$price','$time_id')";
$db=mysqli_connect('localhost','root','123','groupe1')or die('Error connecting to MySQL server.');
mysqli_query($db,$query);
header('Location: '.$_SERVER['REQUEST_URI'].'');
?>