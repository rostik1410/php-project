<?php
session_start();
require_once "phpcode/script_php.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Партнери</title>
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
    require_once "sidebar.html";
    ?>
    <div id="text" >
        <h1><strong></strong></h1>
        <p id="call"><strong >  ІНФОРМАЦІЙНІ ПАРТНЕРИ .</strong></p>
            <figure id="partner">
                <a href="http://vk.com" ><img src="images/vk%20logo%20partners.png" width="120" height="120" alt=""></a>
                <a href="http://twitter.com" ><img src="images/twitter%20logo%20partners.png" width="148" height="120" alt=""></a>
                <a href="http://facebook.com" ><img src="images/facebook%20logo%20partners.png" width="120" height="120" alt=""></a>
            </figure>

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
