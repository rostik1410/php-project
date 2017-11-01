<?php
session_start();
require_once "phpcode/script_php.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Турніри</title>
    <link href="style.css" rel="stylesheet" type="text/css" /></head>
<body>
<!-- header -->
<div id="header">
    <div id="logo"><a href="#">Ага , нейм - нейм </a>
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
        <p  id="info_tournament">
            Ми раді вітати Вас
            <br><br>
            на Турнірі по фусболу (настольному футболу) серед ІТ компаній.
            <br><br>
            Організатором Турніру є Спілка Фусболу України .
            <br><br>
            Турнир Foosball IT Cup відбудеться в Crowbar. .
            <br><br>
            В турнірі приймуть участь 32 команди по 2 гравці.
            <br><br>
            До участі в турнірі Foosball IT Cup запрошуються співробітники IT компаній та IT відділів .
            <br><br>
            Реєстрація участників з 15.02 по 15.03.2015р. Зареєструвати команду Ви можете
            <br><br>
            безпосередньо у місті проведення , але поспішайте , 
			<br><br>
			кількість місць обмежена.
            <br><br>
            В заявках повинні бути вказані прізвища та імена учасників
            <br><br>
            і контактні дані ( тел., e-mail).
            <br><br>
            На турнірі Вас чекають:
            <br><br>
            яскраві емоції і враження,
            <br><br>
            незабутня командна гра ,
            <br><br>
            визнання і разчарування вболівальників ,
            <br><br>
            розважальний майданчик з конкурсами та призами від партнерів турніру .
            <br><br>
            фотосесія команд  від професіональних фотографів.
        </p>
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
