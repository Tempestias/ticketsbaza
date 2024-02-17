<?php
include "dbconnect.php";
require "menu.php";
if(isset($_POST['submit'])&&!empty($_POST['submit'])){

    $sql = "insert into public.films(name,duration)values('".$_POST['name']."','".$_POST['duration']."')";
    $ret = $conn->query($sql);
    if($ret){

        echo "Фильм успешно добавлен";
    }else{

        echo "Ошибка добавления фильма";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Добавление фильма </h2>
    <form method="post">

        <div class="form-group">
            <label for="name">Название фильма:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" requuired>
        </div>

        <div class="form-group">
            <label for="pwd">Длительность фильма:</label>
            <input type="number" class="form-control" maxlength="10" id="duration" placeholder="Enter duration" name="duration">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Добавить фильм">
        <a href="index.php?page=c" class="btn btn-danger">Вернутся в список фильмов</a>
    </form>
</div>
</body>
</html>