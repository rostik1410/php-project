<?php
/**
 * Created by PhpStorm.
 * User: Ростік
 * Date: 26.02.2015
 * Time: 12:55
 */
session_start();
require_once "../phpcode/script_php.php";
$dbc = new DBconnector();

if(!($dbc->checkUser($_SESSION['login'],$_SESSION['password'])))
{
    header("Location: auth.php");
    exit;
}
else
{
    if(!($dbc->isAdmin($_SESSION['login'])))
    {
        $_SESSION["error_admin"]=1;
        header("Location: ../index.php");
        exit;
    }
}
?>