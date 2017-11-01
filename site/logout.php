<?php
/**
 * Created by PhpStorm.
 * User: Ростік
 * Date: 25.02.2015
 * Time: 1:37
 */
session_start();
unset($_SESSION['login']);
unset($_SESSION['password']);

 header("Location: ".$_SERVER['HTTP_REFERER']);
?>