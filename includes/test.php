<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

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

if (isset($_POST['submit'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $r_password = $_POST['r_password'];
if ($password == $r_password){
    $password = md5('$password');
    
    $query = mysqli_query($mysqli, "INSERT INTO `users` VALUES(NULL,'$login','$password')")or die(mysqli_error($mysqli));
    }     
else {
    die('Password must match!');    
    }
}

if (isset($_POST['Enter'])){
    $e_login = $_POST['e_login'];
    $e_password = md5($_POST['e_password']);
    
    $query = mysqli_query($mysqli, "SELECT * FROM `asdat_stud9`.`users` WHERE login='$e_login'")or die(mysqli_error($mysqli));
    $user_data = mysqli_fetch_array($query);
    
    if($user_data['password'] == $e_password){
        echo "ok";
    }
 else {
        echo "wrong password or login";    
    }
}


mysqli_close($mysqli);


?>

<form method="post" action="test.php">
    <input type="text" name="login" placeholder="Логин" required /><br>
    <input type="password" name="password" placeholder="Пароль" required /><br>
    <input type="password" name="r_password" placeholder="Повторите пароль" required /><br>
    <input type="submit" name="submit" value="Зарегистрироваться" />
</form>



<form method="post" action="test.php">
    <input type="text" name="e_login" placeholder="Логин" required /><br>
    <input type="password" name="e_password" placeholder="Пароль" required /><br>    
    <input type="submit" name="enter" value="Войти" />
</form>





