<?php
$nim=$_POST['name'];
$nimp=$_POST['password'];

if (preg_match("/\b$nim\b/", file_get_contents('secrets.txt')) && preg_match("/\b$nimp\b/", file_get_contents('secrets.txt'))) {
    echo json_encode("Вхід");
} else {
    echo json_encode("Такого імя не існує!");

}


?>