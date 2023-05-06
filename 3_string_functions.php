<?php

// to concatenate the strings (.) is used
echo "I am " . "vaibhav";
echo "<br>";

// strlen is used to find the lenght of the string 
$name = "vaibhav";
echo strlen($name);
echo "<br>";

// str_word_count is used to find the no of words inside the string 
$sentence = "my name is vaibhav";
echo str_word_count($sentence);
echo "<br>";

// strrev is used to reverse a string 
echo strrev($sentence);
echo "<br>";

// strpos is used to find the position of a substring inside a string 
echo strpos($sentence , "name");
echo "<br>";

// str_replace is used to replace a subtring 
echo str_replace("vaibhav","harry",$sentence);
echo "<br>";

// str_repeat is used to repeat a string for given no of times 
echo str_repeat($sentence , 10);
echo "<br>";

// trim is used to trime the white spaces in the start and end of string 
echo trim("   hello      ") 

?>