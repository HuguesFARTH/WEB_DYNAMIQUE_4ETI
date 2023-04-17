<?php

function request ($sql) {
    $dbh->beginTransaction();
    try {
        $sth = $dbh->prepare($sql);
        $data = $sth->fetchAll();
        $dbh->commit();
    } catch(PDOException $e) {
        $dbh->rollback();
}
}

function 
?>