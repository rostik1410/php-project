<?php
/**
 * Created by PhpStorm.
 * User: Ростік
 * Date: 25.02.2015
 * Time: 12:53
 */
require_once "phpcode/script_php.php";
session_start();
$dbc= new DBconnector();
if(!$dbc->checkUser($_SESSION['login'],$_SESSION['password']))
{
    header("Location: index.php");
    exit;
}

if(isset($_POST['edit_avatar']))
{
    $avatar = $_FILES['avatar'];
    if($dbc->isSecurity($avatar)) $dbc->loadAvatar($avatar , $_SESSION['login']);
    else $message = "Помилка при завантаженні зображення";
}
if(isset($_POST['edit_password']))
{
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $confpassword = $_POST['confpassword'];

    if($dbc->checkUser($_SESSION["login"],$oldpassword))
    {
        if(strlen($newpassword)>=6)
        {
            if($newpassword === $confpassword)
            {
                setPassword($_SESSION["login"],$newpassword);
                $_SESSION["password"]= $newpassword;
                $message = "Пароль успішно змінено";
            }
            else $message =  "Паролі не співпадають";
        }
        else $message = "Пароль занадто короткий";
    }
    else $message = "Неправильний пароль";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Змінити аватарку</title>
    <link href="style.css" rel="stylesheet" type="text/css" /></head>
<body>
<!-- header -->
<div id="header">
    <div id="logo"><a href="#">LOGO</a>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.php">Головна</a></li>
            <li><a href="tournaments.php">Турніри</a></li>
            <li><a href="news.php">Новини</a></li>
            <li><a href="partners.php">Партнери</a></li>
            <li><a href="contacts.php">Контакти</a></li>
        </ul>
    </div>
</div>
<!--end header -->
<!-- main -->
<div id="main">

    <?php
    require_once"sidebar.html";
    ?>

    <div id="text" >
        <?php
        if(isset($message))
        {
            echo "<p style='color:red;'>$message</p>";
            unset($message);
        }
        ?>
        <h1 align="center">Редагувати профіль</h1>
        <form id="form1" action="edit_avatar.php" method="post" enctype="multipart/form-data">
<p>
            <input type="file" name="avatar" /><br><br>
</p>
            <button name="edit_avatar" type="submit">Змінити аватарку</button><br><br>

        </form>
    </div>
</div>
<!-- end main -->
<!-- footer -->
<div id="footer">
    <div id="left_footer">&copy;Така дуже оригінальна назва 2015 </div>
    <div id="right_footer">
    </div>
</div>
<!-- end footer -->
</body>
</html>
