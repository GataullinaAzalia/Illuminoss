<?php

    require_once("dbconnect.php");

    // Обработка формы
    if (!($_SERVER["REQUEST_METHOD"] == "POST")) {
        exit("Неверый метод запроса");
    }

    $name = $_POST["name"];
    $description = $_POST["description"];
    $briefdescription= $_POST["briefdescription"];
    $year = $_POST["year"];
    $country = $_POST["country"];
    $category = $_POST["category"];
    $genre_id = $_POST["genre_id"];
    
    if (!($_FILES && $_FILES['image']['error'] == UPLOAD_ERR_OK)) {
        echo($_FILES['image']['error']);
        exit("Ошибка загрузки файла");
    }

    $fileName = $_FILES['image']['name'];
    move_uploaded_file($_FILES["image"]["tmp_name"], "./upload_images/" . $fileName);

    $sql = "INSERT INTO `products` (`name`, `description`, `briefdescription`, `year`, `country`, `category`, `genre_id`, `image` ) VALUES ('$name', '$description', '$briefdescription', '$year', '$country', '$category', '$genre_id', '$fileName')";
    $result = $my_sql->query($sql);
    if (!$result) {
        printf("Error: %s", $my_sql->error);
        exit();
    }
    
    header('Location: http://localhost/Illuminoss/adminProducts.php');
?>
