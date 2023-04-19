<?php

function requestSQl($username, $password, $dbname, $request) {
    try {
        $db = new PDO("pgsql:host=localhost;port=5432;dbname=$dbname;user=$username;password=$password");
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
        $valren = $valren . "ID : " . $row["id"] . " - Nom : " . $row["nom"] . "<br>\n";
      }
      // Fermeture de la connexion
      $db = null;

      return $valren;
    }    
?>