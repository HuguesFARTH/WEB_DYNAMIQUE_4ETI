<?php

require_once('./script.php');

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
var_dump($keywords);

$request = "SELECT keywords.name as name, patho.idp as pathoIdp, patho.type as pathoType, patho.desc as pathoDesc, symptome.desc as symptDesc
                    FROM symptpatho
                    INNER JOIN patho ON patho.idp = symptpatho.idp
                    INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
                    INNER JOIN keywords ON keysympt.idk = keywords.idk
                    INNER JOIN symptome ON symptome.ids = symptpatho.ids
                    WHERE keywords.name in (";
$request .= implode(',', array_fill(0, count($keywords), '?'));
$request .= ")";
$sql_args = $keywords;
$result = requestSQL($request, $sql_args);
// liste tous les résultats de la base de donnée
foreach ($result as $key => $value) {
    echo "Name:".$value['name'] . " " ."Patho Desc:". $value['pathodesc'] . " " . "Sympt Desc:".$value['symptdesc'] . " " ."Patho Type:". $value['pathotype'] . " " ."Patho id:".$value['pathoidp'] . "<br>";
}
?>