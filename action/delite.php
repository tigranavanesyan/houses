<?php
    require_once '../config/connect.php';

    // print_r($_POST);
$id = $_POST['id'];

mysqli_query($connect, "DELETE FROM `housesdb` WHERE `housesdb`.`id` = '$id'");

header('Location: /');