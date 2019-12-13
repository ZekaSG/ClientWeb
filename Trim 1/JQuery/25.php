<?php
    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];
    $op = $_GET['operation'];

    if($op == "Sum"){
        echo "Result: " . ($n1 + $n2);
    }
    if($op == "Subs"){
        echo "Result: " . ($n1 - $n2);
    }
    if($op == "Prod"){
        echo "Result: " . ($n1 * $n2);
    }
    if($op == "Div"){
        echo "Result: " . ($n1 / $n2);
    }
?>