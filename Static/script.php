<?php

// function request ($user, $passwd, $sql) {
//     $dbh = new PDO($user, $passwd);

//     $dbh->beginTransaction();
//     try {
//         $sth = $dbh->prepare($sql);
//         $data = $sth->fetchAll();
//         $dbh->commit();
//     } catch(PDOException $e) {
//         $dbh->rollback();
// }
// }

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
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID : " . $row["id"] . " - Nom : " . $row["nom"] . "<br>";
      }
      
      // Fermeture de la connexion
      $db = null;
    }    
?>