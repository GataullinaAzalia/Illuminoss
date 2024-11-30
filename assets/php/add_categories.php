<?php

    require_once("dbconnect.php");

    // Обработка формы
    if (!($_SERVER["REQUEST_METHOD"] == "POST")) {
        exit("Неверый метод запроса");
    }

    $name = $_POST["name"];

    $sql = "INSERT INTO genres (name) VALUES ('$name')";
    $result = $my_sql->query($sql);
    if (!$result) {
        printf("Error: %s", $my_sql->error);
        exit();
    }
    
    header('Location: http://localhost/Illuminoss/adminCategories.php');
?>