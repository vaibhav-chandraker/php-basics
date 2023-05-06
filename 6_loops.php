<!-- while loops  -->

<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>

<?php

$k = 3;
while($k<31){

    echo $k;echo "<br>";
    $k+=3;
}
?>

<!-- for loops  -->

<?php
for($m=1; $m<=10; $m+=1){
    echo "the value of m is $m"; echo "<br>";
}

?>

<!-- do while loops  -->

<?php

$j = 10;

do{
    echo $j; echo "<br>";
    $j+=1;
}while($j<5);

?>

<!-- for each loops  -->

<?php

  $arr = array("mango","banana","apple","guava");

  for ($i=0;$i<4;$i++){
    echo $arr[$i];echo '<BR>';
    }


    // better way to do this 

    foreach($arr as $value){
        echo $value;echo "<br>";
    }
?>