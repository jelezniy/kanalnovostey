<?php
const DB_USER = 'asdat_stud9';
const DB_PASS = 'd444g4kb';
const DB_NAME = 'asdat_stud9';
const DB_HOST = 'asdat.mysql.ukraine.com.ua';
const DB_PORT = '3306';

$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// если ошибка подключения, то выводим ее на экран
if (mysqli_connect_errno($mysqli)) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}
mysqli_set_charset ($mysqli, 'utf8');