<?php
 
header("Content-Type: application/json");
echo $_POST['keywords'];
$data = json_decode($_POST);
 
echo "Hello $data";
?>