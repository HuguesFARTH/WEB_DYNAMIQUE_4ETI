<?php 
require_once('./script.php');

$sql_create_user = "INSERT INTO users VALUES (:email,:password,:name ,:last_name)";
define('PREFIX_SALT', 'asso'); 
define('SUFFIX_SALT', 'puncture');
$hashSecure = md5(PREFIX_SALT.$_POST['password'].SUFFIX_SALT); 

$sql_args = array('email' => $_POST['email'] , 'password' => $hashSecure, 'name' => $_POST['name'], 'last_name' => $_POST['last_name']);
$result = requestSQL($sql_create_user, $sql_args);

header('Location: /?page=login');
?>