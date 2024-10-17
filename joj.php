<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIRET</title>
    <link rel="shortcut icon" href="OIP.jpg" type="image/x-icon">
    <link rel="stylesheet" href="k.css">
</head>
<body>
    <h1>THANK YOU!</h1>
    <a href="jo.php">BACK</a>
    <?php

        $link = mysqli_connect('localhost', 'root', '', "swiniki");

        $jeden = $_POST['jeden'];
        $dwa = $_POST['dwa'];
        $trzy = $_POST['trzy'];

        $tor = "INSERT INTO `swinki`(`imie`, `opis`, `rasy_id`) VALUES ('$jeden', '$dwa', $trzy)";

        mysqli_query($link, $tor);
    ?>
</body>
</html>


