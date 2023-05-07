<?php

// multi dimentional arrays 

//two dimentional array

$a = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9),

);

echo $a[1][2];
echo "<br>";
echo $a[2][2];
echo "<br>";

for ($i=0;$i<count($a);$i++){
    for ($j=0;$j<count($a[$i]);$j++){
        echo $a[$i][$j];
        echo " ";
    }
    echo "<br>";

}

//three dimentional array

echo "<br>";

$b = array(
    array(
        array(1,2,3,5,6),
        array(1,4,7,7,2),
        array(5,2,8,1,5),
    )
 );

 for ($x=0;$x<count($b);$x++){
    for ($y=0;$y<count($b[$x]);$y++){
        for ($z=0;$z<count($b[$x][$y]);$z++){
            echo $b[$x][$y][$z];
            echo " ";
        }
        echo "<br>";
    }
    echo "<br>";

 }



?>