<?php
include_once 'header.php';
?>
<div class="content">
    <div class="postform">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="includes/addpost.inc.php" method="POST">
                        <input required type="text" name="title" placeholder="Title" id="inputtitle"><br>
                        <textarea required name="content" placeholder="Enter text here..." maxlength="1000"></textarea><br>
                        <input type="submit" name="postbtn" value="Add">
                    </form>
                </div>
                <div class="row">
                    <div class="col">
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "stmtfailed") {
                                echo "<p>Something went wrong, try again!</p>";
                            }
                            else if($_GET["error"] == "none"){
                                echo "<p>Post has been added!</p>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include_once 'footer.php';
?>