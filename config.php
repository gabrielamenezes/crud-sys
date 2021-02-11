<?php
    $dbname = 'teste';
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';

    $pdo = new PDO("mysql:dbname=".$dbname."; host=".$dbhost , $dbuser , $dbpass);

?>
