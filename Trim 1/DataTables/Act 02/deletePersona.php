<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli(
    'localhost',
    'User1',
    'Inf3_2018',
    'persones2'
);
mysqli_set_charset($conn,"utf8");

$sql = "delete from Persona where Email='{$_REQUEST['email']}';";

if ($conn->query($sql) === TRUE) {
    echo true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();