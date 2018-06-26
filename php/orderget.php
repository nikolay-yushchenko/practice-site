<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 25.06.2018
 * Time: 18:20
 */
require_once 'DB.php';
$gorder="INSERT INTO `order`(`idorder`, `tel`, `name`, `email`, `delivery`, `idgoodorder`) VALUES (NULL,4546665,'Андрей','ang@gmail.com','samovivoz',111111)";
mysqli_query(DataBase::Connect(), $gorder);
/**if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo "ID:".$row[0]." ","Name:".$row[1]." ","Password:".$row[2]."<br>";
    }
    mysqli_free_result($result);
 */
    DataBase::Close();
?>