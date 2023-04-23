<?php
// Note : Smarty a un 'S' majuscule
require_once('../libs/Smarty.class.php');
require_once('./login_utils.php');

$smarty = new Smarty();
session_start();
$valid_session = is_valid_session();
$smarty->assign('valid_session',$valid_session);
if(!isset($_GET['page'])){
    $_GET['page'] = "home";
}
switch ($_GET['page']) {
    case 'login':
        $content = $smarty->fetch('./html/login.tpl');
        break;
    case 'register':
        $content = $smarty->fetch('./html/register.tpl');
        break;

    case 'logout':
        session_destroy();
        header('Location: /?page=home');
        break;
    case 'home':
        $content = $smarty->fetch('./html/home.tpl');
        break;
    case 'search':
        if($valid_session){
            $content = $smarty->fetch('./html/search.html');
        }else{
            header('Location: /?page=home');
        }
        break;
    case 'profile':
        if($valid_session){
            $content = $smarty->fetch('./html/profile.tpl');
        }else{
            header('Location: /?page=home');
        }
        break;
    case 'profile_form' :
        $content = $smarty->fetch('./html/profile_form.tpl');
        break;
    case 'script':
        $request = "SELECT keywords.name as name, patho.idp as pathoIdp, patho.type as pathoType, patho.desc as pathoDesc, symptome.desc as symptDesc
                    FROM symptpatho
                    INNER JOIN patho ON patho.idp = symptpatho.idp
                    INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
                    INNER JOIN keywords ON keysympt.idk = keywords.idk
                    INNER JOIN symptome ON symptome.ids = symptpatho.ids
                    WHERE keywords.name in ('voix','vomissement')";
      
        $valren = requestSQL($request, null, "acudb");
        $txt = "<script>console.log('PHP: " . $valren . "');</script>";
        for ($i = 0; $i < count($valren); $i++) {
            $txt = $txt . "<p>Name : " .$valren[$i]["name"] . " Pathologie : " . $valren[$i]["pathodesc"] . "Symptôme : " . $valren[$i]["symptdesc"] . "Type : " . $valren[$i]["pathotype"] . "ID : " . $valren[$i]["pathoidp"] . "</p><br>";
        }
        $smarty->assign('txt',$txt);
        $smarty->display('./html/pathologie.tpl');
        break;
    default:
        $content = $smarty->fetch('./html/home.tpl');
        break;
}
$smarty->assign('content',$content);
$smarty->display('./html/template.tpl');
?>