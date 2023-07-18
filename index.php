<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php ob_start(); session_start(); ?>
<?php
require 'stemauth/stemauth.php';
loginButton();

if(isset($_SESSION ['steamid'])){
    require 'steamauth/userInfo.php';
    echo "<a href='steamauth/logout.php'>Выйти</a>";
    ?>
}
</body>
</html>