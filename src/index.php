<?php
// Note : Smarty a un 'S' majuscule
require_once('../libs/Smarty.class.php');
$smarty = new Smarty();

//$smarty->display('./html/header.tpl');
//$smarty->display('./html/footer.tpl');

switch ($_GET['page']) {
    case 'login':
        $smarty->display('./html/login.tpl');
        break;
    case 'register':
        $smarty->display('./html/register.tpl');
        break;
    case 'home':
        $smarty->display('./html/home.tpl');
        break;
    default:
        $smarty->display('./html/home.tpl'); // a changer plus tard
        break;
}

?>