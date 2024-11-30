<?php
    // Изменение продуктов
    require_once("dbconnect.php");

    $id = $_POST['id'];

    $name = $_POST["name"];
    $description = $_POST["description"];
    $briefdescription = $_POST["briefdescription"];
    $year = $_POST["year"];
    $country = $_POST["country"];
    $category = $_POST["category"];
    $genre_id = $_POST["genre_id"];

    $my_sql->query("UPDATE `products` SET `name` = '$name', `description` = '$description', `briefdescription` = '$briefdescription', `year` = '$year', `country` = '$country', `category` = '$category', `genre_id` = '$genre_id' WHERE `products`.`id` = '$id'");

    header('Location: http://localhost/Illuminoss/adminProducts.php');
?>