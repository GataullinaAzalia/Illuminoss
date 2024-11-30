<?php
    // Удаление товаров и категорий
    include("dbconnect.php");

    $id = $_GET['id'];

    $backPage = $_SERVER["HTTP_REFERER"] ?? "/index.php";

    if ($_GET['action'] == 'products'){
        $my_sql->query("DELETE FROM `products` WHERE `products`.`id` = '$id'");
    }

    if ($_GET['action'] == 'genres'){
        $my_sql->query("DELETE FROM `products` WHERE `category_id` = '$id'");
        $my_sql->query("DELETE FROM `genres` WHERE `genres`.`id` = '$id'");
    }

    header("Location: $backPage");

?>