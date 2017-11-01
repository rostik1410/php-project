<?php
/**
 * Created by PhpStorm.
 * User: Ростік
 * Date: 25.02.2015
 * Time: 12:53
 */
require_once "phpcode/script_php.php";
session_start();
$dbc = new DBconnector();
 if(!$dbc->checkUser($_SESSION['login'],$_SESSION['password']))
 {
     header("Location: index.php");
     exit;
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
              $newpassword = md5($newpassword);
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

if(isset($_POST['edit_email']))
{
    $email = $_POST['email'];
    $newemail = $_POST['newemail'];
    if($dbc->checkEmail($_SESSION['login'],$email))
    {
        if (strlen($newemail) >= 6)
        {
            $dbc->setEmail($_SESSION['login'], $newemail);
            $message = "E-mail успішно змінено";
        }
        else $message = "E-mail занадто короткий";
    }
    else $message = "Неправильний e-mail";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Редагування профілю</title>
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
        <form id="form1" action="edit_profile.php" method="post">
            <h3 align="center">Змінити пароль</h3>

            <input type="password" name="oldpassword" placeholder="Старий пароль"><br><br>

            <input type="password" name="newpassword" placeholder="Новий пароль"><br><br>

            <input type="password" name="confpassword" placeholder="Повторіть пароль"><br><br>

            <button name="edit_password" type="submit">Змінити пароль</button><br><br>

            <h3 align="center">Адреса вашої електронної пошти</h3>

            <input type="text" name="email" placeholder="Поточна адреса"><br><br>

            <input type="text" name="newemail" placeholder="Нова адреса"><br><br>

            <button name="edit_email" type="submit">Зберегти адресу</button><br><br>
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
