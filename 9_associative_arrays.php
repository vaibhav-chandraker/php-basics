<?php

// array 
$arr = array("green","blue","red"); //these are numeric arrays because we can do indexing with numbers
echo $arr[1];
echo "<br>";

$favcol = array("vaibhav"=>"orange","avinash"=>"blue",25=>"red");
echo $favcol["vaibhav"];
echo "<br>";
echo $favcol["avinash"];
echo "<br>";
echo $favcol[25];
echo "<br>";

foreach($favcol as $key => $value){
    echo "the value of $key is $value<br>";
}


?>