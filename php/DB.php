<?php
/*
	Класс создает соединение с базой данных
  */
define('DB_SERVER', 'localhost');       // IP адрес сервера БД или если локальный ПК localhost
define('DB_USERNAME', 'root');         // Имя пользователя
define('DB_PASSWORD', ''); // Пароль пользователя
define('DB_DATABASE', 'tvcore');        // Имя базы данных
class DataBase
{
    public static $mConnect;	// Хранит результат соединения с базой данных

    // Метод создает соединение с базой данных
    public function Connect()
    {
        // Пробуем создать соединение с базой данных

        self::$mConnect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);

        // Если подключение не прошло, вывести сообщение об ошибке..
        if(!self::$mConnect)
        {
            echo "<p><b>К сожалению, не удалось подключиться к серверу MySQL</b></p>";
            exit();
            return false;
        }

        // Возвращаем результат
        return self::$mConnect;
    }

    // Метод закрывает соединение с базой данных
    public static function Close()
    {
        // Возвращает результат
        return mysqli_close(self::$mConnect);
    }

}
?>