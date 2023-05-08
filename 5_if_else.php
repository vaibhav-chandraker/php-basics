<?php

$age = 25;

if ($age>18){
    echo "you can drive bikes and cars<br>";
}
elseif($age>12){
    echo "you can drive bicycle<br>";
}
else{
    echo "you cannot drive at all";
}



// switch statements

$age = 45;

switch ($age){
    case 15:
        echo "the age is 15";
    case 25:
        echo "the age is 25";
    case 50:
        echo "the age is 50";
    default:
        echo "your age is weird";


}


?>