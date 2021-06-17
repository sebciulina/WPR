<?php
include_once 'header.php';
?>
<div class="loginform">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="includes/login.inc.php" method="POST">
                    <input required type="text" name="login" placeholder="Login"><br>
                    <input required type="password" name="passwd" placeholder="Password"><br>
                    <input type="submit" name="lbtn" value="Login">
                </form>
                <a>You don't have an account? </a><a href="register.php" class="reglink">Click here</a>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login!</p>";
        }
    }
    ?>
</div>
<?php
include_once 'footer.php';
?>