<?php
function displayLoginButton(){
    if(!isset($_SESSION['number'])){
    echo 'Войти';
    }else
    if($_SESSION['number']=="Admin"){
    echo 'Admin';
    }else
    if($_SESSION['number']=="User"){
    echo 'User';
    }
    }
?>