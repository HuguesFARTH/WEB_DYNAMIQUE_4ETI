<?php
 
header("Content-Type: application/json");
 
$data = json_decode($_POST);
 
echo "Hello $data";
?>