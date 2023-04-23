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

echo $data['keywords'];
echo "\n";
/*
$request = "SELECT keywords.name as name, patho.idp as pathoIdp, patho.type as pathoType, patho.desc as pathoDesc, symptome.desc as symptDesc
                    FROM symptpatho
                    INNER JOIN patho ON patho.idp = symptpatho.idp
                    INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
                    INNER JOIN keywords ON keysympt.idk = keywords.idk
                    INNER JOIN symptome ON symptome.ids = symptpatho.ids
                    WHERE keywords.name in :keywords;"
         */           
// convertie l'array $data['keywords'] en string pour la requete SQL
//enlève tous les espaces et split la string en array
$keywords = preg_replace('/\s+/', '', $data['keywords']);
echo $keywords;
//$sql_args = array('keywords' => $keywords);
//$result = requestSQL($request, $sql_args);
//echo $result;
?>