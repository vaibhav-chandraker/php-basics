<?php

// arithmatic operators 
$a = 45;
$b = 8;

echo "a+b is " . $a+$b . "<br>";
echo "a-b is " . $a-$b . "<br>";
echo "a*b is " . $a*$b . "<br>";
echo "a/b is " . $a/$b . "<br>";
echo "a%b is " . $a%$b . "<br>";
echo "a**b is " . $a**$b . "<br>";


// assignment operators 
echo $a = 5; echo "<br>";
echo $a += 5; echo "<br>";
echo $a -= 5; echo "<br>";
echo $a *= 5; echo "<br>";
echo $a /= 5; echo "<br>";
echo $a %= 5; echo "<br>";

$x = 10;                    
echo $x;echo "<br>";          //x = 10 
echo $x++;echo "<br>";        //x = 10   
echo ++$x;echo "<br>";        //x = 12 
echo $x--;echo "<br>";        //x = 12
echo --$x;echo "<br>";        //x = 10

// comparison operator 
$a=10;
$b = 5;

echo var_dump($a==$b); echo "<br>";
echo var_dump($a!=$b); echo "<br>";
echo var_dump($a<$b); echo "<br>";
echo var_dump($a>$b); echo "<br>";
echo var_dump($a<=$b); echo "<br>";
echo var_dump($a>=$b); echo "<br><hr>";

// note = (==) sign only compares the value and not the  data type that is 10 is equal to '10' if we use == but is we want to compare the data types also then we can use (===) and (!==)

// logical operators 
$a = 5;
$b = 10;
$c = 8;

echo var_dump($a>$b and $b>$c); echo "<br>";
echo var_dump($a>$b && $b>$c); echo "<br>";
echo var_dump($a>$b or $b>$c); echo "<br>";
echo var_dump($a>$b || $b>$c); echo "<br>";
echo var_dump(!true); echo "<br>";

?>

