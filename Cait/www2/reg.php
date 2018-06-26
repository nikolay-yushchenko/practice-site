<?php
$nim=$_POST['regname'];
$nimp=$_POST['regpassword'];
$nims=" ".$_POST['regname']." ".$_POST['regpassword']." ";

if (preg_match("/\b$nim\b/", file_get_contents('secrets.txt'))) {
    echo json_encode("Такого імя занято!");
} else {
    file_put_contents('secrets.txt',file_get_contents('secrets.txt').$nims);
    echo json_encode("Вхід");
}
?>