<?php 
require_once('./script.php');

$sql_create_user = "INSERT INTO users VALUES (:email,:password,:name ,:last_name)";
$sql_args = array('email' => $_POST['email'] , 'password' => $_POST['password'], 'name' => $_POST['name'], 'last_name' => $_POST['last_name']);
$result = requestSQL($sql_create_user, $sql_args);

header('Location: /?page=login');
?>