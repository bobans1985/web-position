<?php  

// ������ ���� ������ ����� "����������" � ������ �����  
// ���������� include ������� ������� ��������� ��� ��������������� �����  
// �� ������ ������� ���� �������� ��� �����  
// ���� �� ���������� ��������� IN_ADMIN - ��������� ������ �������  
if(!defined("IN_ADMIN")) die;  

// �������� ������  
session_start();  
// �������� ���������� ����� � ������  
$access = array();  
$access = file("templates/pass_pEGfr8X486XWP5P.php");  
// �������� �������� �� ���������� - ��������� ������ ������ ����� - 0  
$login = trim($access[1]);  
$passw = trim($access[2]);  
// �������� ���� �� ������� ������  
if(!empty($_POST['enter']))  
{  
        $_SESSION['login'] = md5($_POST['login']);  
        $_SESSION['passw'] = md5($_POST['passw']);  
        $_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
        $_SESSION['ip'] = md5($_SERVER['REMOTE_ADDR']);//$_POST['passw'];  
}  

// ���� ����� �� ����, ��� ��� �� �����  
// ������ �� ������  
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

