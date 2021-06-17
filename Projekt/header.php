<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="topnav">
        <a href="index.php" class="active">Home</a>
        <a href="posts.php">Posts</a>
        <?php
            if(isset($_SESSION["userlogin"])){
                echo "
                <a href='addpost.php'>Create Post</a>
                <a href='includes/logout.inc.php' class='right'>Log out</a>";
            }
            else{
                echo "<a href='login.php' class='right'>Login</a>";
            }
        ?>
        
    </div>