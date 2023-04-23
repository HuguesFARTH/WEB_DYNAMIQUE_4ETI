<?php 
require_once('./script.php');

$sql_get_user = "SELECT * FROM users WHERE email = :email";
$sql_args = array('email' => $_POST['email']);
$result = requestSQL($sql_get_user, $sql_args);

define('PREFIX_SALT', 'asso'); 
define('SUFFIX_SALT', 'puncture');
$hashSecure = md5(PREFIX_SALT.$_POST['password'].SUFFIX_SALT);

if($result[0]['password'] == $hashSecure){
    echo 'connected';
    session_start();
    $_SESSION['user'] = $result;
    header('Location: /?page=home');
} else {
    header('Location: /?page=login');
 };

?>