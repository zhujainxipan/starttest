<?php
/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/15
 * Time: 11:46
 */

function clearCookies()
{
    setcookie('username', time() - 3600);
    setcookie('isLogin', time() - 3600);
}


if ($_GET['action'] == 'login') {
    clearCookies();
    if ($_POST['username'] == 'admin' && $_POST['password'] == '123456') {
        setcookie('username', $_POST['username'], time() + 60 * 60 * 24 * 7);
        setcookie('isLogin', '1', time() + 60 * 60 * 24 * 7);
        header('Location:index.php');
    } else {
        die("用户名或密码错误");
    }
} elseif ($_GET['action'] == 'logout') {
    clearCookies();
}
?>

<html>

<head><title>用户登录</title></head>
<form action="login.php?action=login" method="post">
    用户名：<input type="text" name="username"/> <br>
    密码：<input type="password" name="password"/><br>
    <input type="submit" value="登录"/>
</form>

</html>

