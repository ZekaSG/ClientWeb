<?php
header("Content-Type: application/json; charset=UTF-8");
$mysqli = new mysqli(
    'localhost',
    'User1',
    'Inf3_2018',
    'persones2'
);
mysqli_set_charset($mysqli,"utf8");

$result = $mysqli->query('SELECT * from sexe');

$sexes = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($sexes, JSON_UNESCAPED_UNICODE );
