<?php
//renvoie les données du formulaire de recherche
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $request = "SELECT * FROM acudb WHERE nom_acu LIKE '$search'";
    $params = array($search);
    $result = requestSQL($request, $params);
    print_r($result);
}
?>