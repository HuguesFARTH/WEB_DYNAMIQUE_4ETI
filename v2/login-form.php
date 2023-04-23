<?php 
require_once('./script.php');

$sql_get_user = "SELECT password FROM users WHERE email = :email";
$sql_args = array('email' => $_POST['email']);
$result = requestSQL($sql_get_user, $sql_args);
echo $hashSecure;
var_dump($result);
if(password_verify($_POST['password'],$result['password'])){
    echo 'connected';
    session_start();
    $_SESSION['user'] = $result;
    // header('Location: /?page=home');
} else {
    // header('Location: /?page=login');
 };
?>