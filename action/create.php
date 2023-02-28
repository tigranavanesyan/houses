<?php
    require_once '../config/connect.php';

    // print_r($_POST);

$name = $_POST['name'];
$area = $_POST['area'];
$date = $_POST['date'];
$archive = $_POST['archive'];
$name888 = $_POST['name888'];

mysqli_query($connect, "INSERT INTO `housesdb` (`id`, `name`, `area`, `data`, `gassurcharge`, `description`) VALUES (NULL, '$name', '$area', '$date', '$archive', '$name888')");

header('Location: /');
