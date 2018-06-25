<?php
require_once 'DB.php';
$nim=$_POST['name'];
$nimp=$_POST['password'];
$result = mysqli_query(DataBase::Connect(), "SELECT * FROM `logreg` ");

if ($result) {
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
      if (preg_match("/\b$nim\b/",$row[1]) && preg_match("/\b$nimp\b/",$row[2])) {
            $rey="True";
           break;
        } else {
            $rey="False";
        }
       
        
}
echo json_encode($rey); 
}
DataBase::Close();

?>