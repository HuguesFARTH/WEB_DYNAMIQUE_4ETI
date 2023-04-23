<?php

require_once('./script.php');

function is_valid_user($email, $password){
    $sql_get_user = "SELECT * FROM users WHERE email = :email";
    $sql_args = array('email' => $email);
    $result = requestSQL($sql_get_user, $sql_args);
    if(count($result) >= 1 && password_verify($password, $result[0]['password'])){
        return $result;
    }else{
        return false;
    }
}
?>