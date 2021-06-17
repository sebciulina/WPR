<?php
include_once 'header.php';
?>
<div class="bg">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="title">posts</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="posts">
        <div class="container">
            <?php
            require_once 'includes/dbh.inc.php';
            $query = "SELECT * FROM posts";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {
                echo "
            <div class='row'>
                <div class='col'>
                    <div class='maintext'>";
                echo "<h3>" . $row['title'] . "</h3>" . "<a>" . $row['content'] . "</a>" . "<p>By " . $row['author'] . "</p>";
                echo "
                    </div>
                </div>
            </div>
            ";
            }

            ?>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>