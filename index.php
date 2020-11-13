<?php

$host = 'localhost'; 
$database = 'formdb12'; 
$user = 'formdb12'; 
$password = '729YMxrY'; 

$link = mysqli_connect($host, $user, $password, $database); 

if (!$link) {
  echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
  exit;
}

$image_name = $_GET['image_name'];

$query = "SELECT url FROM images WHERE name='$image_name'";
$res = mysqli_query($link, $query) or die(mysqli_error($link));
var_dump($res);
$row = mysqli_fetch_row($res);

header('Location: '.$row[0]);
?>
