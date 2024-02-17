<?php
session_start();
require "menu.php";
require "dbconnect.php";
require "auth.php";
require "futor.php";
if(($_SESSION['msg']!='') or isset($msg)) {
    require "message.php";
    $_SESSION['msg']= '';}
//print_r($_ENV);