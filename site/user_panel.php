<?php
require_once "phpcode/script_php.php";
//session_start();
/**
 * Created by PhpStorm.
 * User: Ростік
 * Date: 24.02.2015
 * Time: 16:17
 */

$dbc = new DBconnector();

if(!isset($_SESSION['login'])) {$_SESSION['login']='';}
if(!isset($_SESSION['password'])){$_SESSION['password']='';}
    if ($dbc->checkUser($_SESSION['login'], $_SESSION['password']))
    {
        $avatar = $dbc->getAvatar($_SESSION['login']);
        if($avatar=="") $avatar = "default.png";
        echo "<p>Вітаю , ".$_SESSION['login'];
        echo "<p><img width='200' src = 'avatars/$avatar' alt='Аватарка' /></p>";

        echo "<br>";

        echo "<form id='edit_avatar' action='edit_avatar.php' method='post'><button id='edit_avat' type='submit'>Змінити аватарку</button></form> ";

        echo "<br>";

        echo "<form id='edit_profile' action='edit_profile.php' method='post'><button id='edit_pro' type='submit'>Редагувати профіль</button></form>";

        echo "<br>";

        echo "<form id='logout' action='logout.php' method='post'><button id='out' type='submit'>Вихід</button></form>";
    }
    else
    {
        if(!isset($_SESSION['error_auth'])){$_SESSION['error_auth']=0;}
            if ($_SESSION['error_auth'] == 1)
            {
                echo "<span style = 'color: red;'>Неправельний логін та/або пароль</span>";
            }
            require_once "authorization1.html";
    }
?>