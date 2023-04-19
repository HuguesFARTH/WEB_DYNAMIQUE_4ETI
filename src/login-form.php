<?php 

if(isset($_POST['email']) == 'pl@cpe.fr'){
    session_start();
    $_SESSION['email'] = $_POST['email'];
    header('Location: /?page=home');
};

?>