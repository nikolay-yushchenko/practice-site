<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.06.2018
 * Time: 22:50
 */
$name= $_POST["name"];
$price= $_POST["price"];
$desc= $_POST["description"];
$n= $_POST["quantity"];
echo $_POST["name"];
echo $_POST["price"];
echo $_POST["description"];
echo $_POST["quantity"];
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";

mkdir("../img/$name", 0700);
$uploaddir = "../img/$name/";
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

$uploadfiles = $uploaddir.basename($_FILES['uploadfiles']['name']);
$uploadfilet = $uploaddir.basename($_FILES['uploadfilet']['name']);
$upload=$uploadfile.$uploadfiles.$uploadfilet;
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)&&move_uploaded_file($_FILES['uploadfiles']['tmp_name'], $uploadfiles) &&move_uploaded_file($_FILES['uploadfilet']['tmp_name'], $uploadfilet))
{
    echo "<h3>Файлы успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файлы на сервер!</h3>"; exit; }

require_once 'DB.php';
$gorder="INSERT INTO `goods`(`idgood`, `name`, `price`, `description`, `image`, `quantity`) VALUES (NULL,'$name',$price,'$desc','$upload',$n)";
mysqli_query(DataBase::Connect(), $gorder);

?>