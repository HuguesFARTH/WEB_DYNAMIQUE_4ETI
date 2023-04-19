<?php 
require_once('./script.php');

$sql_get_user = "SELECT * FROM users WHERE email = :email";
$sql_args = $_POST['email']
$result = requestSQL($request, $sql_args);


if(isset($result[0]['password']) == $_POST['password']){
    session_start();
    $_SESSION['user'] = $result
    header('Location: /?page=home');
};

?>