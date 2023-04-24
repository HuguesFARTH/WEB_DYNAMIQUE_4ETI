<?php 
require_once('./script.php');
require_once('./login_utils.php');
session_start();
$valid_session = is_valid_session();
if(is_valid_session()){
    $sql_create_user = "UPDATE users set password = :password,name = :name ,last_name = :last_name where email = :email";
    $sql_args = array('email' => $_SESSION['user']['email'] , 'password' => $_POST['password'], 'name' => $_POST['name'], 'last_name' => $_POST['last_name']);
    $result = requestSQL($sql_create_user, $sql_args);
    
    $_SESSION['user'] = $sql_args[0];
    header('Location: /?page=profile');
}
?>