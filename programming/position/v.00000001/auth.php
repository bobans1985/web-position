<?php  

// Данный файл всегда будит "включаться" в другие файлы  
// директивой include поэтому следует запретить его самостоятельный вызов  
// из строки запроса путём указания его имени  
// Если не определена константа IN_ADMIN - завершаем работу скрипта  
if(!defined("IN_ADMIN")) die;  

// Начинаем сессию  
session_start();  
// Помещаем содержимое файла в массив  
$access = array();  
$access = file("templates/pass_pEGfr8X486XWP5P.php");  
// Разносим значения по переменным - пропуская первую строку файла - 0  
$login = trim($access[1]);  
$passw = trim($access[2]);  
// Проверям были ли посланы данные  
if(!empty($_POST['enter']))  
{  
        $_SESSION['login'] = md5($_POST['login']);  
        $_SESSION['passw'] = md5($_POST['passw']);  
        $_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
        $_SESSION['ip'] = md5($_SERVER['REMOTE_ADDR']);//$_POST['passw'];  
}  

// Если ввода не было, или они не верны  
// просим их ввести  
if(empty($_SESSION['login']) or  
   $login != $_SESSION['login'] or  
   md5($_SERVER['HTTP_USER_AGENT' ]) !=$_SESSION['agent'] or
   $passw != $_SESSION['passw'] or 
   md5($_SERVER['REMOTE_ADDR']) != $_SESSION['ip'] 
      )  

{  
     include("templates/auth0.php");
   ?>  
   <?php  
   die;  
}  
?> 

