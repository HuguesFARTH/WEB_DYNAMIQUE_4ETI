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
$keywords = explode(",",strtolower(preg_replace('/\s+/', ',', trim($data['keywords']))));
$meridiens = $data['meridiens'];
$categories = $data['categories'];
$caracteristiques = $data['caracteristiques'];
$sql_args=[]
//varifie si $keywords est vide
$request = "SELECT patho.idp as pathoIdp, patho.type as pathoType, patho.desc as pathoDesc, meridien.nom as mername, STRING_AGG(keywords.name,',') as tttt, STRING_AGG(keywords.name,',') as keywords, STRING_AGG(symptome.desc,',') as symptomes
                FROM symptpatho
                INNER JOIN patho ON patho.idp = symptpatho.idp
                INNER JOIN meridien ON meridien.code = patho.mer
                INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
                INNER JOIN keywords ON keysympt.idk = keywords.idk
                INNER JOIN symptome ON symptome.ids = symptpatho.ids
                WHERE (meridien.nom in ('Poumon','Foie','Vésicule Biliaire'))";
//MERIDIEN
if (count($meridiens) == 1 && $meridiens[0] == ""){
    $request .= "WHERE true";
}else{
    $request .= "WHERE meridien.nom in (";
    $request .= implode(',', array_fill(0, count($meridiens), '?'));
    $request .= ")";
    $sql_args = array_merge($sql_args,$meridiens);
}

//KEYWORDS
if (count($keywords) == 1 && $keywords[0] == ""){
}else{
    $request .= "and keywords.name in (";
    $request .= implode(',', array_fill(0, count($keywords), '?'));
    $request .= ")";
    $sql_args = array_merge($sql_args,$keywords);
}
    
$request=."GROUP BY patho.idp, meridien.nom 
                ORDER BY patho.idp;";
$result = requestSQL($request, $sql_args);
echo "Data received:";
var_dump($data);
echo "<br>";
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