<?php
    $dbh = new PDO("mysql:host=localhost;dbname=gestiondebecas","root","");
    $id = isset($_GET['id'])? $_GET['id'] : "";
    $stat = $dbh->prepare("SELECT * FROM files WHERE id=?");
    $stat->bindParam(1,$id);
    $stat->execute();
    $row = $stat->fetch();
    header('Content-Type: '.$row['mime']);
    echo $row['data'];
?>