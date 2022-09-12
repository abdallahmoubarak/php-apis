<?php

$password = $_POST['password'];

if (strlen($password) >= 12) {
    if (preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/[0-9]/', $password) && preg_match('/[^A-Za-z0-9]/', $password)) {
         echo json_encode(array('isStrong'=> TRUE));
    }
    else {
        echo json_encode(array('isStrong'=> FALSE));
    }
}
else {
     echo json_encode(array('isStrong'=> FALSE));
}

?>