<?php
include('config.app');

    //Функция подключения к базе данных
    function db_connect()
    {
        $host = 'asdat.mysql.ukraine.com.ua';
        $user = 'asdat_stud9';
        $pswd = 'd444g4kb';
        $db = 'asdat_stud9';

        $connection = mysql_connect($host, $user, $pswd);
        mysql_set_charset ('utf8');
        //mysql_query("SET NAMES utf8");

        mysql_select_db($db, $connection);

        return $connection;
    }

    //Функция выборки основного меню
    function get_menu()
    {
        db_connect();

        $result = mysql_query("SELECT * FROM menu WHERE menu.parent_id='0' ORDER BY menu.id");

        while($row = mysql_fetch_array($result))
        {
            $res_array[$count] = $row;
            $count++;
        }

        return $res_array;
    }

    //Функция выборки подменю
   function get_submenu($parent)
    {
        db_connect();

        $result = mysql_query("SELECT * FROM menu WHERE menu.parent_id='Новости' ORDER BY menu.id");

        while($row = mysql_fetch_array($result))
        {
            $res_array[$count] = $row;
            $count++;
        }

        return $res_array;
    }

?>