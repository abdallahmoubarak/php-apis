<?php 

$string = $_GET['string']; 
$reversedString = strrev($string); 

if ($string == $reversedString) { 
$result = array( "isPalindrome" => TRUE ); 
} 

else { 
$result = array( "isPalindrome" => FALSE ); 
} 
echo json_encode($result);

?>