<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli(
    'localhost',
    'User1',
    '1234',
    'persones2'
);
mysqli_set_charset($conn,"utf8");

$result = $conn->query('SELECT * from persona order by nom');

$persones = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($persones, JSON_UNESCAPED_UNICODE );
