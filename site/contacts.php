<?php
session_start();
require_once "phpcode/script_php.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Контакти</title>
    <link href="style.css" rel="stylesheet" type="text/css" /></head>
<body>
<!-- header -->
<div id="header">
    <div id="logo"><a href="#">LOGO </a>
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
    require_once "sidebar.html";
    ?>
    <div id="text" >
        <h1><strong></strong></h1>
        <p id="call"><strong >  ЯКЩО У ВАС ВИНИКЛИ ЯКІСЬ ПИТАННЯ, ЗАТЕЛЕФОНУЙТЕ АБО НАПИШІТЬ НАМ .</strong></p>
        <div id="contact">
        <figure>
            <img src="images/post.png" width="90" height="90" alt="">
            <figcaption>e-mail: site.developer@gmail.com</figcaption>
        </figure>

        <figure>
            <img src="images/phone.png" width="90" height="90" alt="">
            <figcaption>Тел: +380 63 765 34 76</figcaption>
        </figure>
        </div>
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
