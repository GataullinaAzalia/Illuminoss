<?php
    session_start();

// Валидация входных данных
    if (isset($_POST['number'])) {
        $number = trim($_POST['number']);
        if ($number == "") {
            unset($number);
        }
    }

    if (isset($_POST['password'])) {
        $password = trim($_POST['password']);
        if ($password == "") {
            unset($password);
        }
    }

    if (empty($number) or empty($password)){
        exit("Не все поля заполнены");
    }

    include("dbconnect.php");

    $dbResult = $my_sql->query("SELECT * FROM users WHERE number = '$number'");

    $user = $dbResult->fetch_assoc();

    if (empty($user['number'])){
        exit ("Введенный телефон или пароль неверный");
    }
    else {
        if ($user['password']==$password){
            $_SESSION['number']=$user['number'];
            $_SESSION['role']=$user['role'];
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
            
            $_SESSION['user_id'] = $id;
            
            header("location: ./../../subscriptionАccount.php?id_user=".$_SESSION['user_id']);
        }
        else{
            exit("Введеный телефон или пароль неверный");
        }
    }

// Записываю id в Сессию
   
?>