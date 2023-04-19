<?php
// Note : Smarty a un 'S' majuscule
require_once('../libs/Smarty.class.php');
$smarty = new Smarty();



$smarty->display('./html/login.tpl');
if (isset$_POST['register'] == 'register') {
    echo $_POST['register'];
}

if($_POST['page']=='home'){
    $smarty->display('./html/home.tpl');
}
?>