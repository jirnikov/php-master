<?php

//подключаем файл конфигурации

include_once("config.php");

//Устанавливаем соединение с базой данных

function connectDB ($sql) {

    $db = mysqli_connect(HOST_NAME, DB_USER, DB_PASS, DB_NAME);
    if ($db == false){
        exit("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());

    } else {

    $db_query = mysqli_query($db, $sql);
    return $rows = mysqli_fetch_all($db_query, MYSQLI_ASSOC);
    }
}   

function showTable ($limit = 4) {
    $sql = "SELECT * FROM Products ORDER BY DATE_CREATE DESC LIMIT " . $limit;
    return connectDB($sql);
}
