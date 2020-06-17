<?php
//  function valLogin($param){
//     $param=trim($param);
//     $param=stripslashes($param);
//     if (!empty($param)){
//         if (!preg_match("/([A-Za-z\d\-_]){6,12}/", $param))
//         $err[] = 'Недопустимы логин. Логин может состоять из 6-12 букв латинского алфавита';
//         return $err;
//     }
// }
?>
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
<form action="register.php" method="post">
    <input type="email" name="email" id="msg" placeholder="email"><br>
    <input type="text" name="login" id="lg" placeholder="login"><br>
    <input type="password" name="password" id="ps" placeholder="password"><br>
    <input type="password" name="repeat-password" id="rp-ps" placeholder="repeat password"><br>
    <input type="submit" value="Регистрация">
</form>
</body>
</html>
