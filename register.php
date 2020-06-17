<?php
include 'functions.php';

if ($code == 200){
    mysqli_query(mysqli_connect ("127.0.0.1","root","","val"),"INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");
    }

print_r ($err);