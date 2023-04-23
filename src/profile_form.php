<?php 
require_once('./script.php');
session_start();

$sql_create_user = "UPDATE users set password = :password,name = :name ,last_name = :last_name where email = :email";
$sql_args = array('email' => $_POST['email'] , 'password' => $_POST['password'], 'name' => $_POST['name'], 'last_name' => $_POST['last_name']);
$result = requestSQL($sql_create_user, $sql_args);

$_SESSION['user'] = $sql_args;
header('Location: /?page=profile');
?>