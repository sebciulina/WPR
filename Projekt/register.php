<?php
include_once 'header.php';
?>
<div class="loginform">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="includes/register.inc.php" method="POST">
                    <input required type="text" name="login" placeholder="Login"><br>
                    <input required type="password" name="passwd" placeholder="Password"><br>
                    <input type="submit" name="sub" value="Register">
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "usernametaken") {
            echo "<p>This login is already taken!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
    ?>
</div>

<?php
include_once 'footer.php';
?>