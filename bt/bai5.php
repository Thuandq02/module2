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
<h1>Máy tính siêu đơn giản</h1>
<form method="post" style="border: 1px; width: 300px; height: 100px">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <br/>
    <select name="tinh">
        <option value="cong">Cong</option>
        <option value="tru">Tru</option>
        <option value="nhan">Nhan</option>
        <option value="chia">Chia</option>
    </select>
    <input type="submit" value="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 =(float)$_POST["number1"];
    $number2 = (float)$_POST["number2"];
    $tinh = $_POST["tinh"];
    if ($tinh == "cong"){
        $sum = $number1 + $number2;
        echo "<p>" . $number1." + ".$number2." = ".$sum . "</p>";;
    } elseif ($tinh == "tru"){
        $tru = $number1 - $number2;
        echo "<p>" . $number1." - ".$number2." = ".$tru . "</p>";;
    } elseif ($tinh == "nhan"){
        $nhan = $number1 * $number2;
        echo "<p>" . $number1." x ".$number2." = ".$nhan . "</p>";
    } elseif ($tinh == "chia"){
        if ($number2 == 0){
            echo "<p>"."Khong chia duoc";
        } else {
            $chia = $number1 / $number2;
            echo "<p>" . $number1." / ".$number2." = ".$chia . "</p>";
        }
    }
}
?>
</body>
</html>