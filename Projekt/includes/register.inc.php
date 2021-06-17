<?php

if (isset($_POST['sub'])) {
    $login = $_POST['login'];
    $password = $_POST['passwd'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if (uidExists($conn, $login) !== false) {
        header("location: ../register.php?error=usernametaken");
        exit();
    }
} else {
    header("location: ../register.php");
}

createUser($conn, $login, $password);