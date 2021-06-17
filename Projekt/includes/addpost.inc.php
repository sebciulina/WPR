<?php
session_start();
if (isset($_POST['postbtn'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    addpost($conn, $title, $content, $_SESSION["userlogin"]);
} else {
    header("location: ../addpost.php");
}
