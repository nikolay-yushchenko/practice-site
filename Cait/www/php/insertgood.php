<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 25.06.2018
 * Time: 18:47
 */

require_once 'DB.php';
$gorder="INSERT INTO `goods`(`idgood`, `name`, `price`, `description`, `image`, `quantity`) VALUES (NULL,'SAMSUNG',38000,' 18 19 ff','/fff/fff',11111)";
mysqli_query(DataBase::Connect(), $gorder);
/**if ($result) {
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
echo "ID:".$row[0]." ","Name:".$row[1]." ","Password:".$row[2]."<br>";
}
mysqli_free_result($result);
 */
DataBase::Close();
?>