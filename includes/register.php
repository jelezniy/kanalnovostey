
<form name="forma1" id="registration_form" action="register.php" >
     
            <table  border="0" cellspacing="5" cellpadding="5" align="center">


   <tr> 
    <td >Фамилия</td>
    <td><input type="text" name="surname" size="25"></td>
   </tr>

   <tr>
    <td >Имя</td> 
    <td><input type="text" name="name" size="25"></td>
   </tr>

    <tr>
    <td  >E-mail</td>
    <td><input type="text" name="e-mail" size="25"></td>
   </tr>
   
   <tr>
    <td >Телефон</td>
    <td><input type="text" name="phone" size="25"></td>
   </tr>
   
   <tr>
    <td  >Пароль</td>
    <td><input type="password" name="pswd" size="25"></td>
   </tr>

   <tr>
    <td   >Пол</td>
    <td>
      <input type="radio" name="sex" value="man" checked>
      Мужской
      <input type="radio" name="sex" value="woman">
      Женский
    </td>
   </tr>


   <tr>
    <td colspan="2">
        <input type="submit" name="submit" value="Отправить" >
    </td>
   </tr>

 </table>

</form>

<?php 
      if((isset($_REQUEST['surname'])))
        {
            if((($_REQUEST['surname']=="")||($_REQUEST['name']=="")||($_REQUEST['lastname'==""])||($_REQUEST['e-mail']=="")||($_REQUEST['phone']=="")||($_REQUEST['pswd']==""))) 
                { 
                    echo "Заполните все поля!";
            
                }else 
            {
                echo "все поля заполнены<br>"; 
                if(preg_match('#^[а-яА-Я]{2,50}(\S)$#is', $_REQUEST['surname']))   
                {
                    echo "Фамилия соответствует шаблону<br>";
                } else
                {
                    echo "Фамилия не соответствует шаблону!<br>";
                }
                /*
              if(preg_match('#^[а-яА-Я]{2,}(\S)$#is', $_REQUEST['name']))   
                {
                    echo "Имя соответствует шаблону<br>";
                } else
                {
                    echo "Имя не соответствует шаблону!<br>";
                }
                  if(preg_match('#^[а-яА-Я]{2,}(\S)$#is', $_REQUEST['lastname']))  
                {
                    echo "Отчество соответствует шаблону<br>";
                } else
                {
                    echo "Отчество не соответствует шаблону!<br>";
                }*/
            }
        } else { }
      ?>

































<?php /*
session_start();

$errors - array ();
//if (isset($_POST['login']) && empty($_POST['login'])) {
//    $errors['login'] = 'Поле не заполнено';
//} 

if (isset ($_POST['login'], $_POST['email'], $_POST ['pass'])) {
    if (empty($_POST['login'])) {
        $errors['login'] = 'Логин не указан';
    }
    if (empty($_POST['pass'])) {
        $errors['pass'] = 'Пароль не указан';
    }
    if (empty($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email не указан';
    }
    if (!count($errors)) {
    mysql_querry($link,"
        INSERT INTO `users` SET
        `login` = '".mysqli_real_escape_string($link, $_POST ['login']). "'
        `pass` = '".mysqli_real_escape_string($link, $_POST ['pass']). "'
        `email` = '".mysqli_real_escape_string($link, $_POST ['email']). "'
        ");  
}

/*
if(! isset ($_POST['login']) or $_POST['pass']==''){
	$_POST['login']=$_SESSION['login'];
	$_POST['pass']=$_SESSION['pass'];
	}
if($_POST['login']=='user' and $_POST['pass']=='1234'){
	$_SESSION['login']=$_POST['log'];
	$_SESSION['pass']=$_POST['pass'];
 
 echo "заработало";

 }else{
	echo"неверный пароль";
	
	echo $_POST;
	echo $_SESSION;
	echo $_POST['login']=='user';
	echo $_POST ['pass']=='1234';}
 
 */
?>
	