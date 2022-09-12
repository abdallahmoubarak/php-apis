<?php 

$string = $_GET['string']; 
$reversedString = strrev($string); 

if ($string == $reversedString) { 
$result = array( "isPalindrome" => true ); 
} 

else { 
$result = array( "isPalindrome" => false ); 
} 
echo json_encode($result);

?>