<?php
    session_start();
    
    include("dbconnect.php");

    // Валидация входных данных
    if (isset($_POST['name'])) {
        $name = trim($_POST['name']);
        if ($name == "") {
            unset($name);
        }
    }

    if (isset($_POST['number'])) {
        $number = trim($_POST['number']);
        if ($number == "") {
            unset($number);
        }
    }
    
    if (isset($_POST['email'])) {
        $email = trim($_POST['email']);
        if ($email == "") {
            unset($email);
        }
    }

    if (isset($_POST['password'])) {
        $password = trim($_POST['password']);
        if ($password == "") {
            unset($password);
        }
    }

    if (isset($_POST['confirm_password'])) {
        $confirmPassword = trim($_POST['confirm_password']);
        if ($confirmPassword == "") {
            unset($confirmPassword);
        }
    }

    if (empty($name) or empty($number) or empty($email) or empty($password)) {
        exit("Не все поля заполнены");
    }

    if (strlen($password) < 6) {
        exit("Пароль должен быть больше 6-ти символов");
    }

    if ($password != $confirmPassword) {
        exit("Пароли не совпадают");
    }


    $dbResult = $my_sql->query("SELECT 'id' FROM users WHERE number='$number' or email='$email'");

    $user = $dbResult->fetch_assoc();

    if (!empty($user['id'])) {
        exit("Такой логин или почта уже занята");
    }

    $insertResult = $my_sql->query("INSERT INTO users (name, number, email, password) VALUE ('$name', '$number', '$email', '$password')");

    // Записываю id в Сессию
    $result = $my_sql->query("SELECT * FROM users");
    if (!$result)
    {
        echo("Какая-то ошибка");
        exit();
    }

    $users = [];
    while ($usersId = $result->fetch_assoc())
    {
        $users[] = $usersId;
    }

    foreach ($users as $usersId)
    {
        $id = $usersId["id"];
    }
    // Записываю id в Сессию
    
    if ($insertResult=='TRUE') {
        
        $_SESSION['user_id'] = $id;
        $_SESSION['number'] = $number;
        $_SESSION['role'] = 'user';
        header("Location: ./../../index.php");
    }
    else {
        echo "Ошибка. Вы не зарегистрированы";
    }
?>