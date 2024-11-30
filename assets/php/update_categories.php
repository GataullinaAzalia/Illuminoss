<?php
    // Изменение категорий
    require_once("dbconnect.php");

    $id = $_POST['id'];
    $name = $_POST['name'];

    $my_sql->query("UPDATE `genres` SET name = '$name' WHERE `genres`.`id` = '$id'");

    header('Location: http://localhost/Illuminoss/adminCategories.php');
?>