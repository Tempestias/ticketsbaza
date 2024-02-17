<?php
include "dbconnect.php";
if(isset($_POST['submit'])&&!empty($_POST['submit'])){

    $hashpassword = md5($_POST['pwd']);
    $sql ="select * from public.user where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    $login_check = $conn->query($sql);

    if($login_check->fetch() > 0){

        echo '<div style="text-align: center; font-size: 20px;">Вы успешно зашли в систему</div>';
        $_SESSION["login"] = 1;
    }else{
        echo '<div style="text-align: center; font-size: 20px;">Ошибка логина или пароля</div>';
    }
}
switch ($_GET['page']) {
    case 'c':
        if ($_SESSION["login"] == 1)
        {
            require "films.php";
        }
        else{

            echo '<div style="text-align: center; font-size: 20px;">Вы не авторизировались</div>';
        }
        break;
    case 'r':
        if ($_SESSION["login"] == 0)
        {
            require "register.php";
        }
        else{
            echo '<div style="text-align: center; font-size: 20px;">Вы уже авторизованны</div>';
        }

        break;
    case 't':
        if ($_SESSION["login"] == 1)
        {
            require "halls.php";
        }
        else{

            echo '<div style="text-align: center; font-size: 20px;">Вы не авторизировались</div>';
        }
        break;
    case 'd':
        if ($_SESSION["login"] == 1)
        {
            require "insertfilms.php";
        }
        break;

    case 'logout':
        session_destroy();
        header("location:index.php");
        break;
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

<?php
if($_SESSION['login'] != '1' && !isset($_GET['page'])) {
    ?>
    <div class="container">
        <h2>Пожалуйста войдите в систему </h2>
        <form method="post">


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>


            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Войти в систему">
            <a href="index.php?page=r" class="btn btn-danger">Перейти на страницу регистрации</a>
        </form>
    </div>
    <?php
}
?>
</body>
</html>
