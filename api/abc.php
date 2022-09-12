<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$result = pow($a, 3) + $b * $c - $a / $b;

echo json_encode(array('res'=>$result));
?>