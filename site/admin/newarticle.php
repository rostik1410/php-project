<?php
require_once "start.php";
require_once "../phpcode/script_php.php";

$dbc = new DBconnector();
if(!isset($_POST["title"]))
{
    $_POST["title"]="";
}

if(!isset($_POST["introtext"]))
{
    $_POST["introtext"]="";
}

if(!isset($_POST["fulltext"]))
{
    $_POST["fulltext"]="";
}
$success = false;

if(isset($_POST['newarticle']))
{
    $success = $dbc->addArticle($_POST["title"],$_POST['introtext'],$_POST['fulltext']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <title>Додати нову статтю</title>
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
            <li><a href="../news.php">Новини</a></li>
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
            require_once"blocks/menu.php";
        if($success)
        {
            echo "<samp style='color:red'>Стаття успішно додана</samp>";
            $success=false;
        }
        elseif(isset($_POST['newarticle'])) echo "Помилка";
        ?>
        <form action="" name="newarticle" method="post">
            <input type="text" name="title" placeholder="Назва" value="<?php echo $_POST['title'];?>"/><br><br>
            Вступ: <br> <textarea name="introtext" cols="40" rows="10" ><?php echo $_POST['introtext'];?></textarea><br><br>
            Повний текст: <br> <textarea  name="fulltext" cols="40" rows="10" ><?php echo $_POST['fulltext'];?></textarea><br><br>
            <button type="submit" name="newarticle">Додати статтю</button><br><br>
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
