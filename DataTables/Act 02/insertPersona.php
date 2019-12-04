<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli(
    'localhost',
    'User1',
    'Inf3_2018',
    'persones2'
);
mysqli_set_charset($conn,"utf8");

$sql = "insert into Persona values ('{$_REQUEST['nom']}', '{$_REQUEST['email']}', {$_REQUEST['edat']}, {$_REQUEST['exp']}, '{$_REQUEST['sexe']}', null);";

if ($conn->query($sql) === TRUE) {
    echo true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();