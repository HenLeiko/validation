<?php 

$err = [];
$email=$_POST['email'];
$login=$_POST['login'];
$password=$_POST['password'];
$repeat_password=$_POST['repeat-password'];
if (empty($email)){
    $err[] = 'Введите вашу почту';    
}
if (empty($login)){
    $err[] = 'Введите ваш логин';
}
if (empty($password)){
    $err[] = 'Введите пароль';
}
if (empty($repeat_password)){
    $err[] = 'Повторите пароль';
}
if (!isset($err[0])){
valLogin($login);
if (isset($response)){
    @$err[] = $response;}
valPassword($password);
if (isset($response)){
    @$err[] = $response;}
valEmail($email);
if (isset($response)){
    @$err[] = $response;}
comPass($repeat_password, $password);
if (isset($response)){
    @$err[] = $response;}
}
copyLogin($login);
if (isset($response)){
    @$err[] = $response;
}


function valLogin($param){
    // $param=trim($param);
    // $param=stripslashes($param);
    
        if (!preg_match('/^[0-9a-zA-Zа-яА-Я]{6,12}$/', $param)) {
        global $response;
        $response = 'Недопустимый логин. Логин может состоять из 6-12 букв латинского алфавита';
        }
}

function valPassword($param){
    $param=trim($param);
        if(!preg_match("/^[A-Za-z\d\-_]{6,20}$/", $param)){
        global $response;
        $response = 'Недопустимы пароль. Пароль может состоять из 6-20 букв латинского алфавита';
        }
    

}
function valEmail($param){
    $param=trim($param);
    if (!filter_var($param, FILTER_VALIDATE_EMAIL)) {
    global $response;
    $response = 'Недопустимая почта. Почта должна быть формата "email@mail.com"';
    }
}
function comPass($param1, $param2){
    $param1=trim($param1);
    $param2=trim($param2);
    if ($param1 !== $param2){
        global $response;
        $response = 'Пароли не совпадают';
    }
}
function copyLogin($param){
    global $result;
    // $result = mysqli_query(mysqli_connect ("127.0.0.1","root","","designforum"),"SELECT * FROM users WHERE login='$param'");
    $result = mysqli_query(mysqli_connect ("127.0.0.1","root","","designforum"), "SELECT id FROM users WHERE login='$param'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
        global $response;
        $response = 'Данный пользователь уже существует';
    }
}
if (empty($err)){
    global $code;
    $code = 200;
}