<?php
/**
 * Created by PhpStorm.
 * User: Ростік
 * Date: 24.02.2015
 * Time: 16:55
 */

class User{
    public $name;
    public $surname;
    public $login;
    public $email;
    public $password;

    public function __construct($name, $surname, $login, $email, $password)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
    }
}

class DBconnector
{

    function connectDB()
    {
        return new mysqli('localhost', 'user1', '', 'mysite');

    }

    function closeDB($db)
    {
        $db->close();
    }

    function getAllArticles()
    {
        $db = $this->connectDB();
        $sql = "SELECT * FROM `articles`";
        $result = $db->query($sql);
        if ($result != false) {
            while ($result_set = $result->fetch_array()) //запустил цикл до последнего элемента
            {
                echo "<h3>" . $result_set['title'] . "</h3>";
                echo "<p>" . $result_set['introtext'] . "<br><a href='read_full_text.php?$result_set[id]'>Читати повністю</a>";
            }
        }
        $this->closeDB($db);
    }

    function getAllArticlesTitle()
    {
        $db = $this->connectDB();
        $sql = "SELECT * FROM `articles`";
        $result = $db->query($sql);
        if ($result != false) {
            echo "<select name='choiser'><option disable>Виберіть статтю для редагування </option>";
            while ($result_set = $result->fetch_array()) //запустил цикл до последнего элемента
            {
                echo "<option name='$result_set[title]' value= '$result_set[title]'>$result_set[title]</option>";
            }
            echo "</select>";

            echo "<br><br><button name='chouse' type='submit'>Обрати</button>";

            if (isset($_GET['chouse']))
                $_SESSION['title'] = $_GET['choiser'];

            $this->closeDB($db);
        }

    }

    function regUser($user)
    {
        $db = $this->connectDB();
        $sql = "INSERT INTO `users` (`name`,`lastname`,`email`,`login`,`password`) VALUES('$user->name','$user->lastname','$user->email','$user->login','$user->password')";
        $db->query($sql);
        $this->closeDB($db);
    }

    function addArticle($title, $introtext, $fulltext)
    {
        $db = $this->connectDB();
        $sql = "INSERT INTO `articles` VALUES (NULL ,'$title','$introtext','$fulltext')";
        $success = $db->query($sql);
        $this->closeDB($db);
        return $success;
    }

    function editArticle($title, $introtext, $fulltext)
    {
        $db = $this->connectDB();
        $sql = "UPDATE `articles` SET `introtext`='$introtext',`fulltext`='$fulltext' WHERE title = '$title'";
        $success = $db->query($sql);
        $this->closeDB($db);
        return $success;
    }

    function checkUser($login, $password)
    {
        if (($login == "") || ($password == "")) return false;
        $db = $this->connectDB();
        $sql = "SELECT `password` FROM `users` WHERE login = '$login'";
        $result_set = $db->query($sql);
        if ($result_set != false) {
            $user = $result_set->fetch_array();
            $real_password = $user['password'];

            $this->closeDB($db);
            return $real_password == $password;
        }

    }

    function checkLogin($login)
    {
        $db = $this->connectDB();
        $sql = "SELECT `login` FROM `users` WHERE login ='$login'";
        $result_set = $db->query($sql);
        $user = $result_set->fetch_array();
        $real_login = $user['login'];
        $this->closeDB($db);
        return $real_login == $login;
    }

    function checkEmail($login, $email)
    {
        $db = $this->connectDB();
        $sql = "SELECT `email` FROM `users` WHERE login ='$login'";
        $result_set = $db->query($sql);
        $user = $result_set->fetch_array();
        $real_email = $user['email'];
        $this->closeDB($db);
        return $real_email == $email;
    }

    function setPassword($login, $password)
    {
        if (($login == "") || ($password == "")) return false;
        $db = $this->connectDB();
        $sql = "UPDATE `users`  SET `password` ='$password' WHERE login = '$login'";
        $db->query($sql);
        $this->closeDB($db);
    }

    function setEmail($login, $email)
    {
        if (($login == "") || ($email == "")) return false;
        $db = $this->connectDB();
        $sql = "UPDATE `users`  SET `email` ='$email' WHERE login = '$login'";
        $db->query($sql);
        $this->closeDB($db);
    }

    function isAdmin($login)
    {
        $db = $this->connectDB();
        $sql = "SELECT * FROM `users` WHERE login ='$login'";
        $result_set = $db->query($sql);
        $row = $result_set->fetch_array();
        $this->closeDB($db);
        return $row['admin'];
    }

    function getAvatar($login)
    {
        $db = $this->connectDB();
        $sql = "SELECT `avatar` FROM `users` WHERE `login`='$login'";
        $result_set = $db->query($sql);
        $row = $result_set->fetch_array();
        $this->closeDB($db);
        return $row['avatar'];
    }

    function isSecurity($avatar)
    {
        $name = $avatar["name"];
        $type = $avatar["type"];
        $size = $avatar["size"];
        $blacklist = array(".php", ".phtml", ".php3", ".php4", ".php5", "php7");
        foreach ($blacklist as $item) {
            if (preg_match("/$item\$/i", $name)) return false;
        }
        if (($type != "image/gif") && ($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg")) return false;
        if ($size > 5 * 1024 * 1024) return false;
        return true;
    }

    function loadAvatar($avatar, $login)
    {
        $type = $avatar["type"];
        $uploaddir = "avatars/";
        $name = md5(microtime()) . "." . substr($type, strlen("image/"));
        $uploadfile = $uploaddir . $name;
        if (move_uploaded_file($avatar["tmp_name"], $uploadfile)) {
            $this->setAvatar($login, $name);
            return true;
        } else return false;
    }

    function setAvatar($login, $name)
    {
        $db = $this->connectDB();
        $sql = "UPDATE `users` SET `avatar`='$name' WHERE login = '$login'";
        $db->query($sql);
        $this->closeDB($db);
    }
}