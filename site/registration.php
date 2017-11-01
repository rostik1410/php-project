<?php
require_once "phpcode/script_php.php";
session_start();

$dbc = new DBconnector();

$error_name= false;
$error_lastname= false;
$error_email=false;
$error_password=false;
$error_login = false;
$error_login_same = false;
if(isset($_POST['reg']))
{
    $password =htmlspecialchars($_POST['password']);
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $login = htmlspecialchars($_POST['login']);
    $bad=false;

	unset($_SESSION['success_reg']);

    if((strlen ($login)<2 )|| (strlen ($login)>32 ))
    {
        $error_login = true;
        $bad = true;
    }

    if((strlen ($password)<6 )|| (strlen ($password)>32 ))
    {
       $error_password = true;
       $bad = true;
    }
    if((strlen ($name) <2 )|| (strlen ($name) >32 ))
    {
       $error_name = true;
        $bad = true;
    }
    if((strlen ($lastname) <2 )|| (strlen ($lastname) >32 ))
    {
        $error_lastname = true;
        $bad = true;
    }
    if((strlen ($email) <3 )|| (strlen ($email) >32 ))
    {
        $error_email = true;
        $bad = true;
    }
	
	if(!$bad)
	{
        if(!$dbc->checkLogin($login))
        {
            $user = new User($name, $lastname, $email, $login, md5($password));
            $dbc->regUser($user);
            $_SESSION['success_reg'] = 1;
            header("Location: index.php");
        }
        else
        {
            $error_login_same = true;
        }
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Реєстрація</title>
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
    <div id="sidebar">
        <p><strong>НАШ ОФІС</strong></p>
        <p><a href="images/office_b.png"><img src="images/office.png" width="230" height="180" alt="Our offices"></a></p>
        <p><a href="images/office2_b.png"><img src="images/office2.png" width="230" height="180" alt="Our offices"></a></p>
    </div>
    <div id="text" >
        <form id="form1" action="" method="post">
        <?php
            if($error_login_same == true) echo "<p><span style = 'color: red;'>Користувач з таким логіном уже існує , вигадайте інший логін </span></p>";
        	if($error_name == true) echo "<p><span style = 'color: red;'>Некоректне имя</span></p>";
	        if($error_lastname == true)echo "<p><span style = 'color: red;'>Некоректне прізвище</span></p>";
	        if($error_email == true)echo "<p><span style = 'color: red;'>Некоректний e-mail</span></p>";
            if($error_login==true) echo "<p><span style = 'color: red;'>Некоректний логін</span></p>";
        	if($error_password== true)echo "<p><span style = 'color: red;'>Некоректний пароль</span></p>";
        ?>
            <br><br><br>
            <input type="text" name="name" placeholder="Ім'я"><br><br>

            <input type="text" name="lastname" placeholder="Прізвище"><br><br>

            <input type="text" name="email" placeholder="e-mail"><br><br>

            <input type="text" name="login" placeholder="login"><br><br>

            <input type="password" name="password" placeholder="Пароль"><br><br>

            <button name="reg" type="submit">Зареєструватись</button><br><br>

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
