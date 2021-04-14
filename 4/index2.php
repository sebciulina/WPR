<!DOCTYPE html>
<!--Zad 2-->
<html>


<head>
    <title>Zad 2</title>
</head>

<body>
    <form action="index2.php" method="POST">
        <table>
            <tr>
                <td>Wpisz fraze:</td>
                <td><textarea name="pole" rows="5" cols="20"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Zapisz"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['pole'])){
    $file = fopen("plik.txt","a");
    fwrite($file, $_POST['pole']);
    fwrite($file, "\n");
    fclose($file);
    $file = fopen("plik.txt","r");
    while(!feof($file)){
        echo fread($file, filesize("plik.txt"));
    }
    fclose($file);
    }
    ?>

</body>

</html>