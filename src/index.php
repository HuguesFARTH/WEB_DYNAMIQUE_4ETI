<?php
// Note : Smarty a un 'S' majuscule
require_once('../libs/Smarty.class.php');
$smarty = new Smarty();


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
    case 'search':
        $smarty->display('./html/search.tpl');
        break;
    case 'script':
        require_once('./script.php');
        $smarty->assign('result', requestSQL($request));
        // $smarty->display();
        break;
    default:
        $smarty->display('./html/home.tpl'); // a changer plus tard
        break;
}

?>