<?php 
require_once('./script.php');

$sql_create_user = "INSERT INTO users VALUES (email = :email,password = :password,name = :name ,last_name = :last_name)";
$sql_args = array('email' => $_POST['email'] , 'password' => $_POST['password'], 'name' => $_POST['name'], 'last_name' => $_POST['last_name']);
$result = requestSQL($sql_create_user, $sql_args);

echo $result;

?>