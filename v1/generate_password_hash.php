<?php
$password = '123456';
$password_hash = password_hash($password, PASSWORD_DEFAULT);
echo $password_hash;
?>