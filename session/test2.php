<?php
/**
 * Created by PhpStorm.
 * Date: 16/8/15
 * Time: 14:33
 */

session_start();

echo $_SESSION['username'] . '<br>';
echo 'session id' . session_id() . '<br>';

?>