<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 25.06.2018
 * Time: 18:00
 */
require_once 'DB.php';
$result = mysqli_query(DataBase::Connect(), "SELECT * FROM `goods` ");
if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo "Name: ".$row[1]." ","Price: ".$row[2]." ","Description: ".$row[3],"Image: ".$row[4],"Quantity: ".$row[5]."<br>";
    }
    mysqli_free_result($result);
    DataBase::Close();
}