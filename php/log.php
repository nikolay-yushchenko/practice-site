<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 24.06.2018
 * Time: 21:06
 */
require_once 'DB.php';
//$logname=$_POST['name'];
//$logpass=$_POST['password'];

$logname="tvcore";
$logpass="12345";

$result = mysqli_query(DataBase::Connect(), "SELECT * FROM `logreg` ");
if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo "ID:".$row[0]." ","Name:".$row[1]." ","Password:".$row[2]."<br>";
        if (preg_match("/\b$logname\b/",$row[1]) && preg_match("/\b$logpass\b/", $row[2])) {
            //echo json_encode("True");
            print("Yessssssss");
            //break;
        } else {
            //echo json_encode("False");
            print("Nooooooooo");

        }
    }
    mysqli_free_result($result);
    DataBase::Close();
}

?>