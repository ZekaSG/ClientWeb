<?php
    $mysqli = new mysqli(
        'localhost',
        'User1',
        'Inf3_2018',
        'persones'
    );
    //Esta line transforma el output en UTF8 porque json_encode solo funciona de esta forma
    mysqli_set_charset($mysqli,"utf8");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") "
            . $mysqli->connect_error;
    }

    $result = $mysqli->query('SELECT * from sexe');
    if (!$result) {
        die('Database error: ' . $mysqli->error);
    }

    $sexes = [];
    $sexes["sexes"] = $result->fetch_all(MYSQLI_ASSOC);

    //JSON_UNESCAPED_UNICODE es para que el encode se haga a unicode
    echo json_encode($sexes, JSON_UNESCAPED_UNICODE );
