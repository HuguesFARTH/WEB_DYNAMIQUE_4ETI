<?php 
require_once('./script.php');
require_once('./login_utils.php');

if(is_valid_user($_POST['email'], $_POST['password'])){
    session_start();
    $_SESSION['user'] = $result;
    header('Location: /?page=home');
} else {
    header('Location: /?page=login');
};
?>