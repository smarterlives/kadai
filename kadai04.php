<?php
function sum($max) {
    $result = $max*2;
    return $result;
}
echo sum(50);

function f($a, $b) {
    $result = $a+$b;
    return $result;
}
echo f(4,2);

function multiply($arr) {
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    echo $result;
}
multiply(array(1, 3, 5, 7, 9));
echo "\n";

function max_array($arr) {
    $result = 1;
    foreach($arr as $a){
        $result = $a;
    }
    echo $result;
}
max_array(array(1, 3, 5, 7, 9));
echo "\n";
