<?php
$name = $_POST['username'];
$password = $_POST['password'];
$passcheck = $_POST['passwordcheck'];


if($password != $passcheck){
    echo "Пароли не совпадают";
}
?>
