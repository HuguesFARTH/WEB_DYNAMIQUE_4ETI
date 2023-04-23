<?php

require_once('./script.php');

function is_valid_user($email, $password){
    $sql_get_user = "SELECT * FROM users WHERE email = :email";
    $sql_args = array('email' => $email);
    $result = requestSQL($sql_get_user, $sql_args);
    if(count($result) >= 1 && password_verify($password, $result[0]['password'])){
        return $result[0];
    }else{
        return false;
    }
}

function is_valid_session(){
    if(isset($_SESSION) && isset($_SESSION['user']) && isset($_SESSION['user']['email']) && isset($_SESSION['user']['password'])){
        return true;
    }
    return false;
}

?>