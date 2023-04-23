<?php

header("Content-Type: application/json");
echo $_POST['keywords'];
foreach ($_POST as $key => $value) {
    echo "$key => $value";
}
?>