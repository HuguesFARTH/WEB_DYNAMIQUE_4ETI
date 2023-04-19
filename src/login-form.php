<?php 
require_once('./script.php');

$sql_get_user = "SELECT * FROM users WHERE email = :email";
$sql_args = array('email' => $_POST['email']);
$result = requestSQL($sql_get_user, $sql_args);


if(isset($result[0]['password']) == $_POST['password']){
    echo 'connected';
    session_start();
    $_SESSION['user'] = $result;
    header('Location: /?page=home');
};

?>