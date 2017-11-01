<?php
require_once "phpcode/script_php.php";
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
    <title>Головна</title>
    <link href="style.css" rel="stylesheet" type="text/css" /></head>
<body>
	<!-- header -->
    <div id="header">
        <div id="logo"><a href="#">ЛОГО</a>
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
             <?php
             if(!isset($_SESSION['success_reg'])){$_SESSION['success_reg']=0;}
              if($_SESSION['success_reg'] == 1)
              {
                  echo "<p align='center'><samp style = 'color: red;'>Реєстрацію успішно завершено</samp></p>";
                  unset($_SESSION['success_reg']);
              }
             if(!isset($_SESSION['error_admin'])){$_SESSION['error_admin']=0;}
             if($_SESSION['error_admin']==1)
             {
                 echo "<p align='center'><samp style = 'color: red;'>Даний користувач не є адміністратором , тому у доступі до адмін-панелі відмовлено</samp></p>";
                 unset($_SESSION['error_admin']);
             }
              ?>
                <p><strong>  “ Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid delectus iste nulla qui vel voluptas? .”

              <cite> Avtor </cite></strong></p>
                <ul>
                </ul>

                <br><br>
				<h1 align="center" >Про нас</h1>
				<p align="center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad aliquid, blanditiis commodi consectetur consequuntur dolore dolorem dolorum ea eos, error est ex exercitationem expedita harum id ipsum laboriosam molestiae nihil nisi nobis nostrum numquam praesentium provident quos similique sunt suscipit tempora tempore tenetur vitae, voluptate voluptatem. Accusamus alias deserunt dolore iste obcaecati quibusdam rerum, similique ut voluptatibus. Aperiam, consectetur dolores natus nobis obcaecati quibusdam ratione suscipit. Alias cumque dolorum facere modi quos tempore totam. Autem dolorem facilis harum minus mollitia nam recusandae repudiandae tenetur? Dignissimos fugiat officia quod sint vel! Accusamus ad aspernatur blanditiis culpa dignissimos distinctio dolorum ea eaque eligendi ex facere fugiat fugit illum, ipsam minus molestiae nihil non numquam officia omnis perferendis placeat quasi qui quod ratione sint sit ullam! A accusantium consequuntur dolore doloremque dolorum explicabo labore, nam nesciunt nisi perferendis praesentium quaerat reprehenderit sapiente similique sit. Accusamus animi asperiores, repudiandae sit tempora veritatis.</p>
				
              <figure id="photke">
                  <a href = "images/foto1_b.png" ><img src="images/foto1.png" width="320" height="175" alt=""></a>
                  <a href="images/foto2_b.png"><img src="images/foto2.png" width="320" height="175" alt=""></a>
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
