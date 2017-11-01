<?php
require_once "start.php";
require_once "../phpcode/script_php.php";
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
    $success = $dbc->editArticle($_POST["title"],$_POST['introtext'],$_POST['fulltext']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <title>Змінити статтю</title>
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
            echo "<samp style='color:red'>Стаття успішно змінена</samp>";
            $success=false;
        }
        elseif(isset($_POST['editarticle'])) echo "Помилка";
        ?>
        <form action="" name="editarticle" method="post">
            <?php
            $dbc->getAllArticlesTitle();

            if(!isset( $_REQUEST['choiser']))
            {
                $_REQUEST['choiser']=1;
            }
                    $db = $dbc->connectDB();
                    $sql = "SELECT * FROM `articles` WHERE `title` ='$_REQUEST[choiser]'";
                    $result = $db->query($sql);
                    if ($result != false)
                    {

                        $result_set = $result->fetch_assoc();
                        echo "<br>Назва: <br> <input type='text' name='title' readonly value='$result_set[title]' ><br><br>";
                        echo "<br>Вступ: <br> <textarea name='introtext' cols='40' rows='10' >". $result_set['introtext'] . "</textarea><br><br>";
                        echo " Повний текст: <br> <textarea  name='fulltext' cols='40' rows='10' >". $result_set['fulltext'] ."</textarea><br><br>";
                        echo "<button type='submit' name='newarticle'>Змінити статтю</button><br><br>";
                    }
                    $dbc->closeDB($db);
            ?>

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
