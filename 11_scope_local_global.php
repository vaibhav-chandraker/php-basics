<?php

$a = 100; // this is global variable
$b = 50;

function printt(){
    $a = 200;    //this are local variables
    $b = 250;
    echo "the value of a and b is $a and $b <br>";
}

echo "$a   $b<br>";
printt();


//if we want to print global variables inside the function the we need to do this

function print_global(){
    global $a,$b;
    echo "the value of a and b is $a and $b <br>";
}
print_global();


//if we want to change the global variable inside the function then

function change_global(){
    global $a,$b;
    $a = 1000;   //by doing this the global variables a and b are also changed to 1000 and 2000
    $b = 2000;
    echo "the value of a and b is $a and $b <br>";
}

change_global();
echo "$a,$b"

?>