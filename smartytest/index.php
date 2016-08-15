<?php
/**
 * Created by PhpStorm.
 * User: annuoaichengzhang
 * Date: 16/8/15
 * Time: 16:03
 */
require "init.inc.php";

$smarty->assign("title", "测试用的网页标题");
$smarty->assign("content", "测试用的网页内容");

$smarty->display("test.htm");

?>