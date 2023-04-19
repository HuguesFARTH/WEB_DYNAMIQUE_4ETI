<?php

function request ($user, $passwd, $sql) {
    $dbh = new PDO($user, $passwd);

    $dbh->beginTransaction();
    try {
        $sth = $dbh->prepare($sql);
        $data = $sth->fetchAll();
        $dbh->commit();
    } catch(PDOException $e) {
        $dbh->rollback();
}
}
?>