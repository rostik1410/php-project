<?php
session_start();
require_once "../phpcode/script_php.php";

$dbc = new DBconnector();
if(!isset($_SESSION['login']))
{
    $_SESSION['login']="";
}

if(!isset($_SESSION['password']))
{
    $_SESSION['password']="";
}

if($dbc->checkUser($_SESSION['login'],$_SESSION['password']))
{
    header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <title>Вхід в Адмін-панель</title>
    <link href="../style.css" rel="stylesheet" type="text/css" /></head>
<body>
<!-- header -->
<div id="header">
    <div id="logo"><a href="#">LOGO </a>
    </div>
    <div id="menu">
        <ul>
            <li><a href="../index.php">Головна</a></li>
            <li><a href="../tournaments.php">Турніри</a></li>
            <li><a href="../partners.php">Партнери</a></li>
            <li><a href="../contacts.php">Контакти</a></li>
        </ul>
    </div>
</div>
<!--end header -->
<!-- main -->
<div id="main">

    <div id="sidebar">
        <p><strong>НАШ ОФІС</strong></p>

        <p><a href="../images/office_b.png"><img src="../images/office.png" width="230" height="180" alt="Our offices"></a></p>
        <p><a href="../images/office2_b.png"><img src="../images/office2.png" width="230" height="180" alt="Our offices"></a></p>
    </div>

    <div id="text" >
        <?php
        if(!isset($_SESSION['error_auth']))
        {
            $_SESSION['error_auth']=0;
        }
            if($_SESSION['error_auth']==1)
            {
                echo "<p align='center'><samp style = 'color: red;'>Неправильний логін і/або пароль</samp></p>";
                unset($_SESSION['error_auth']);
            }
        ?>
        <form name="login" action="../login.php" method="post">

                <input type="text" name="login" placeholder="Логін"/><br><br>

                <input type="password" name="password" placeholder="Пароль"/><br><br>

                <button type="submit" name="in">Увійти</button><br><br>

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
