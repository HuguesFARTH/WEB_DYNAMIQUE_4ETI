<?php 

$sql_get_user = "SELECT * FROM users WHERE email = :email AND password = :password";
$sql_args = array(
    email => $_POST['email'],
    password => $_POST['password']
);


if(isset($_POST['email']) == 'pl@cpe.fr'){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    header('Location: /?page=home');
};

?>