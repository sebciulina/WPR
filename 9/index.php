<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "szkola";

    $conn = new mysqli($servername, $username, $password);

    if (!$conn) {
        exit('Wystapil blad podczas proby polaczenia sie z serwerem MySQL...<br>');
    } else {
        echo 'Polaczenie z baza danych zostalo nawiazane...<br>';
    }

    if (!mysqli_select_db($conn, $dbname)) {
        echo 'Wystapil blad podczas wyboru bazy danych ' . $dbname . " <br>";
    } else {
        echo 'Zostala wybrana baza danych ' . $dbname . "<br>";
    }
    $query = "SELECT * FROM nauczyciele";
    $result = mysqli_query($conn, $query);
    echo "mysqli_fetch_row<br>";
    while ($row = mysqli_fetch_row($result)) {
        printf("%s %s %s <br>", $row[0], $row[1], $row[2]);
    }
    echo "mysqli_fetch_array<br>";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
        printf("%s %s %s <br>", $row[0], $row[1], $row[2]);
    }
    echo "mysqli_num_rows<br>";
    $result = mysqli_query($conn, $query);
    echo mysqli_num_rows($result);
    echo "<br>INSERT INTO <br>";
    $query= "INSERT INTO `nauczyciele`(`id`, `imie`, `nazwisko`) VALUES (3,'Oskar','Kaminski')";
    $result = mysqli_query($conn, $query);
    $query = "SELECT * FROM nauczyciele";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_row($result)) {
        printf("%s %s %s <br>", $row[0], $row[1], $row[2]);
    }
    ?>

</body>

</html>