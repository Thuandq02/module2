<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form dang nhap</title>
    <style>
        .login {
            height: 230px;
            width: 230px;
            margin: 0;
            padding: 48px;
            border: 1px #CCC solid;
        }

        .login input {
            padding: 10px;
            margin: 10px
        }

        form {
            width: 328px;
            background: chartreuse;
        }
    </style>
</head>
<body>

<form method="post" style="position: absolute; left: 40%; top: 100px">
    <div class="login">
        <h1>Accout Login</h1>
        <input type="text" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="SIGN IN">
    </div>
</form>
<?php
$array = [
    ["admin@gmail.com", "admin"],
    ["thuan@fmail.com", "admin"]
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"] && !empty($_POST['password']))) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $signin = false;
        foreach ($array as $value) {
            if ($email === $array[0][0] && $password === $array[0][1]) {
                header("Location: https://github.com/dqthuan/baitapAthao");
                $signin = true;
                break;
            }
        }
        if ($signin) {
            echo "abc";

        } else {
            echo "Đăng nhập thất bại";
        }

    }
}

?>
</body>
</html>

