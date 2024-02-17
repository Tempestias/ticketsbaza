<?php
include "dbconnect.php";
if(isset($_POST['submit'])&&!empty($_POST['submit'])){

    $sql = "insert into public.user(name,email,password,mobno)values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['pwd'])."','".$_POST['mobno']."')";
    $ret = $conn->query($sql);
    if($ret){

        echo "Регистрация успешна";
    }else{

        echo "Ошибка в вводе данных";
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP PostgreSQL Registration & Login Example </title>
    <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Регистрация</h2>
    <form method="post">

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name" placeholder="Введите имя" name="name" requuired>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Введите email" name="email">
        </div>

        <div class="form-group">
            <label for="pwd">Номер:</label>
            <input type="number" class="form-control" maxlength="10" id="mobileno" placeholder="Введите номер мобильного телефона" name="mobno">
        </div>

        <div class="form-group">
            <label for="pwd">Пароль:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Введите пароль" name="pwd">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Зарегистрироваться">
        <a href="index.php" class="btn btn-danger">Перейти на страницу авторизации</a>
    </form>
</div>
</body>
</html>