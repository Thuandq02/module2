<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="nhap" placeholder="nhap so">
    <input type="submit" value="send">
    <?php
    $cars = array(1,4,6,3,22,5,3,5,4,6,46);
    $a = 1;
    $b = 2;
    if ($a == $_POST["nhap"]) {
        echo "sum = " . array_sum($cars);
    }
    if ($b == $_POST["nhap"]) {
        rsort($cars);
        foreach ($cars as $x) {
            echo "<br><br> $x <br>";
        }
    }
    ?>
</body>
</html>
