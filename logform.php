<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<style>
    .lp{
        width: 200px;
        height: 25px;
        border: #3dd5f3 solid 1px;
        border-radius: 5px;
        margin: 13px;
        font: 16px Calibri;

    }
    .reg{
        margin: auto;
        width: 400px;
        border: #3dd5f3 solid 1px;
        padding-bottom: 20px;
    }
    .but{
        background-color: white;
        cursor: pointer;
        display: inline-block;
        font-weight: 400;
        user-select: none;
        font: 20px Calibri;
        border: #3dd5f3 solid 1px;
        border-radius: 3px;
    }
    #login{
        padding: 0px 0px 0px 30px;
        background: url("images/user.png") no-repeat 3px 1px;
        background-size: auto 90%;
        background-color: white;
    }
    #pass{
        padding: 0px 0px 0px 30px;
        background: url("images/padlock.png") no-repeat 3px 1px;
        background-size: auto 90%;
        background-color: white;
    }
    #passcheck{
        padding: 0px 0px 0px 30px;
        background: url("images/padlock.png") no-repeat 3px 1px;
        background-size: auto 90%;
        background-color: white;
    }
    .container{
        height: 930px;
    }
</style>
<script async>
    'use strict';
    function passset(){

    }
</script>
<body>
<div class="container">
    <h1>Хочу здать ЗНО</h1>
    <div class="nav">
        <div class="navbar">
            <b>
                <a class="navbut" href="index.html">Home</a>
                <a class="navbut" href="https://www.twitch.tv/arditston/">Twitch</a>
                <a class="navbut" href="other.html">Other</a>
            </b>
        </div>
    </div>

    <div class="reg">
        <h1>Форма регистрации</h1>

        <form action="" method="post" class="forma">
            <input placeholder="Логин" class="lp" type="text" id="login" maxlength="16" name="username" minlength="2" required>
            <br>
            <input placeholder="Пароль" minlength="8" class="lp" type="password" id="pass" name="password" title="Пароль має складати 8 символів та не мати кирилиці" required>
            <br>
            <input type="submit" name="send" class="but" value="Зарегестрироваться"/>

        </form>
    </div>
    <h3>Нет аккаунта?<a href="regform.php" style="color: darkturquoise;"> Зарегестрироваться</a></h3>
</div>

<div id="btoom" class="bottomnav">
    <footer>Создано <a href="satana.html">:</a> Коляской</footer>
    <footer>Все права защищены &copy 2004</footer>
</div>
</body>
</html>