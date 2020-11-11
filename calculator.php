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
    <input type="text" name="amout" placeholder="Inventment Amount">
    <input type="text" name="rate" placeholder="Yearly Interest Rate">
    <input type="text" name="years" placeholder="Number of Years">
    <input type="button" name="tinh" value="calculator">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amout = $_POST["amount"];
        $rate = $_POST["rate"];
        $years = $_POST["years"];
        $tinh = $_POST["tinh"];
    }
    ?>
</form>

</body>
</html>
