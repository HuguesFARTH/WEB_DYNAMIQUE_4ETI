<?php

function requestSQl($request, $params=null) {
    try {
        $db = new PDO("pgsql:host=localhost;port=5432;dbname=acudb;user=pgtp;password=tp");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
      }
      // Exécution de la requête
      $stmt = $db->prepare($request);
      if ($params==null){
        $stmt->execute();
      } else {
        $stmt->execute($params);
      }
      

      // Traitement des résultats
      $valren = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $db = null;

      return $valren;
    }   

?>