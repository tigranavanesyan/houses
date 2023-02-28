<?php
$connect = mysqli_connect('localhost', 'root', '', 'houses');
if(!$connect) {
    die('Ошибка подключения к БД');
}
?>