<?php
// Note : Smarty a un 'S' majuscule
require_once('../libs/Smarty.class.php');
$smarty = new Smarty();
session_start();

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
        $request = "SELECT keywords.name as name, patho.idp as pathoIdp, patho.type as pathoType, patho.desc as pathoDesc, symptome.desc as symptDesc
                    FROM symptpatho
                    INNER JOIN patho ON patho.idp = symptpatho.idp
                    INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
                    INNER JOIN keywords ON keysympt.idk = keywords.idk
                    INNER JOIN symptome ON symptome.ids = symptpatho.ids
                    WHERE keywords.name in ('voix','vomissement')";
        // $smarty->assign('result', requestSQL($request));
        $valren = requestSQL($request);
        $txt = "";
        for ($i = 0; $i < count($valren); $i++) {
            $txt = $txt . "Name : " .$valren[$i]["name"] . "Pathologie : " . $valren[$i]["pathodesc"] . "Symptôme : " . $valren[$i]["symptdesc"] . "Type : " . $valren[$i]["pathotype"] . "ID : " . $valren[$i]["pathoidp"] . "<br>";
        }
        // echo ($txt);
        $smarty->display('./html/pathologie.tpl', $txt);
        break;
    default:
        $smarty->display('./html/home.tpl'); // a changer plus tard
        break;
}

?>