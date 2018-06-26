<?php
// Параметры соединения с базой данных
require_once 'DB.php';
$result = mysqli_query(DataBase::Connect(), "SELECT * FROM `logreg` ");
if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo "ID:".$row[0]." ","Name:".$row[1]." ","Password:".$row[2]."<br>";
    }
    mysqli_free_result($result);
    DataBase::Close();
}
?>
