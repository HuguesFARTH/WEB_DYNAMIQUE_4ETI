<?php 
require_once('./script.php');

$sql_get_user = "SELECT * FROM users WHERE email = :email";
$sql_args = array('email' => $_POST['email']);
$result = requestSQL($sql_get_user, $sql_args);
$hashSecure = password_hash($_POST['password'], PASSWORD_DEFAULT);
echo $hashSecure;
echo $result['password'];
if(password_verify($hashSecure,$result['password'])){
    echo 'connected';
    session_start();
    $_SESSION['user'] = $result;
    header('Location: /?page=home');
} else {
    header('Location: /?page=login');
 };
?>