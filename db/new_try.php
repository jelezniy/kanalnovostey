<?php
//ini_set('display_errors',1);
//error_reporting(E_ALL);
//include ('config.app');
// подключаемся к БД
  $host = 'asdat.mysql.ukraine.com.ua';
  $user = 'asdat_stud9';
  $pswd = 'd444g4kb';
  $db = 'asdat_stud9';

$mysqli = mysqli_connect($host, $user, $pswd, $db);
// если ошибка подключения, то выводим ее на экран
// mb_internal_encoding("UTF-8");
if (mysqli_connect_errno($mysqli)) {
        echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
        }
mysqli_set_charset ($mysqli, 'utf8');
$res = mysqli_query($mysqli, "SELECT * FROM `menu` ");
    if($res){
            echo '<ul>';
            while($item = mysqli_fetch_assoc($res)){
    ?>
            <li>
				<a href=" <?php echo $item['main']?'/':$item['link'];?>" 
					title="<?php echo  $item['title'];?>"> 
					<?php echo $item['title'];?>
				</a>
            </li>
            <?php

            }   
        
	echo '</ul>';
}
mysqli_close($mysqli);
?>



