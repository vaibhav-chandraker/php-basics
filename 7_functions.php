<?php

function summ($a,$b){
    echo $a+$b;
    echo "<br>";
}
summ(10,20);
?>

<?php

function process_marks($marks){
    $sum=0;
    foreach($marks as $value){
        $sum = $sum + $value;
    }
    return $sum;
}
$vaibhav_marks = process_marks([34,65,787,34,65,505]);

echo $vaibhav_marks

?>