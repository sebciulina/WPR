<?php

if(isset($_POST['lbtn'])){
    $login = $_POST['login'];
    $password = $_POST['passwd'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    loginUser($conn, $login, $password);
}
else {
    header("location: ../login.php");
    exit();
}