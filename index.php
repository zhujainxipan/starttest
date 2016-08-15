<?php
/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/15
 * Time: 11:56
 */

?>

<html>
<head><title>网站主站页面</title></head>
<body>
<?php
echo '您好' . $_COOKIE['username'];
?>

<a href="login.php?action=logout">退出</a>

<p>这里显示网页的主题内容</p>

</body>


</html>
