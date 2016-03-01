<?php
session_start();

if(! isset ($_POST['log']) or $_POST['pass']==''){
	$_POST['log']=$_SESSION['log'];
	$_POST['pass']=$_SESSION['pass'];
	}
if($_POST['log']=='user' and $_POST['pass']=='1234'){
	$_SESSION['log']=$_POST['log'];
	$_SESSION['pass']=$_POST['pass'];
 
 echo "заработало";

 }else{
	echo"неверный пароль";
	
	echo $_POST;
	echo $_SESSION;
	echo $_POST['log']=='user';
	echo $_POST ['pass']=='1234';}
?>
	