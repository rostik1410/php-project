<?php
session_start();
require_once "phpcode/script_php.php";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <title>Така дуже оригінальна назва</title>
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
        <?php
        $dbc = new DBconnector();
        $db = $dbc->connectDB();

        $sql = "SELECT * FROM `articles` WHERE `id` =  ".$_SERVER['QUERY_STRING'];
        $result= $db->query($sql);
        if($result!=false)
        {

            $result_set=$result->fetch_assoc();
            echo "<h3>".$result_set['title']."</h3>";
            echo "<p>".$result_set['fulltext']."</p>";
                //$content = str_replace("&gt;", ">", $content);
                //echo $content; //вывожу текст
        }
        $dbc->closeDB($db);
        ?>
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
