<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 26.06.2018
 * Time: 22:50
 */
header( "refresh:10;url=../admin.html" );
$name= $_POST["name"];
$price= $_POST["price"];
$desc= $_POST["description"];
$n= $_POST["quantity"];

mkdir("../img/$name", 0700);
$uploaddir = "../img/$name/";
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

$uploadfiles = $uploaddir.basename($_FILES['uploadfiles']['name']);
$uploadfilet = $uploaddir.basename($_FILES['uploadfilet']['name']);
$upload=$uploadfile.$uploadfiles.$uploadfilet;
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)&&move_uploaded_file($_FILES['uploadfiles']['tmp_name'], $uploadfiles) &&move_uploaded_file($_FILES['uploadfilet']['tmp_name'], $uploadfilet))
{
    echo "<h3>Файлы успешно загружены на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файлы на сервер!</h3>"; exit; }

require_once 'DB.php';
$gorder="INSERT INTO `goods`(`idgood`, `name`, `price`, `description`, `image`, `quantity`) VALUES (NULL,'$name',$price,'$desc','$upload',$n)";
mysqli_query(DataBase::Connect(), $gorder);

echo "<p><b>Название товара:".$_POST["name"]."</b></p>";
echo "<p><b>Цена товара: ".$_POST["price"]."</b></p>";
echo "<p><b>Описание товара: ".$_POST["description"]."</b></p>";
echo "<p><b>Количество на складе: ".$_POST["quantity"]."</b></p>";
echo "<img style='border: 1px solid red' src='$uploadfile' />";
echo "<img  style='border: 1px solid red'  src='$uploadfiles' />";
echo "<img  style='border: 1px solid red' src='$uploadfilet' />";

?>