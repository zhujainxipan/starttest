<?php
/**
 * Created by PhpStorm.
 * Date: 16/8/15
 * Time: 14:30
 */

session_start();

$_SESSION['username'] = 'admin';

echo 'session id'.session_id().'<br>';

?>

<a href="test2.php?<?php echo SID ?>">通过URL传递session id</a>

