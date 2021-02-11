<?php
    $dbname = 'teste';
    $dbhost = 'lolcahost';
    $dbuser = 'root';
    $dbpass = '';

    $pdo = new PDO("mysql:dbname=" .$dbname ."host=".$dbhost , $dbuser , $dbpass);
