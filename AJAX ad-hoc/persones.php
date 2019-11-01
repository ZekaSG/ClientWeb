<?php
    $persona = [
        'paco' => 33,
        'maria' => 55,
        'alberto' => 18,
        'polonia' => 3
    ];

    foreach($persona as $name => $age){
        if($_REQUEST['name'] == $name){
            echo $age;
            break;
        }
    }

