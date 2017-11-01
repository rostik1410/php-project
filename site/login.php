<?php
require_once "phpcode/script_php.php";
session_start();
//if(isset($_REQUEST[session_name()]))
/**
 * Created by PhpStorm.
 * User: Ростік
 * Date: 24.02.2015
 * Time: 16:23
 */
$dbc = new DBconnector();
$login = htmlspecialchars($_POST['login']);
$password =htmlspecialchars(md5($_POST['password']));
unset($_SESSION['error_auth']);
if($dbc->checkUser($login , $password))
{
    $_SESSION['login']= $login;
    $_SESSION['password']= $password;
}
else $_SESSION['error_auth'] = 1;
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit;
?>