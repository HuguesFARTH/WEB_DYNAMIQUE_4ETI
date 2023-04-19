<?php

$request = "SELECT keywords.name, patho.idp, patho.type, patho.desc, symptome.desc FROM symptpatho
INNER JOIN patho ON patho.idp = symptpatho.idp
INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
INNER JOIN keywords ON keysympt.idk = keywords.idk
INNER JOIN symptome ON symptome.ids = symptpatho.ids
WHERE keywords.name in ('voix','vomissement')";

function requestSQl($request) {
    try {
        $db = new PDO("pgsql:host=localhost;port=5432;dbname=acudb;user=pgtp;password=tp");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
      }
      // Exécution de la requête
      $stmt = $db->prepare($request);
      $stmt->execute();

      // Traitement des résultats
      $valren ="";
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $valren = $valren . "Pathologie : " . $row["patho.desc"] . "Symptôme : " . $row["symptome.desc"] . "Type : " . $row["patho.type"] . "ID : " . $row["patho.idp"] . "<br>";
      }
      // Fermeture de la connexion
      $db = null;

      return $valren;
    }   
    
echo(requestSQL($request));

?>