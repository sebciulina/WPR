<?php

function uidExists($conn, $login)
{
    $sql = "SELECT * FROM accounts WHERE login = ?;";
    $stmt = mysqli_stmt_init($conn);
    loginFile($login);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $login, $password)
{
    $sql = "INSERT INTO accounts (login,password) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPasswd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $login, $hashedPasswd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=none");
}

function loginUser($conn, $login, $password)
{
    $uidExists = uidExists($conn, $login);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $hashedPasswd = $uidExists["password"];
    $checkPasswd = password_verify($password, $hashedPasswd);

    if ($checkPasswd === false) {
        header("location: ../login.php?error=wronglogin2");
        exit();
    } else if ($checkPasswd === true) {
        session_start();
        $_SESSION["userID"] = $uidExists["ID"];
        $_SESSION["userlogin"] = $uidExists["login"];
        header("location: ../index.php");
        exit();
    }
}

function addpost($conn, $title, $content, $author)
{
    $sql = "INSERT INTO posts (title,content,author) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addpost.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $title, $content, $author);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addpost.php?error=none");
}

function loginFile($txt)
{
    $file = fopen("../users.txt", "a+") or die("Unable to open file!");
    $txt =  $txt . "\n";
    fwrite($file, $txt);
    fclose($file);
}
