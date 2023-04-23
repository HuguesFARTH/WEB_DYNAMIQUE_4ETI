<?php

require_once('./script.php');
require_once('../libs/Smarty.class.php');
$smarty = new Smarty();

/* Reception du JSON */
$jsonData = file_get_contents("php://input");
        
/* Verifie si JSON est vide */
if (strlen($jsonData) > 0) {
    /* Decoder JSON */
    $data = json_decode($jsonData, true);
    /* Verifie les erreurs et le format final */
    if (!(json_last_error() == JSON_ERROR_NONE and is_array($data)))
        die('Données JSON invalides.');
} else
    die('Aucune données JSON.');
     
//split string
$keywords = explode(",",preg_replace('/\s+/', ',', trim($data['keywords'])));
//varifie si $keywords est vide
if (count($keywords) == 1 && $keywords[0] == ""){
    $request = "SELECT patho.mer, keywords.name as keywordsName, patho.idp as pathoIdp, patho.type as pathoType, patho.desc as pathoDesc, symptome.desc as symptDesc
                    FROM symptpatho
                    INNER JOIN patho ON patho.idp = symptpatho.idp
                    INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
                    INNER JOIN keywords ON keysympt.idk = keywords.idk
                    INNER JOIN symptome ON symptome.ids = symptpatho.ids";
    $sql_args = null;
}else{
    $request = "SELECT patho.mer, keywords.name as keywordsName, patho.idp as pathoIdp, patho.type as pathoType, patho.desc as pathoDesc, symptome.desc as symptDesc
                    FROM symptpatho
                    INNER JOIN patho ON patho.idp = symptpatho.idp
                    INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
                    INNER JOIN keywords ON keysympt.idk = keywords.idk
                    INNER JOIN symptome ON symptome.ids = symptpatho.ids
                    WHERE keywords.name in (";
    $request .= implode(',', array_fill(0, count($keywords), '?'));
    $request .= ")";
    $sql_args = $keywords;
}
$result = requestSQL($request, $sql_args);

foreach ($result as $key => $value) {
    // echo "<br>";
    // echo "Patho id:".$value['pathoidp']."<br>";
    // echo " Name:".$value['name'] . "<br> " ."Patho Desc:". $value['pathodesc'] . "<br> " . "Sympt Desc:".$value['symptdesc'] . "<br> " ."Patho Type:". $value['pathotype']. "<br>";
    foreach ($value as $k => $v) {
        $smarty->assign($k,$v);
    }
    $smarty->display('./html/pathologie.tpl');
}
?>