<?php
require "dbconnect.php";
try {

    $result = $conn->query("SELECT * FROM films WHERE films.id=" . $_GET['id']);
    $row = $result->fetch();
    if ($result->rowCount() == 0) throw new PDOException('Категория не найдена', 1111);
    $sql = 'DELETE FROM films WHERE id=:id';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
   $_SESSION['msg']="Фильм успешно удален";
   $_SESSION['url']='index.php?page=c';
    require("message.php");
} catch (PDOexception $error) {
    $_SESSION['msg']="Фильм не может быть удален, так как связан с элементами других таблиц";
    $_SESSION['url']='index.php?page=c';
    require("message.php");}
exit();
?>

