<?php

$christmas = strtotime("December 26"); 
$today = time(); 
$diff = $christmas - $today; 
$days = floor($diff / (60*60*24) ); 

$result = array( "days" => $days );

echo json_encode($result);

?>