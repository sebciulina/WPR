<?php
include_once 'header.php';
?>
<div class="bg">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title">home</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col" id="indexcontent">
                <?php
                if (isset($_SESSION["userlogin"])) {
                    echo "<h2>Hello " . $_SESSION["userlogin"] . "!</h2>";
                    if (!isset($_COOKIE['count'])) {
                        echo "<a>Welcome! This is the first time you have viewed this page.</a>";
                        $cookie = 1;
                        setcookie("count", $cookie);
                    } else {
                        $cookie = ++$_COOKIE['count'];
                        setcookie("count", $cookie);
                        echo "<a>You have viewed this page " . $_COOKIE['count'] . " times.</a>";
                    }
                } else {
                    echo "<h2>Welcome to my blog!</h2>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>