<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=Leaflet;charset=utf8', 'User1', 'Inf3_2018');
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from location');

$statement->execute();

$dbCoords = $statement->fetchAll(PDO::FETCH_CLASS);

$coords = [
    "type" => "FeatureCollection",
    "features"=> []
];
for($x = 0; $x < count($dbCoords); $x++){
    array_push(
        $coords["features"],
        [
            'id' => $dbCoords[$x]->id,
            "type" => "Feature",
            "properties" => new stdClass(),
            "geometry" => [
                "type" => "Point",
                "coordinates" => [
                    $dbCoords[$x]->latitude,
                    $dbCoords[$x]->longitude
                ]
            ]
        ]
    );
}
echo json_encode($coords, JSON_NUMERIC_CHECK);